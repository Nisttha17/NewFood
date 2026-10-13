<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$host     = "localhost";
$username = "root";
$password = "";
$database = "foodnew";

$mailUser = "your_email@gmail.com";
$mailPass = "";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['regbutton'])) {
    $firstname    = $_POST['firstname'];
    $lastname     = $_POST['lastname'];
    $gender       = $_POST['gender'];
    $age          = $_POST['age'];
    $Contact      = $_POST['Contact'];
    $email        = $_POST['email'];
    $rpassword    = $_POST['rpassword'];
    $rcpassword   = $_POST['rcpassword'];
    $verify_token = md5(rand());
    $created_at   = date("Y-m-d H:i:s");

    $sql = "INSERT INTO users 
            (firstname, lastname, gender, age, Contact, email, rpassword, rcpassword, verify_token, created_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param(
            "sssiisssss",
            $firstname, $lastname, $gender, $age, $Contact,
            $email, $rpassword, $rcpassword, $verify_token, $created_at
        );

        if ($stmt->execute()) {
            try {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->SMTPAuth   = true;
                $mail->Host       = "smtp.gmail.com";
                $mail->Username   = $mailUser;
                $mail->Password   = $mailPass;
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;

                $mail->setFrom($mailUser, "Food Bank");
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = 'Email Verification from Food Bank';

                $email_template = "
                    <h2>You have registered on Food Bank</h2>
                    <h5>Verify your email address to Login with the link below</h5>
                    <br/><br/>
                    <a href='http://localhost/NewFood/verify-email.php?code=$verify_token'>Click Me</a>
                ";

                $mail->Body = $email_template;
                $mail->send();

                $_SESSION['status'] = "Registration successful. Check your email for verification.";
            } catch (Exception $e) {
                $_SESSION['status'] = "Registration successful, but email could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            $_SESSION['status'] = "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $_SESSION['status'] = "Error preparing statement: " . $conn->error;
    }

    $conn->close();

    header("Location: register.php");
    exit();
}
?>