<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <!-- Add Bootstrap CSS link -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
 /* Custom CSS for menu item border box effect */
 .navbar-nav .nav-link.active {
        border: 2px solid #ffffff; /* Add a border box for the active menu item */
        border-radius: 5px; /* Add rounded corners to the border box */
      }
      .nav-link{
    color:black;
}
#logoname{
    display: inline;
    font-size: larger;
    color:yellow;
    font-family: 'Times New Roman', serif;
    font-weight: bolder;
}
#logonav{
    height: 1000px;
}



/* Reset some default styles */

/* Basic styling */
body {
    font-family: Arial, sans-serif;
    background-color: aliceblue;
    color:#0c0c0c;
}





.hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-align: center;
    padding: 80px 0;
}

.hero-content {
    flex: 1;
    padding: 20px;
}

.hero h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 18px;
    margin-bottom: 40px;
}

.cta-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #222;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s ease-in-out;
}

.cta-button:hover {
    background-color: #444;
}

.hero-image img {
    max-width: 100%;
}

.how-it-works {
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
    padding: 60px 0;
}

.step {
    margin-bottom: 40px;
}

.step img {
    max-width: 100%;
}

footer {
    background-color: #222;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

/* Add responsive styles */
@media (max-width: 768px) {
    header {
        padding: 10px 0;
    }
  }
   

    .hero {
        flex-direction: column;
    }

    .hero-content {
        padding: 20px 0;
    }

    .hero h1 {
        font-size: 28px;
    }

    .hero p {
        font-size: 16px;
    }

    .cta-button {
        padding: 8px 16px;
        font-size: 14px;
    }
/* Additional CSS for dropdown styling */
.dropdown-menu {
  min-width: auto;
  background-color: #fff; /* Dropdown background color */
  border: 1px solid #ccc; /* Dropdown border */
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); /* Dropdown shadow */
}

.dropdown-item {
  color: #333; /* Dropdown item text color */
}

.dropdown-item:hover {
  background-color: #f1f1f1; /* Dropdown item hover background color */
}
.fas.fa-user-circle {
    font-size: 24px; /* Change this value to adjust the size */
  }

 

 





@media(max-width: 990px){
  .card{
    margin: 20px;
  }
} 

#profileIcon {
    width: 40px; /* Set the width */
    height: auto; /* Maintain aspect ratio */
    cursor: pointer; /* Add pointer cursor for interaction */
    margin-top: 0px;
}
.navbar-nav {
      display: flex;
      align-items: center;
    }

    .navbar-nav .nav-item {
      margin: 0 3px; /* Adjust the margins as needed */
    }

    #profileDropdown {
      margin-left: auto; /* Push the dropdown to the right */
    }

    .logoimg {
      width: 30px; /* Adjust the icon size */
      height: auto;
      cursor: pointer;
      margin-bottom: 2px; /* Align the icon vertically */
    }


   
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
      <div class="container">
        <!-- Logo and Logo Name -->
        <a class="navbar-brand" href="#">
         <!-- <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg_rgvsyoDpm-nCSVt-Y2pSR-LU11sgbVRnhfb9qnyCC6SApbOjchWUN7nhYnRt5rM0Mw&usqp=CAU"
            alt="Logo"
            width="50"-->
        <i class="fa-solid fa-hand-holding-heart" style="color: #ffffff;"></i>
          <p style="color: yellow;"   id="logoname">
          FOOD BANK
        </p>
        </a>

        <!-- Navbar Toggler Button for mobile -->
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Menu Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"  onmouseover="highlightMenuItem(this)"
              onmouseout="removeHighlight(this)">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="about.php"  onmouseover="highlightMenuItem(this)"
              onmouseout="removeHighlight(this)">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="donate.php"  onmouseover="highlightMenuItem(this)"
              onmouseout="removeHighlight(this)">Donate</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="donationhistory.php"  onmouseover="highlightMenuItem(this)"
              onmouseout="removeHighlight(this)">History</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact.php"  onmouseover="highlightMenuItem(this)"
                onmouseout="removeHighlight(this)">Contact</a>
              </li>
              <li class="nav-item active">
              <a class="nav-link" href="plans.php"  onmouseover="highlightMenuItem(this)"
              onmouseout="removeHighlight(this)">Plans</a>
            </li>
              <?php
                 if(isset($_SESSION['authenticated'])): 
                 ?>
              <li class="nav-item active">
                <a class="nav-link" href="logout.php"  onmouseover="highlightMenuItem(this)"
                onmouseout="removeHighlight(this)">Logout</a>
              </li>
              <?php 
              endif 
              ?>
              
            
              <li class="nav-item mx-2">
                <a href="login.php" > <button type="button" class="btn btn-outline-warning">Gets started</button></a>
              </li>

              <li class="nav-item active">
              <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="icon.png" id="profileIcon"  class="logoimg">
                  </a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
    <a class="dropdown-item" href="getUserInfo.php">View Profile</a>
    <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
    <a class="dropdown-item" href="helps&services.php">Help & Services</a>
    <div class="dropdown-divider"></div>
    
    <a class="dropdown-item" href="logout.php">Logout</a>
</div>
              </li>

            
          </ul>
        </div>
      </div>
    </nav>


    
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    


    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
document.getElementById('profileIcon').addEventListener('click', function() {
    // Make an AJAX call to fetch user information
    // Replace 'getUserInfo.php' with the actual PHP file that retrieves user information
    fetch('getUserInfo.php')
        .then(response => response.json())
        .then(data => {
            // Assuming 'data' contains user information in JSON format
            // Access and display the user information in the desired way
            console.log(data); // For demonstration: Log user data to console
            // Update the UI with user information
            // For instance, set the value of HTML elements to display the user information
        })
        .catch(error => {
            console.error('Error:', error);
        });
});


        function highlightMenuItem(item) {
        item.classList.add("active");
      }

      function removeHighlight(item) {
        item.classList.remove("active");
      }
    </script>
  </body>
</html>