<?php
require 'vendor/autoload.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$host = "localhost";
$username = "root";
$password = "";
$database = "foodnew";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) 
{
    $Dname = $_POST['Dname'];
    $Demail = $_POST['Demail'];
    $foodName = $_POST['foodName'];
    $foodQuality = $_POST['foodQuality'];
    $numOfPlates = $_POST['numOfPlates'];
    $pickupTime = $_POST['pickupTime'];
    $foodStatus = $_POST['foodStatus'];
    $validTillPacked = ($foodStatus == 'packed') ? date('Y-m-d H:i:s', strtotime('+2 hours')) : null;
    $selectState = $_POST['selectState'];
    $selectCity = $_POST['selectCity'];
    $address = $_POST['address'];
    $contactNumber = $_POST['contactNumber'];
    $foodImage = $_FILES['foodImage']['name'];
    $foodexpiry = $_POST['foodexpiry'];
    $query = "INSERT INTO donation (Dname, Demail, foodName, foodQuality, numOfPlates, pickupTime, foodStatus, validTillPacked, selectState, selectCity, address, contactNumber, foodImage, foodexpiry )
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($query);

    if ($stmt) 
    {
        $stmt->bind_param("ssssissssssiss", $Dname, $Demail, $foodName, $foodQuality, $numOfPlates, $pickupTime, $foodStatus, $validTillPacked, $selectState, $selectCity, $address, $contactNumber, $foodImage, $foodexpiry);
    }

    if ($stmt->execute()) 
    {
        move_uploaded_file($_FILES["foodImage"]["tmp_name"], "uploads/" . $_FILES["foodImage"]["name"]);

        // Send email
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPAuth   = true;
        $mail->Host       = "smtp.gmail.com";
        $mail->Username   = "foodbankindiaofficial123@gmail.com";
        $mail->Password   = "";
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('foodbankindiaofficial123@gmail.com', $Dname);
        $mail->addAddress($Demail);

        $mail->isHTML(true);
        $mail->Subject = 'Greetings from Food Bank';
        $email_template = "
            <h2>Your Donation form has been submitted successfully!</h2>
            <h3>We will be soon at your doorstep to collect the food. You are indeed a real superhero!</h3>
            <br/><br/>
        ";
        $mail->Body = $email_template;

        try 
        {
            $mail->send();
            $_SESSION['status'] = "Email sent";
            header("Location: success.php");
            exit;
        } 
        catch (Exception $e) 
        {
            $_SESSION['status'] = "Email not sent. Error: {$mail->ErrorInfo}";
            header("Location: donationhistory.php");
            exit;
        }
    } 
    else 
    {
        $_SESSION['status'] = "Query execution failed";
        header("Location: donationhistory.php");
        exit;
    }
} 
else 
{
    $_SESSION['status'] = "Prepare statement error: " . $conn->error;
    header("Location: donationhistory.php");
    exit;
}

$stmt->close();
$conn->close();
?>
