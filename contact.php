<?php include("navbar.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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

        .contact-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100vh;
            position: relative;
        }

        .contact-image-left {
            width: 50%;
            height: 100%;
            background-size: cover;
            background-position: center;
            z-index: 0;
        }

        .contact-image-left img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .contact-form {
            background-color: aliceblue;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 400px; /* Adjust the width as needed */
            z-index: 1;
            margin-left: auto; /* Auto margin for horizontal centering */
            margin-right: 90px; /* Adjusted margin to create space between the image and form */
            max-width: 70%; /* Limit the maximum width of the form */
        }

        .contact-icon img {
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

        input[type="text"],
        input[type="email"],
        textarea {
            width: calc(100% - 25px); /* Adjusted width */
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            margin-bottom: 10px;
        }

        textarea {
            resize: vertical; /* Allow vertical resizing */
            min-height: 100px; /* Set a minimum height */
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
    </style>
</head>
<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="contact-container">
            <div class="contact-image-left">
                <img src="https://media.istockphoto.com/id/1318288052/vector/customer-support-and-service-call-center.jpg?s=612x612&w=0&k=20&c=P8cyZDFEIdwXBIb5EBbOuvatvLz9JMRPm4i4WLtC-bs= " alt="Image">
            </div>
            <div class="contact-form">
                <div class="contact-icon">
                    <!-- <img src="your-contact-icon.png" alt="Logo"> -->
                    <h1 style="color: green;">Contact Us</h1>
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
                <form action="contactusfunction.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <div class="form-group">
                        <center><button type="submit" class="btn btn-success">Submit</button>
 </center>                   </div>
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
</body>
</html>