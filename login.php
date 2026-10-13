<?php
session_start();
include("navbar.php");
?>

<!doctype html>
<html lang="en">

<head>
    <title>Login Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: aliceblue;
            overflow-x: hidden;
        }

        .login-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 90vh;
            position: relative;
        }

        .login-image-left {
            width: 50%;
            height: 100%;
            background-size: cover;
            background-position: center;
            z-index: 0;
        }

        .login-image-left img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .login-form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 400px; /* Adjust the width as needed */
            z-index: 1;
            margin-right: 130px; /* Added margin to create space between the image and form */
        }

        .login-icon img {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            display: block;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 5px;
            color: #f39c12;
        }

        input[type="email"],
        input[type="password"] {
            width: calc(100% - 25px); /* Adjusted width */
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            margin-bottom: 10px;
        }

        input[type="password"] {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        #linksign {
            color: blue;
        }
    </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="login-container">
            <div class="login-image-left">
                <img src="https://media.istockphoto.com/id/1094461256/vector/food-bank-simple-concept-illustration-time-to-donate-food-donation-boxes-full-of-food-vector.jpg?s=612x612&w=0&k=20&c=g8sBNZ8uXZlUk_EPdcwjDqtl2aUk8uViOdzOtOPGsMg="
                    alt="Image">
            </div>

            <div class="login-form">
                <div class="login-icon">
                    <img src="https://cdn-icons-png.flaticon.com/512/295/295128.png" alt="Logo">
                    <h1 style="color: green;">Login Here</h1>
                </div>

                <?php
                if (isset($_SESSION['status']) && !empty($_SESSION['status'])) {
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION['status']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                unset($_SESSION['status']);
                }
                ?>
                <form action="logincode.php" method="POST">
                    <div class="form-group">
                        <label for="email" class="infi" name="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                   
                <div class="form-group">
                        <label for="password" class="infi">Password</label>
                        <div class="input-group">
                            <input type="password" id="password" name="rpassword" class="form-control" required>
                            <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <center>
                            <button type="submit" class="btn btn-success" name="logbutton">Submit</button>
                        </center>
                    </div>
                    <p style="color: #000000;">Don't have an account? <a href="register.php" id="linksign">Sign up</a></p>
                </form>
            </div>
        </div>
    </main>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"
        integrity="sha512-+BzDx6MSB7g0weIRCo92mltxcv1eZnRMOGtGdJjNK26UokkiUv8Ql1ofV++buoIP0m/e3SWkqVIlIRsFV3GuUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // JavaScript code for toggling password visibility
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye icon
            this.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
        });
    </script>
</body>

</html>