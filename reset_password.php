<?php
// Check if token is valid (you'll need to implement this logic)
$isValidToken = true; // Placeholder for token validation logic

// Check if token is valid and not expired
if ($isValidToken) {
    $message = "Enter your new password below:";
} else {
    $message = "Invalid or expired password reset link.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #f8f9fa;
            border-bottom: none;
            text-align: center;
        }
        .card-body {
            padding: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Reset Your Password</h2>
                        <p><?php echo $message; ?></p>
                    </div>
                    <div class="card-body">
                        <?php if ($isValidToken) : ?>
                            <form action="reset_password_process.php" method="post">
                                <div class="form-group">
                                    <label for="password">New Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                                </div>
                                <?php if (isset($_GET['token'])) : ?>
        <input type="hidden" name="token" value="<?php echo htmlspecialchars($_GET['token']); ?>">
    <?php endif; ?>
    <button type="submit" class="btn btn-primary">Reset Password</button>

                            </form>
                        <?php else : ?>
                            <p class="text-danger">Invalid or expired password reset link.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
