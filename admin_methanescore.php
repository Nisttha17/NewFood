<!doctype html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Food Testing Details</title>
    <style>
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

        .highlight {
            background-color: palegreen;
            /* or any other color you want */
            color: black;
            /* text color */
        }

        .form-inline .form-control {
            width: auto;
        }
        tr:hover {
            background-color: aliceblue;
        }
    </style>
</head>

<body>
    <div class="container-fluid mt-0">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-success">
                        <center>
                            <h4 class="text-white"> Food Testing Details</h4>
                        </center>
                    </div>
                    <div class="card-body">
                        <form class="form-inline" method="POST" action="">
                            <div class="form-group mr-2">
                                <input type="date" class="form-control" id="date" name="date">
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                        <br>
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $selected_date = $_POST['date'];
                            $conn = mysqli_connect("localhost", "root", "", "foodnew");
                            $query = "SELECT * FROM sensor_data WHERE DATE(Time) = '$selected_date'";
                            $query_run = mysqli_query($conn, $query);
                        ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Methane Score</th>
                                        <th>Date and Time</th>
                                        <th>Food Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (mysqli_num_rows($query_run) > 0) {
                                        while ($row = mysqli_fetch_assoc($query_run)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['data']; ?></td>
                                                <td><?php echo $row['Time']; ?></td>
                                                <td>
                                                    <?php
                                                    // Determine food status based on methane score
                                                    $methaneScore = $row['data'];
                                                    $foodStatus = '';
                                                    if ($methaneScore > 300) {
                                                        $foodStatus = "Food is Spoiled";
                                                        $colorClass = 'text-danger'; // Change text color to red
                                                    } elseif ($methaneScore > 250) {
                                                        $foodStatus = "Food is Good";
                                                        $colorClass = 'text-primary'; // Change text color to green
                                                    } else {
                                                        $foodStatus = "Good Quality";
                                                        $colorClass = 'text-success'; // Change text color to blue
                                                    }
                                                    ?>
                                                    <span class="<?php echo $colorClass; ?>"><?php echo $foodStatus; ?></span>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="3">No Records Found</td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        <?php
                        } else {
                            echo "Please select a date to filter records.";
                        }
                        ?>
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
