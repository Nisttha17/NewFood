<?php
// Start the session to access session variables
session_start();

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if foodid and status are set
    if (isset($_POST["foodid"]) && isset($_POST["status"])) {
        // Retrieve form data
        $foodid = $_POST["foodid"];
        $status = $_POST["status"];

        // Database connection
        $conn = mysqli_connect("localhost", "root", "", "foodnew");

        // Prepare SQL statement to update status
        $query = "UPDATE donation SET status = '$status' WHERE Foodid = '$foodid'";

        // Execute the query
        if (mysqli_query($conn, $query)) {
            $_SESSION['status'] = "Status updated successfully";
        } else {
            $_SESSION['status'] = "Error updating status: " . mysqli_error($conn);
        }

        // Close database connection
        mysqli_close($conn);

        // Redirect back to the page where the form was submitted
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    } else {
        $_SESSION['status'] = "Food ID or status is missing";
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    }
} else {
    $_SESSION['status'] = "Invalid request method";
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
}
?>
