<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Success!</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: aliceblue;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .success-container {
      text-align: center;
      background-color: #fff;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #4CAF50;
    }

    p {
      color: #333;
    }

    .home-link {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .home-link:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="success-container">
    <h1>Profile edited Successfully!</h1>
    <p>You will see the updated profile on the first refresh</p>
    <a href="index.php" class="home-link">Go Back to Homepage</a>
  </div>
</body>
</html>
