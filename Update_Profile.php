<?php
session_start();
include('dbcon.php');

// Check if the user is logged in, using the email session variable from the login process
if (!isset($_SESSION['auth_user']['email'])) {
    header("Location: login.php");
    exit();
}

// Fetch user email from the session
$user_email = $_SESSION['auth_user']['email'];

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data and sanitize
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $contact = mysqli_real_escape_string($con, $_POST['Contact']);

    // Update user information in the database
    $update_query = "UPDATE users SET firstname='$firstname', lastname='$lastname', gender='$gender', age='$age', Contact='$contact' WHERE email='$user_email'";
    $update_result = mysqli_query($con, $update_query);

    if ($update_result) {
        // Update successful
        $_SESSION['status'] = "Profile updated successfully!";
        header("Location: SuccessprofileEdit.php");
        exit();
    } else {
        // Update failed
        $_SESSION['status'] = "Failed to update profile. Please try again.";
        header("Location: edit_profile.php");
        exit();
    }
} else {
    // If the form wasn't submitted through POST method, redirect to edit profile page
    header("Location: edit_profile.php");
    exit();
}
?>
