<?php

require '../../config/dbcon.php';
session_start();

header('Content-Type: application/json');
$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);

$type = $_GET['medal'] ?? null;

if ($type == "total") {

    $stmt = $conn->prepare('SELECT insti.*, SUM(med.multiplier) AS totalMedal
FROM institute insti
JOIN medal med ON insti.insti_id = med.insti_id
GROUP BY med.insti_id
ORDER BY totalMedal DESC LIMIT 1');
    $stmt->execute();
    $result = $stmt->get_result();
    $sports = [];
    while ($row = $result->fetch_assoc()) {
        $sports[] = $row;
    }
    //send back 

    echo json_encode(['success' => true, 'message' => 'success', 'data' => $sports]);
    exit;
} else if ($type == "gold") {

    $stmt = $conn->prepare('SELECT insti.*, sum(med.multiplier) AS totalGold
FROM institute insti
JOIN medal med ON insti.insti_id = med.insti_id AND med.medal_type = "Gold"
GROUP BY med.insti_id
ORDER BY totalGold DESC limit 1');
    $stmt->execute();
    $result = $stmt->get_result();
    $sports = [];
    while ($row = $result->fetch_assoc()) {
        $sports[] = $row;
    }
    //send back 

    echo json_encode(['success' => true, 'message' => 'success', 'data' => $sports]);
    exit;
} else {
    echo json_encode(['success' => false, 'message' => 'Something went wrong. Please try again later.']);
    exit;
}
