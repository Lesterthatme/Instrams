<?php
require '../../config/dbcon.php';
session_start();

header('Content-Type: application/json');
$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);

if (isset($data['category'])) {
    $conn->begin_transaction();
    try {
        //variables
        $category = $data['category'];
        $multiplier = $data['multiplier'];

        $goldWinner = $data['goldWinner'];
        $goldParticipant1 = $data['goldParticipant1'] ?? '';
        $goldParticipant2 = $data['goldParticipant2'] ?? '';

        $silverWinner = $data['silverWinner'];
        $silverParticipant1 = $data['silverParticipant1'] ?? '';
        $silverParticipant2 = $data['silverParticipant2'] ?? '';

        $bronzeWinner       = $data['bronzeWinner']       ?? null;
        $bronzeParticipant1 = $data['bronzeParticipant1'] ?? null;
        $bronzeParticipant2 = $data['bronzeParticipant2'] ?? null;

        $bronzeWinner2       = $data['bronzeWinner2']       ?? null;
        $bronzeParticipant11 = $data['bronzeParticipant11'] ?? null;
        $bronzeParticipant22 = $data['bronzeParticipant22'] ?? null;

        $medalGold = "Gold";
        $medalSilver = "Silver";
        $medalBronze = "Bronze";

        // add medal for gold
        $stmt1 = $conn->prepare('INSERT INTO medal(insti_id, sport_id, medal_type, multiplier, participant1, participant2) VALUES (?,?,?,?,?,?)');
        $stmt1->bind_param('ssssss',  $goldWinner, $category, $medalGold, $multiplier, $goldParticipant1, $goldParticipant2);
        if (!$stmt1->execute()) {
            echo json_encode([
                'success' => false,
                'message' => 'First Query Failed.'
            ]);
            exit;
        }

        // add medal for Silver
        $stmt2 = $conn->prepare('INSERT INTO medal(insti_id, sport_id, medal_type, multiplier, participant1, participant2) VALUES (?,?,?,?,?,?)');
        $stmt2->bind_param('ssssss',   $silverWinner, $category, $medalSilver, $multiplier, $silverParticipant1, $silverParticipant2);
        if (!$stmt2->execute()) {
            echo json_encode([
                'success' => false,
                'message' => 'Second Query Failed.'
            ]);
            exit;
        }

        if (!empty($bronzeWinner)) {
            $stmt3 = $conn->prepare('INSERT INTO medal(insti_id, sport_id, medal_type, multiplier, participant1, participant2) VALUES (?,?,?,?,?,?)');
            $stmt3->bind_param('ssssss',   $bronzeWinner, $category, $medalBronze, $multiplier, $bronzeParticipant1, $bronzeParticipant2);
            if (!$stmt3->execute()) {
                echo json_encode([
                    'success' => false,
                    'message' => 'Third Query Failed.'
                ]);
                exit;
            }
        }

        if (!empty($bronzeWinner2)) {
            $stmt3 = $conn->prepare('INSERT INTO medal(insti_id, sport_id, medal_type, multiplier, participant1, participant2) VALUES (?,?,?,?,?,?)');
            $stmt3->bind_param('ssssss',   $bronzeWinner2, $category, $medalBronze, $multiplier, $bronzeParticipant11, $bronzeParticipant22);
            if (!$stmt3->execute()) {
                echo json_encode([
                    'success' => false,
                    'message' => 'Third Query Failed.'
                ]);
                exit;
            }
        }

        //change the sport into has_done
        $done = "1";
        $stmt4 = $conn->prepare('UPDATE sport SET has_done = ? WHERE sport_id = ?');
        $stmt4->bind_param('ss', $done, $category);
        if (!$stmt4->execute()) {
            echo json_encode([
                'success' => false,
                'message' => 'Fourth Query Failed.'
            ]);
            exit;
        }

        $conn->commit();
        echo json_encode([
            'success' => true,
            'message' => 'Record Added.'
        ]);
        exit;
    } catch (Exception $e) {
        $conn->rollback();
        echo json_encode([
            'success' => false,
            'message' => 'Something Went Wrong in DB.'
        ]);
        exit;
    }
} else {

    echo json_encode([
        'success' => false,
        'message' => 'Something Went Wrong.'
    ]);
    exit;
}
