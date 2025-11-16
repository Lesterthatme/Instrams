<?php

require '../../config/dbcon.php';
session_start();

header('Content-Type: application/json');
$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);

$type = $_GET['type'] ?? null;

if ($type) {
    $conn->begin_transaction();
    try {
        // query muna ung category ng sports
        $stmt = $conn->prepare('SELECT * FROM sport WHERE sport_category = ? AND has_done <> 1');
        $stmt->bind_param('s', $type);
        $stmt->execute();
        $result = $stmt->get_result();
        $sports = [];
        while ($row = $result->fetch_assoc()) {
            $sports[] = $row;
        }
        //send back 

        echo json_encode(['success' => true, 'message' => 'success', 'data' => $sports]);
        exit;
    } catch (Exception $e) {
        $conn->rollback();
        echo json_encode(['success' => false, 'message' => 'Something went wrong. Please try again later.']);
        exit;
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Something went wrong. Please try again later.']);
    exit;
}
