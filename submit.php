<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Establish database connection
$con = mysqli_connect("localhost", "root", "", "foodnew");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to sanitize user input
function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if (isset($_POST['submit'])) {
    // Sanitize and validate input
    $fullname = sanitizeInput($_POST['fullname']);
    $Age = intval($_POST['Age']);
    $gender = sanitizeInput($_POST['gender']);
    $Contact = sanitizeInput($_POST['Contact']);
    $Email = filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL) ? $_POST['Email'] : '';
    $Residential = sanitizeInput($_POST['Residential']);
    $City = sanitizeInput($_POST['City']);
    $District = sanitizeInput($_POST['District']);

    // Using prepared statement to prevent SQL injection
    $query = "INSERT INTO joinus (`fullname`, `Age`, `gender`, `Contact`, `Email`, `Residential`, `City`, `District`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "sissssss", $fullname, $Age, $gender, $Contact, $Email, $Residential, $City, $District);

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Sending the email
            $mail = new PHPMailer(true);
            $mail->isSMTP();      
            $mail->SMTPAuth   = true;                                         //Send using SMTP
                $mail->Host       = "smtp.gmail.com";                     //Set the SMTP server to send through
                                       //Enable SMTP authentication
                $mail->Username   = "foodbankindiaofficial123@gmail.com";                     //SMTP username
                $mail->Password   = "";                               //SMTP password
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                //Recipients
                $mail->setFrom('foodbankindiaofficial123@gmail.com', $fullname);
                $mail->addAddress($Email);     //Add a recipient
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Greetings from Food Bank';
                $email_template = "
                <h2> Your form has been submitted successfully! </h2>
                <h3>We will send a message soon to confirm your enrollment in Food Bank! </h3>
                <br/> <br/>
                ";
                $mail->Body    = $email_template;
            $mail->send();

            // Redirect to success page after sending email
            header("Location: successjoin.php");
            exit(); // Make sure to stop further execution after redirection
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "Prepare statement error: " . mysqli_error($con);
    }

    // Close statement
    mysqli_stmt_close($stmt);
} else {
    echo "Form submission error.";
}

// Close connection at the end
mysqli_close($con);
?>
