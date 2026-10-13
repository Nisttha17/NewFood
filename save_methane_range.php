<?php
session_start();

// Check if foodId and methaneRange are provided
if (isset($_POST['foodId'], $_POST['methaneRange'])) {
    // Validate and sanitize the input
    $foodId = filter_var($_POST['foodId'], FILTER_SANITIZE_NUMBER_INT);
    $methaneRange = filter_var($_POST['methaneRange'], FILTER_SANITIZE_STRING);

    // Save the methane range to the database or perform any other actions
    // Replace 'your_db_connection' with your database connection code
    $conn = new mysqli("localhost", "root", "", "foodnew");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update methane range in the database
    $sql = "UPDATE donation SET methane_range = '$methaneRange' WHERE Foodid = $foodId";
    if ($conn->query($sql) === TRUE) {
        // Retrieve the saved methane range from the database
        $sql = "SELECT methane_range FROM donation WHERE Foodid = $foodId";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo $row['methane_range'];
        } else {
            echo "Methane range not found"; // Handle error if methane range is not found
        }
    } else {
        echo "Error updating methane range: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Food ID and methane range are not provided";
}
?>
