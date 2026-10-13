<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Donations</title>
    <style>
        tr:hover {
            background-color: aliceblue;
        }
        table {
            text-align: center;
        }
        body {
            font-family: sans-serif;
            background-color: aliceblue;
        }
        .container-fluid {
            max-width: 100%;
        }
        /* Custom styles */
        .success {
            color: green;
        }
        .fail {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container-fluid mt-0">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-success">
                        <center><h4 class="text-white"> Donation Received</h4></center>   
                    </div>
                    <div class="card-body">
                        <?php
                        // Start the session to access session variables
                        session_start();
                        
                        if(isset($_SESSION['status']) && $_SESSION != ''){
                            ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Hey Admin!</strong> <?php  echo $_SESSION['status']; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php
                            unset($_SESSION['status']);
                        }
                        ?>
                        <?php
                        // Database connection
                        $conn = mysqli_connect("localhost", "root", "", "foodnew");
                        // SQL query to fetch donations with donor details
                        $query = "SELECT *, donation.Foodid AS foodid FROM donation
                                  LEFT JOIN users ON donation.Demail = users.email";
                        $query_run = mysqli_query($conn, $query);
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Donor</th>
                                    <th>Food ID</th>
                                    <th>Pickup Time</th>
                                    <th>City</th>
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th>Volunteers</th>
                                    <th>Add Status</th>
                                    <th>Success/Fail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(mysqli_num_rows($query_run) > 0){
                                    while($row = mysqli_fetch_assoc($query_run)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['Dname']; ?></td>
                                            <td><a href="foodvalid.php?foodid=<?php echo $row['foodid']; ?>"><?php echo isset($row['foodid']) ? $row['foodid'] : ''; ?></a></td>
                                            <td><?php echo $row['pickupTime']; ?></td>
                                            <td><?php echo $row['selectCity']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['contactNumber']; ?></td>
                                           
                                            <td><a href="submit_donresponse.php"><button type="submit" class="btn btn-warning">Assign</button></a></td>
                                            <td>
                                                <!-- Add input field to manually enter the donation status -->
                                                <form class="form-inline" action="save_status.php" method="post">
                                                    <input type="hidden" name="foodid" value="<?php echo $row['foodid']; ?>">
                                                    <select class="form-control mr-2" name="status">
                                                        <option value="Success">Success</option>
                                                        <option value="Fail">Fail</option>
                                                    </select>
                                                    <button type="submit" class="btn btn-primary mt-1">Save</button>
                                                </form>
                                            </td>
                                            <td>
                                                <?php if ($row['status'] == 'Success') 
                                                { ?>
                                                    <span class="success">&#10003;</span>
                                                <?php 
                                                } elseif ($row['status'] == 'Fail') 
                                                { ?>
                                                    <span class="fail">&#10007;</span>
                                                <?php 
                                                } 
                                                else 
                                                { ?>
                                                    <span class="fail">Pending</span>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else{
                                    ?>
                                    <tr>
                                        <td colspan="9">No Records</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>