<?php
session_start();

// Check if foodid parameter is set in the URL
if (isset($_GET['foodid'])) {
    $highlightedFoodId = $_GET['foodid'];
}
?>
<!doctype html>
<html lang="en">

<head>
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
            color: black;
        }

        #methaneDialog {
            display: none;
            position: fixed;
            z-index: 1000;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: aliceblue;
            padding: 20px;
            border-radius: 5px;
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
                            <h4 class="text-white"> Food details [By user]</h4>
                        </center>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_SESSION['status']) && $_SESSION != '') {
                            ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?php echo $_SESSION['status']; ?>
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
                        $query = "SELECT *, donation.Foodid AS foodid FROM donation
                            LEFT JOIN users
                            ON donation.Demail = users.email";
                        $query_run = mysqli_query($conn, $query);
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>FoodId</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Quality</th>
                                    <th>Quantity[G]</th>
                                    <th>Pickup Time</th>
                                    <th>Valid Till</th>
                                    <th>Expiry Date</th>
                                    <th>Image</th>
                                    <th>Methane</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($query_run) > 0) {
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                        ?>
                                        <tr <?php echo ($row['foodid'] == $highlightedFoodId) ? 'class="highlight"' : ''; ?>>
                                            <td><?php echo isset($row['foodid']) ? $row['foodid'] : ''; ?></td>
                                            <td><?php echo $row['foodName']; ?></td>
                                            <td><?php echo $row['foodStatus']; ?></td>
                                            <td><?php echo $row['foodQuality']; ?></td>
                                            <td><?php echo $row['numOfPlates']; ?></td>
                                            <td><?php echo $row['pickupTime']; ?></td>
                                            <td><?php
                                                if ($row['foodStatus'] == 'cooked') {
                                                    echo isset($row['pickupTime']) ? date('h:i A', strtotime('+2 hours', strtotime($row['pickupTime']))) : '';
                                                } elseif ($row['foodStatus'] == 'packed' || $row['foodStatus'] == 'raw') {
                                                    echo 'Wait for Pickup';
                                                } else {
                                                    echo 'Wait for Pickup';
                                                }
                                                ?></td>
                                            <td><?php
                                                if ($row['foodStatus'] == 'cooked') {
                                                    echo 'NA';
                                                } elseif ($row['foodStatus'] == 'packed' || $row['foodStatus'] == 'raw') {
                                                    echo isset($row['foodexpiry']) ? date('Y-m-d', strtotime($row['foodexpiry'])) : 'Not Available';
                                                } else {
                                                    echo 'NA';
                                                }
                                                ?></td>
                                            <td>
                                                <a href="<?php echo "uploads/" . $row['foodImage']; ?>" data-lightbox="food-images">
                                                    <img src="<?php echo "uploads/" . $row['foodImage']; ?>" width="100px">
                                                </a>
                                            </td>
                                            <td>
                                                <button onclick="openMethaneDialog(<?php echo $row['foodid']; ?>)">Add Now</button>
                                            </td>
                                            <td id="methaneValue_<?php echo $row['foodid']; ?>">
                                                <?php echo isset($row['methane_range']) ? $row['methane_range'] : ''; ?>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                    <tr>
                                        <td colspan="11">No Records</td>
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

    <!-- Methane Dialog -->
    <div id="methaneDialog" style="display: none; position: fixed; z-index: 1000; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: aliceblue; padding: 20px; border-radius: 5px;">
        <h3 style="color: green;">Enter Methane Value</h3>
        <form id="methaneForm">
            <input type="hidden" id="foodId" name="foodId">
            <input type="text" id="methaneRange" name="methaneRange" placeholder="Enter methane value">
            <button type="submit" style="background-color: chocolate;">Save</button>
            <button type="button" style="background-color: red;" onclick="closeMethaneDialog()">Cancel</button>
        </form>
    </div>

    <!-- Overlay to blur background -->
    <div id="overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 999;"></div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        function openMethaneDialog(foodId) {
            document.getElementById("foodId").value = foodId;
            document.getElementById("overlay").style.display = "block";
            document.getElementById("methaneDialog").style.display = "block";
        }

        function closeMethaneDialog() {
            document.getElementById("overlay").style.display = "none";
            document.getElementById("methaneDialog").style.display = "none";
        }

        document.getElementById("methaneForm").addEventListener("submit", function(event) {
            event.preventDefault();
            var foodId = document.getElementById("foodId").value;
            var methaneRange = document.getElementById("methaneRange").value;

            // Perform AJAX request to save methane range and update UI
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "save_methane_range.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("methaneValue_" + foodId).innerHTML = xhr.responseText;
                    closeMethaneDialog();
                }
            };
            xhr.send("foodId=" + foodId + "&methaneRange=" + methaneRange);
        });
    </script>

</body>

</html>
