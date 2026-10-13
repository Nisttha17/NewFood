<?php
session_start();

// Check if admin is logged in, otherwise redirect to login page
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin_login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <!-- Include necessary CSS libraries -->
    <link rel="stylesheet" href="styles.css">
    
    <style>
        /* Example CSS for the navbar */
        body{
            background-color: aliceblue;
        }
        .navbar {
            background-color: green;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .chart-container {
  width: 80%;
  margin: 20px auto;
}
/* Existing styles remain unchanged */

.target-section {
  margin-top: 30px;
  text-align: center;
}

.target-info {
  margin-bottom: 20px;
}

.pie-chart-container {
  width: 300px; /* Adjust the width as needed */
  height: 300px; /* Adjust the height as needed */
  margin: 0 auto;
}


    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
      <a href="admin_methanescore.php">Food testing detail</a> 
        <a href="admin_users.php">Registered Donors</a>
        <a href="admin_donation.php">Donations Requested</a>
        <!-- <a href="foodvalid.php">Food Validity</a> -->
        <a href="admin_contact.php">Contact Forms</a>
        <a href="admin_joining.php">Joining Forms</a>
        <a href="admin_volunteer.php">Registered Volunteers </a>
        <a href="admin_important.php">Important Schedules </a>
        <a href="admin_login.php">Admin Logout </a>
        <!-- Add more links as needed -->
       
    </div>
   
    <!-- Rest of your content -->
   
    <main>
    <h1>Donation Growth:- </h1>
  
  <!-- Chart Container -->
  <div class="chart-container">
    <canvas id="donationChart"></canvas>
  </div>
  <div class="target-section">
    <h2>Our Target Till May</h2>
    <div class="target-info">
      <p>Target Donation: 5000</p>
      <p>Donations Achieved: 3500</p>
      <p>Remaining Donation: 1500</p>
    </div>

    <!-- Pie Chart for Target Progress -->
    <div class="pie-chart-container">
      <canvas id="targetPieChart"></canvas>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 
    </main>

    <!-- Include necessary JavaScript files -->
    <script>
        // Sample data for demonstration (Replace this with your actual data)
const donationData = {
  labels: ['Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb'],
  datasets: [{
    label: 'Donation Growth',
    backgroundColor: 'rgba(54, 162, 235, 0.5)',
    borderColor: 'rgba(54, 162, 235, 1)',
    borderWidth: 1,
    data: [1000, 1500, 2000, 1800, 2500, 3000],
  }]
};

// Function to create the bar chart
function createChart() {
  const ctx = document.getElementById('donationChart').getContext('2d');
  const myChart = new Chart(ctx, {
    type: 'bar',
    data: donationData,
    options: {
      responsive: true,
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
}

// Display chart when the window finishes loading
window.onload = createChart;



// Sample data for target progress (Replace this with your actual data)
const targetData = {
  labels: ['Achieved', 'Remaining'],
  datasets: [{
    data: [3500, 1500],
    backgroundColor: ['#36A2EB', '#FFCE56'],
    hoverBackgroundColor: ['#36A2EB', '#FFCE56']
  }]
};

// Function to create the pie chart for target progress
function createTargetChart() {
  const ctx = document.getElementById('targetPieChart').getContext('2d');
  const myPieChart = new Chart(ctx, {
    type: 'pie',
    data: targetData,
    options: {
      responsive: true,
    }
  });
}

// Display charts when the window finishes loading
window.onload = function() {
  createChart(); // Display donation growth bar chart
  createTargetChart(); // Display target progress pie chart
};

    </script>
</body>
</html>
