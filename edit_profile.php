<?php

ob_start();
// rest of your code

session_start();
include('dbcon.php');
include('navbar.php');

// Check if the user is logged in, using the email session variable from the login process
if (!isset($_SESSION['auth_user']['email'])) {
    header("Location: login.php");
    exit();
}
if (!isset($_SESSION['authenticated'])) {
    header("Location: login.php");
    exit();
}

$user_email = $_SESSION['auth_user']['email'];

// Fetch user data from the database using the email
$stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $user_email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $userData = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: aliceblue;
           
            
        }

        .profile-container {
            background-color: aliceblue;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 400px;
            width: 100%;
            animation: fadeIn 0.5s ease-in-out;
            margin-top: 50px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: green;
            font-weight: bold;
            width: 100%; /* Set label width */
            text-align: left; /* Align labels to the left */
            padding-left: 18px;
        }

        input[type="text"],
        input[type="number"] {
            width: calc(100% - 22px); /* Adjusted width for input fields */

            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: orange;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
      
    </style>
</head>
<body>
    <center>
    <?php

?>
    <div class="profile-container">
        <h3 style="margin-top: 0;">Edit Your Profile</h3>
        <form action="Update_Profile.php" method="post" >
            <label for="firstname" class="lpro">First Name</label>
            <input type="text" id="firstname" name="firstname" value="<?= isset($userData['firstname']) ? $userData['firstname'] : '' ?>" required>

            <label for="lastname" class="lpro">Last Name</label>
            <input type="text" id="lastname" name="lastname" value="<?= isset($userData['lastname']) ? $userData['lastname'] : '' ?>" required>

            <label for="gender" class="lpro">Gender</label>
            <input type="text" id="gender" name="gender" value="<?= isset($userData['gender']) ? $userData['gender'] : '' ?>" required>

            <label for="age" class="lpro">Age</label>
            <input type="number" id="age" name="age" value="<?= isset($userData['age']) ? $userData['age'] : '' ?>" required>

            <label for="Contact">Contact:</label>
        <input type="text" id="Contact" name="Contact" value="<?= isset($userData['Contact']) ? $userData['Contact'] : '' ?>" required><br><br>

<a href="Update_Profile.php">
            <button type="submit">Update Profile</button>
        </form>
    
    </div>
    </center>
</body>
</html>


<?php
} else {
    echo "User not found!";
}
?>
