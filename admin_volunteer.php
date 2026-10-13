<?php
session_start();


 

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        tr:hover {
            background-color: aliceblue;
        }
        table {
        text-align: center;
    }
        body{
            font-family: sans-serif;

            background-color: aliceblue;
        }
        .container-fluid{
            max-width: 100%;
        }
        
    </style>
  </head>
  <body>
   <div class="container-fluid mt-0">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success">
                <center> <h4 class="text-white">Volunteer Records</h4></center>   
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_SESSION['status']) && $_SESSION != ''){
                        ?>

                       
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey Donor!</strong> <?php  echo $_SESSION['status']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
                </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                    ?>
               
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "foodnew");
                    $query = "SELECT * FROM joinus";
                    
                    $query_run = mysqli_query($conn, $query);


                        ?>
                   
                    <table class="table">
                        <thead>
                            <tr>
                                <th> Name </th>
                                <th> Age</th>
                                <th> Gender</th>
                               
                                <th>Phone </th>
                                <th>Email ID</th>
                                <th>Address</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                          if(mysqli_num_rows($query_run)>0){
                        foreach($query_run as $row){
                        ?>
                        <tr>
                            <td><?php echo $row['fullname']; ?></td>
                            <td><?php echo $row['Age']; ?></td>
                            <td><?php echo $row['Gender']; ?></td>
                           
                            <td><?php echo $row['Contact']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Residential']; ?></td>
                           
                            
                           
                        </tr>
                        <?php
                        }
                          }
                          else{
                        ?>
                         <tr>
                            <td>No Records</td>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>