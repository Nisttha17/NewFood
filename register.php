<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: sans-serif;
            background-image: url('https://lefikalaphodiso.co.za/wp-content/uploads/2021/09/donate-image.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }

        .containernew {
            margin-top: 00px; /* Adjust the margin-top as per your requirement */
            padding: 30px;
        }

        .card {
            background-color: #b0fa73;
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .labeldis {
            color: green;
        }

        h3 {
            color: greenyellow;
            text-align: center;
        }
    </style>
</head>

<body>
<?php
    if(isset($_SESSION['status']) && $_SESSION['status'] != '') {
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['status']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
        unset($_SESSION['status']);
    }
?>

    <main>
        <div class="containernew mt-5">
            <div class="row">
                <!-- First Card: Personal Information -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <center><h4 class="card-title">Personal Information</h4></center>
                            <form id="registrationForm" action="code.php" method="post">
                                <!-- First Name -->
                                <div class="form-group mb-3">
                                    <label for="firstname" class="labeldis">First Name</label>
                                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name" required />
                                </div>
                                <!-- Last Name -->
                                <div class="form-group mb-3">
                                    <label for="lastname" class="labeldis">Last Name</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter last name" required />
                                </div>
                                <!-- Contact -->
                                <div class="form-group mb-3">
                                    <label for="Contact" class="labeldis">Contact</label>
                                    <input type="text" class="form-control" name="Contact" id="Contact" placeholder="Enter Contact" required />
                                </div>
                                <!-- Gender -->
                                <div class="form-group mb-3">
                                    <label for="gender" class="labeldis">Gender</label>
                                    <select class="form-control" name="gender" id="gender" required>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <!-- Age -->
                                <div class="form-group mb-3">
                                    <label for="age" class="labeldis">Age</label>
                                    <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age" required />
                                </div>
                        </div>
                    </div>
                </div>

                <!-- Second Card: Email, Password, Confirm Password -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <center><h4 class="card-title">Account Information</h4></center>
                            <!-- Email -->
                            <div class="form-group mb-3">
                                <label for="email" class="labeldis">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required />
                            </div>
                            <!-- Password -->
                            <div class="form-group mb-3">
                                <label for="password" class="labeldis">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="rpassword" name="rpassword" placeholder="Enter password" required />
                                    <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                                        <i id="eyeIcon" class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Confirm Password -->
                            <div class="form-group mb-3">
                                <label for="confirmPassword" class="labeldis">Confirm Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="rcpassword" name="rcpassword" placeholder="Enter Confirm password" required />
                                    <button type="button" class="btn btn-outline-secondary" id="toggleConfirmPassword">
                                        <i id="confirmEyeIcon" class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Register Button -->
                            <center><button type="submit" name="regbutton" class="btn btn-success">Register</button></center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var passwordField = document.getElementById('rpassword');
            var confirmPasswordField = document.getElementById('rcpassword');
            var eyeIcon = document.getElementById('eyeIcon');
            var confirmEyeIcon = document.getElementById('confirmEyeIcon');

            document.getElementById('togglePassword').addEventListener('click', function() {
                var fieldType = passwordField.getAttribute('type');
                if (fieldType === 'password') {
                    passwordField.setAttribute('type', 'text');
                    eyeIcon.classList.remove('bi-eye');
                    eyeIcon.classList.add('bi-eye-slash');
                } else {
                    passwordField.setAttribute('type', 'password');
                    eyeIcon.classList.remove('bi-eye-slash');
                    eyeIcon.classList.add('bi-eye');
                }
            });

            document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
                var fieldType = confirmPasswordField.getAttribute('type');
                if (fieldType === 'password') {
                    confirmPasswordField.setAttribute('type', 'text');
                    confirmEyeIcon.classList.remove('bi-eye');
                    confirmEyeIcon.classList.add('bi-eye-slash');
                } else {
                    confirmPasswordField.setAttribute('type', 'password');
                    confirmEyeIcon.classList.remove('bi-eye-slash');
                    confirmEyeIcon.classList.add('bi-eye');
                }
            });
        });
    </script>
</body>

</html>