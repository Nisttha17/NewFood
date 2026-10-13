<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Establish database connection (replace placeholders with actual credentials)
$con = mysqli_connect("localhost", "username", "password", "database_name");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $Dname = $_POST['Dname'];
    $Demail = $_POST['Demail'];
    $foodName = mysqli_real_escape_string($con, $_POST['foodName']);
    $foodType = mysqli_real_escape_string($con, $_POST['foodType']);
    $foodQuality = mysqli_real_escape_string($con, $_POST['foodQuality']);
    $numOfPlates = mysqli_real_escape_string($con, $_POST['numOfPlates']);
    $pickupTime = mysqli_real_escape_string($con, $_POST['pickupTime']);
    $selectState = mysqli_real_escape_string($con, $_POST['selectState']);
    $selectCity = mysqli_real_escape_string($con, $_POST['selectCity']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $contactNumber = mysqli_real_escape_string($con, $_POST['contactNumber']);
    $foodImage = mysqli_real_escape_string($con, $_FILES['foodImage']['name']);

    $donorQuery = "SELECT * FROM donation WHERE Demail = ?";
    $stmt = mysqli_prepare($con, $donorQuery);
    mysqli_stmt_bind_param($stmt, "s", $Demail);
    mysqli_stmt_execute($stmt);
    $donorResult = mysqli_stmt_get_result($stmt);

    if ($donorResult && mysqli_num_rows($donorResult) > 0) {
        $donorData = mysqli_fetch_assoc($donorResult);
        $donorId = $donorData['donor_id'];

        // Assign a volunteer (example - replace with your logic)
        $volunteerId = 1; // Replace this with your logic to assign a volunteer

        // Insert donation into donations table
        $insertQuery = "INSERT INTO donationlist (donor_id, volunteer_id, foodName, foodType, foodQuality, numOfPlates, pickupTime, selectState, selectCity, address, contactNumber, foodImage) 
                        VALUES ('$donorId', '$volunteerId', '$foodName', '$foodType', '$foodQuality', '$numOfPlates', '$pickupTime', '$selectState', '$selectCity', '$address', '$contactNumber', '$foodImage')";

        $queryResult = mysqli_query($con, $insertQuery);

        if ($queryResult) {
             // File upload after successful query execution
             move_uploaded_file($_FILES["foodImage"]["tmp_name"], "uploads/" . $_FILES["foodImage"]["name"]);

             // Send email to donor
             $mail = new PHPMailer(true);
             $mail->isSMTP();
             $mail->Host = 'smtp.gmail.com'; // Your SMTP server
             $mail->SMTPAuth = true;
             $mail->Username = 'foodbankindiaofficial123@gmail.com'; // Your email address
             $mail->Password = ''; // Your email password
             $mail->SMTPSecure = 'tls';
             $mail->Port = 587;
 
             $mail->setFrom('foodbankindiaofficial123@gmail.com', 'FoodBank');
             $mail->addAddress($Demail, $Dname);
 
             $mail->isHTML(true);
             $mail->Subject = 'Greetings from Food Bank';
             $mail->Body = "<h1>Thank you for your donation!</h1><p>Your donation details have been successfully recorded. We appreciate your support.</p>";
 

            try {
                $mail->send();
                // Redirect to success page or display success message
                header("Location: success.php");
                exit();
            } catch (Exception $e) {
                $_SESSION['status'] = "Email could not be sent. Error: {$mail->ErrorInfo}";
                header("Location: error.php");
                exit();
            }
        } else {
            $_SESSION['status'] = "Query execution failed: " . mysqli_error($con);
            header("Location: error.php");
            exit();
        }
    } else {
        $_SESSION['status'] = "Donor Retrieval Error or Email Not Found";
        header("Location: error.php");
        exit();
    }
}

mysqli_close($con);
?>
