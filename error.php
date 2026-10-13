<!DOCTYPE html>
<html>
<head>
    <title>Error Page</title>
</head>
<body>
    <h2>Error Occurred</h2>
    <?php
    session_start();
    if (isset($_SESSION['status'])) {
        echo "<p>{$_SESSION['status']}</p>";
        unset($_SESSION['status']); // Clear the status message
    } else {
        echo "<p>Unknown error occurred.</p>";
    }
    ?>
</body>
</html>
