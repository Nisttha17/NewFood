<?php
// Get data from POST request
$data = $_POST['data'];

// Insert data into database
$servername = "localhost";
$username = "root";
$password = "";
$database = "foodnew";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO sensor_data (data) VALUES ('$data')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
