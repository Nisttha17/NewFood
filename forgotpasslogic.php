<?php
// Include PHPMailer autoloader
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $email = $_POST["email"];

    // Validate email address (you can add more validation if needed)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle invalid email address
        $error = "Invalid email address";
    } else {
        try {
            // Create a new PHPMailer instance
            $mail = new PHPMailer(true);
            
            //Server settings
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host = "smtp.gmail.com";                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'foodbankindiaofficial123@gmail.com';               // SMTP username
            $mail->Password   = '';                   // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('foodbankindiaofficial123@gmail.com', 'FOOD BANK');
            $mail->addAddress($email);                                  // Add a recipient

            // Content
            $mail->isHTML(true);                                        // Set email format to HTML
            $mail->Subject = 'Password Reset';
            $mail->Body = 'To reset your password, click the following link: <a href="http://localhost/NewFood/reset_password.php? token=' . urlencode($token) . '">Reset Password</a>';

            // Send email
            $mail->send();

            // Email sent successfully
            $success = "Password reset instructions have been sent to your email address";
        } catch (Exception $e) {
            // Error sending email

            $error = "Error sending email. Please try again later";
              // Error sending email
    $error = "Error sending email: " . $mail->ErrorInfo;
        }
    }
}
?>

<!-- Display form and messages -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="card-title">Forgot Your Password?</h2>
                        <?php if (isset($error)) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($success)) : ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $success; ?>
                            </div>
                        <?php endif; ?>
                        <form action="reset_password.php" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Reset Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
