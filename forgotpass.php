<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: aliceblue;
        }
        .forgot-password-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: aliceblue;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .forgot-password-container h2 {
            color: #343a40;
            text-align: center;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        input[type="email"]:focus {
            border-color: #007bff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .btn-submit {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.15s ease-in-out;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        .back-to-login {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="forgot-password-container">
            <h2>Forgot Your Password?</h2>
            <form action="forgotpasslogic.php" method="post"> <!-- Replace "#" with your password recovery script -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-submit">Reset Password</button>
                </div>
            </form>
            <p class="back-to-login">Remember your password? <a href="login.php">Log in</a></p>
        </div>
    </div>
</body>
</html>
