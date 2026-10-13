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

    <title>Contact forms</title>
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
<?php
// Check if a response is submitted
if (isset($_SESSION['response'])) {
    echo '<div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin: 10px 0; border: 1px solid #f5c6cb;">';
    echo '<strong>Response Sent:</strong> ' . $_SESSION['response'];
    echo '</div>';
    unset($_SESSION['response']);
}

// Display email sending status
if(isset($_SESSION['status']) && $_SESSION['status'] != ''){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
    echo '<strong>Email Status:</strong> ' . $_SESSION['status'];
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    echo '<span aria-hidden="true">&times;</span>';
    echo '</button>';
    echo '</div>';
    unset($_SESSION['status']);
}
?>
   <div class="container-fluid mt-0">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success">
                <center> <h4 class="text-white">Contacting Users</h4></center>   
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
                    $query = "SELECT * FROM contact";
                    
                    $query_run = mysqli_query($conn, $query);


                        ?>
                   
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Donor name </th>
                                <th> Donor Email</th>
                                <th> Message/ Query</th>
                                <th>Response</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                          if(mysqli_num_rows($query_run)>0){
                        foreach($query_run as $row){
                        ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['message']; ?></td> 
                           <td>
                           <?php
if ($row['status'] == 'responded') {
    echo '<button class="btn btn-success" disabled>Responded</button>';
} else {
    echo '<a href="submit_conresponse.php"><button type="submit" name="submit" class="btn btn-warning">Respond</button></a>';
}
?>

                                    </td>                           
                           
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