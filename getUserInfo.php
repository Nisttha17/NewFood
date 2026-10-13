<?php
ob_start();
session_start();
include('dbcon.php');
include('navbar.php');

if (!isset($_SESSION['authenticated'])) {
    // Redirect to the login page
    header("Location: login.php");
    exit();
}

if (!isset($_SESSION['auth_user']['email'])) {
    header("Location: login.php");
    exit();
}

$user_email = $_SESSION['auth_user']['email'];

$stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $user_email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $userData = $result->fetch_assoc();
} else {
    // Handle scenario if user data not found
    echo "User data not found!";
    exit();
}

// Render the HTML to display user profile
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: aliceblue;
        }
        .profile {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: aliceblue;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile h2 {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .profile-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .profile-info span {
            font-weight: bold;
        }
        .profile-info .actual::after {
            content: ":";
            margin-right: 2px;
        }
    </style>
</head>
<body>
    <div class="profile">
       <center><h2>User Profile</h2></center> 


               <div class="profile-info">
            <span class="actual">First Name</span>
            <span><?= $userData['firstname'] ?? 'N/A' ?></span>
        </div>
        <div class="profile-info">
            <span class="actual">Last Name</span>
            <span><?= $userData['lastname'] ?? 'N/A' ?></span>
        </div>
        <div class="profile-info">
            <span class="actual">Email</span>
            <span><?= $userData['email'] ?? 'N/A' ?></span>
        </div>
        <div class="profile-info">
            <span class="actual">Gender</span>
            <span><?= $userData['gender'] ?? 'N/A' ?></span>
        </div>
        <div class="profile-info">
            <span class="actual">Age</span>
            <span><?= $userData['age'] ?? 'N/A' ?></span>
        </div>
        <div class="profile-info">
            <span class="actual">Contact no.</span>
            <span><?= $userData['Contact'] ?? 'N/A' ?></span>
        </div>
        <div class="profile-info">
            <span class="actual">Role in Food Bank</span>
            <span><?= $userData['contachst'] ?? 'Donor' ?></span>
        </div>

        <!-- Add more profile fields as needed -->
    </div>
</body>
</html>
