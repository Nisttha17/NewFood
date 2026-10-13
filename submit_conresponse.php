<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST['submit'])) {
    // Get user details from the form
    $donorEmail = $_POST['email'];
    $responseMessage = $_POST['message'];
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output

        $mail->isSMTP();
        $mail->SMTPAuth   = true;
        $mail->Host       = "smtp.gmail.com";
        $mail->Username   = "foodbankindiaofficial123@gmail.com";
        $mail->Password   = ""; // Use your App Password here
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('foodbankindiaofficial123@gmail.com');
        $mail->addAddress($donorEmail);
        $mail->isHTML(true);

        $mail->Subject = 'Greetings from Food Bank
        ';
        $mail->Body = $responseMessage;

        $mail->send();
        $_SESSION['status'] = 'Email sent successfully';
        
    } catch (Exception $e) {
        $_SESSION['status'] = 'Failed to send email. Error: ' . $mail->ErrorInfo;
    }

    // Redirect back to the main page
    header("Location: admin_contact.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compose Response</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
    body{
        background-color: wheat;
    }
</style>


</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h2 class="mb-0">Compose Response</h2>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="donor_email">Donor Email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="response_message">Response Message:</label>
                        <textarea name="message" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Send Response</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery (if not already included) -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
