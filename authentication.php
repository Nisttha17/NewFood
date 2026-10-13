<!-- <?php
// session_start();
// if(!isset($_SESSION['authenticated'])){
//     $_SESSION['status'] = "Please login first to Donate!";
//     header("Location: login.php");
//     exit(0);
// }
?> -->



<?php
// Ensure session_start() is called at the very beginning
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['authenticated'])) {
    $_SESSION['status'] = "Please login first to Donate!";
    header("Location: login.php");
    exit(0);
}
?>
