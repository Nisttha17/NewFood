<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "foodnew";

$conn = new mysqli($host, $username, $password, $database);

if (isset($_GET['code'])) {
    $verify_token = $_GET['code'];

    $sql = "UPDATE users SET is_verified = 1 WHERE verify_token = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $verify_token);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION['status'] = "Email verification successful. You can now log in.";
        header("Location: login.php");
        exit();
    } else {
        $_SESSION['status'] = "Invalid verification code.";
        header("Location: login.php");
        exit();
    }

    $stmt->close();
    $conn->close();
} else {
    $_SESSION['status'] = "Invalid verification code.";
    header("Location: login.php");
    exit();
}
?>
