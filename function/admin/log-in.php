<?php

require '../../config/dbcon.php';
session_start();

if (isset($_POST['login-submit-btn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['loginpassword']);

    if ($email == 'sdoadmin' && $password == '1952sdo2k25') {
        $_SESSION['admin_logged_in'] = true;
        header('Location: ../../pages/admin-dashboard.php');
        exit();
    } else {
        // Invalid credentials
        $_SESSION['error'] = "Invalid admin credentials.";
        header('Location: ../../pages/login-admin.php');
        exit();
    }
}
