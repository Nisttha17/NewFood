<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Your custom styles -->
    <style>
        body{
            background-color: aliceblue;
        }
      .container{
        color: orangered;
       }
    </style>
</head>
<body>
<center><h1 style="margin-top: 50px; color:green;">Welcome to Food Bank</h1></center>
    <div class="container  mt-5 ">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-light">
                    <div class="card-header">
                     <center> <h4>Admin Login</h4></center>  
                    </div>
                    <div class="card-body">
                        <form action="admin_authenticate.php" method="POST">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                         <center> <button type="submit" class="btn btn-primary">Login</button></center>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
