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
} else if ($type == 'ranking') {
    $stmt = $conn->prepare("SELECT insti.*, 
SUM(CASE WHEN med.medal_type = 'Gold' THEN med.multiplier ELSE 0 END) AS totalGold,
    SUM(CASE WHEN med.medal_type = 'Silver' THEN med.multiplier ELSE 0 END) AS totalSilver,
    SUM(CASE WHEN med.medal_type = 'Bronze' THEN med.multiplier ELSE 0 END) AS totalBronze,
    SUM(med.multiplier) AS total
FROM institute insti
RIGHT JOIN medal med ON insti.insti_id = med.insti_id 
GROUP BY med.insti_id
ORDER BY totalGold DESC,
    totalSilver DESC,
    totalBronze DESC");
    $stmt->execute();
    $result = $stmt->get_result();
    $sports = [];
    while ($row = $result->fetch_assoc()) {
        $sports[] = $row;
    }
    //send back 

    echo json_encode(['success' => true, 'message' => 'success', 'data' => $sports]);
    exit;
} else if ($type == 'games') {

    $stmt = $conn->prepare("SELECT COUNT(sport_id) AS totalEvents FROM sport");
    $stmt->execute();
    $result = $stmt->get_result();
    $sports = [];
    while ($row = $result->fetch_assoc()) {
        $sports[] = $row;
    }
    //send back 

    echo json_encode(['success' => true, 'message' => 'success', 'data' => $sports]);
    exit;
} else if ($type == 'category') {
    $sport = $_GET['sport'] ?? null;
    $gender = $_GET['gender'] ?? null;

    $stmt = $conn->prepare("SELECT 
    s.sub_category,
    insti.insti_id,
    insti.inti_name,
    insti.logo,
    insti.acronym,
    s.sport_id,
    s.sport_name,
    m.medal_type,
    m.participant1,
    m.participant2
FROM medal m
JOIN institute insti ON m.insti_id = insti.insti_id
JOIN sport s ON m.sport_id = s.sport_id
WHERE s.sport_name = ?
  AND s.gender = ?
ORDER BY 
    
    m.medal_id asc");
    $stmt->bind_param('ss', $sport, $gender);

    $stmt->execute();
    $result = $stmt->get_result();
    $sports = [];
    while ($row = $result->fetch_assoc()) {
        $sports[] = $row;
    }

    echo json_encode(['success' => true, 'message' => 'success', 'data' => $sports]);
    exit;
} else {
    echo json_encode(['success' => false, 'message' => 'Something went wrong. Please try again later.']);
    exit;
}
