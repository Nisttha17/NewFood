<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check credentials (Replace these values with your admin credentials)
    $admin_username = "admin";
    $admin_password = "";
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    if ($input_username == $admin_username && $input_password == $admin_password) {
        // Authentication successful, create admin session
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Authentication failed, redirect to login page
        header("Location: admin_login.php");
        exit();
    }
} else {
    // Redirect to login page if accessed directly without form submission
    header("Location: admin_login.php");
    exit();
}
?>
