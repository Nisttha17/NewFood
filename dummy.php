<?php
session_start();

// Check if methane range is provided via form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['methaneRange'])) {
    // Validate and sanitize the input
    $methaneRange = filter_var($_POST['methaneRange'], FILTER_SANITIZE_STRING);

    // Save the methane range to the database
    $conn = new mysqli("localhost", "root", "", "foodnew");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "UPDATE settings SET methane_range = '$methaneRange' WHERE id = 1";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['status'] = "Methane range saved successfully.";
    } else {
        $_SESSION['status'] = "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

// Fetch the current methane range from the database
$conn = new mysqli("localhost", "root", "", "foodnew");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT methane_range FROM settings WHERE id = 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$currentMethaneRange = $row['methane_range'];
$conn->close();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>Admin Panel</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php if (isset($_SESSION['status'])): ?>
                    <div class="alert alert-info"><?php echo $_SESSION['status']; ?></div>
                    <?php unset($_SESSION['status']); ?>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header">
                        Admin Panel
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="form-group">
                                <label for="methaneRange">Methane Range:</label>
                                <input type="text" class="form-control" id="methaneRange" name="methaneRange" value="<?php echo $currentMethaneRange; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>



body {
            font-family: sans-serif;
            background-color: aliceblue;
        }

        .container-fluid {
            max-width: 100%;
        }

        .highlight {
            background-color: palegreen;
            color: black;
        }

        #methaneDialog {
            display: none;
            position: fixed;
            z-index: 1000;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 5px;
        }