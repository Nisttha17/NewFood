<?php
session_start();
include('dbcon.php');

if (isset($_POST['logbutton'])) {
    if (!empty(trim($_POST['email'])) && !empty(trim($_POST['rpassword']))) {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $rpassword = mysqli_real_escape_string($con, $_POST['rpassword']);

        // Check if the user exists in the database
        $login_query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $login_query_run = mysqli_query($con, $login_query);

        if ($login_query_run && mysqli_num_rows($login_query_run) > 0) {
            $row = mysqli_fetch_array($login_query_run);

            // Verify the password
            if ($rpassword == $row['rpassword']) {
                $_SESSION['authenticated'] = TRUE;
                $_SESSION['auth_user'] = [
                    'username' => $row['firstname'],
                    'Contact' => $row['Contact'],
                    'email' => $row['email'],
                ];

                $_SESSION['status'] = "You are Logged in Successfully!";
                header("Location: donate.php");
                exit();
            } else {
                $_SESSION['status'] = "Invalid email or Password!";
                header("Location: login.php");
                exit();
            }
        } else {
            $_SESSION['status'] = "Invalid email or Password!";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['status'] = "All fields are mandatory";
        header("Location: login.php");
        exit();
    }
}
?>
