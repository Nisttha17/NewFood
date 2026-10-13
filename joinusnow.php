<?php
include 'navbar.php';
?>


<head>
  <title>Join us</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
    
      form {
        margin-top: 2px;
        background-color: white;
        border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px; /* Optional: Add some padding for better visual */
    /* background-color: rgba(255, 255, 255, 0.5); */
    
   
  }
  form input:focus {
    border: 2px solid #ff6600; /* Change border color on focus */
    background-color: #fff; /* Change background color on focus */
    box-shadow: 0 0 5px rgba(255, 102, 0, 0.5); /* Add a subtle box shadow on focus */
  }
      body {
        margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-image: url('https://i.pinimg.com/736x/ed/5f/dc/ed5fdce9095640d08c546d6864c7b279.jpg'); /* Replace 'your-background-image.jpg' with the path to your image */
            background-size: cover;
            background-position: center;
            
}
#linkres{
  color: blue;
}

.labeldis{
  color: black;
}
h3{
  color: greenyellow;
  
  text-align: center;
}
.form-class #did{
  margin-left: 500px;
}
    </style>
</head>

<body>
 
<div class="container mt-5">
  <div class="alert">
    <?php
if(isset($_SESSION['status'])){
  echo "<h3  >".$_SESSION['status']."</h3>";
  unset($_SESSION['status']);
}
    ?>
  </div>
      
     
      <form action="submit.php"  method="post">
        
      <center><h2 style="color: green;">Join Food Bank!</h2></center>
      <br>
      <br>
        <div class="row mt-0" style="margin-top: 0px;">
       
          <div class="col-md-6 mt-0">
            <div class="form-group">
              <label for="firstname" class="labeldis" >Full Name</label>
              <input
                type="text"
                class="form-control"
                name="fullname"
                id="fullname"
                placeholder="Enter Full Name"
                required
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="Contact" class="labeldis">Email Address</label>
              <input
                type="email"
                class="form-control"
                name="Email"
                id="Email"
                placeholder="Enter email"
                required
              />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="lastname" class="labeldis">Age</label>
              <input
                type="number"
                class="form-control"
                id="Age"
                name="Age"
                placeholder="Enter Age"
                required
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email" class="labeldis">Residential Address</label>
              <input
                type="text"
                class="form-control"
                id="Residential"
                name="Residential"
                placeholder="Enter Address"
                required
              />
             
            </div>
          </div>
        </div>

        

        <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="gender"  class="labeldis">Gender</label>
              <select class="form-control" name="gender" id="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>
        

          <div class="col-md-6">
  <div class="form-group">
    <label for="password" class="labeldis">City</label>
    <input
      type="text"
      class="form-control"
      id="City"
      name="City"
      placeholder="Enter City"
      required
      oninput="getDistrictCode(this.value)"
    />
  </div>
</div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="age" class="labeldis">Contact</label>
              <input
                type="number"
                class="form-control"
                id="Contact"
                name="Contact"
                placeholder="Enter contact no"
                required
              />
            </div>
          </div>
          <div class="col-md-6">
  <div class="form-group">
    <label for="password" class="labeldis">District Code</label>
    <input
    id= "did"
      type="number"
      class="form-control"
      id="District"
      name="District"
      
      required
    />
  </div>
</div>
<!-- ... -->
        <center>
        <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="termsCheck" required>
  <label class="form-check-label" for="termsCheck">
  By checking this box, I agree that I am a part of Food Bank Team and I will work actively with the core team.
  </label>
</div>
</center>
<center>
    
        <button type="submit" name="submit" class="btn btn-success">Submit</button></center></a>
    
</div>
<script>
    function getDistrictCode(city) {
        console.log('City Entered:', city);
    // Define a simple mapping of cities to district codes (Replace this with your actual data or API call)
    const cityDistrictMapping = {
        "bandra west": 400050,
  "bandra east": 400051,
  "mumbai g. p. o.": 400001,
  "kalbadevi": 400002,
  "mandvi": 400003,
  "girgaon": 400004,
  "colaba": 400005,
  "malbar hill": 400006,
  "grant road": 400007,
  "mumbai central": 400008,
  "chinch b’der": 400009,
  "mazgaon": 400010,
  "jacob circle": 400011,
  "parel": 400012,
  "delisle road": 400013,
  "dadar (c.r.)": 400014,
  "sewree": 400015,
  "mahim": 400016,
  "dharavi": 400017,
  "worli": 400018,
  "matunga": 400019,
  "marine lines": 400020,
  "nariman point": 400021,
  "sion": 400022,
  "fort": 400023,
  "nehru nagar": 400024,
  "prabhadevi": 400025,
  "cumbala hill": 400026,
  "jijamata udyan": 400027,
  "bs. rd. dadar": 400028,
  "airport": 400029,
  "wadala": 400030,
  "mantralaya": 400031,
  "tank road": 400032,
  "antop hill": 400037,
  "bhayander west": 401101,
  "mira road": 401105,
      // Add more city-district mappings here
    };

    // Lookup the district code based on the entered city
    const districtCode = cityDistrictMapping[city];
    
    // Set the district code value in the input field
    document.getElementById("District").value = districtCode || '';
  }

  

</script>
    <!-- Add Bootstrap JS and jQuery script links here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>