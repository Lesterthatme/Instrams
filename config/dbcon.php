<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

date_default_timezone_set('Asia/Manila');

$servername = "127.0.0.1";
$username = "root@";
$password = "";
$dbname = "instrams";

$conn = new mysqli($servername, $username, $password, $dbname, 3307);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("SET time_zone = '+08:00'");

// Check both PHP and MySQL time
// echo "PHP time: " . date('Y-m-d H:i:s') . "<br>";

// $result = $conn->query("SELECT NOW() AS `current_time`");
// $row = $result->fetch_assoc();
// echo "MySQL time: " . $row['current_time'];
