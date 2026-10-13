<!DOCTYPE html>
<html>
<head>
  <title>Important Donation Days</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: aliceblue;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  text-align: center;
}

h1 {
  color: #333;
  margin-bottom: 40px;
}

.days {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.day {
  width: 300px;
  margin: 20px;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  background-color: aliceblue;
  transition: transform 0.3s ease-in-out;
  animation: fadeInUp 0.5s ease var(--animation-delay) both;
}

.day:hover {
  transform: translateY(-10px);
}

.day h2 {
  margin: 10px 0;
  color: #333;
}

.day p {
  color: #666;
  font-size: 14px;
  line-height: 1.5;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

  </style>
</head>
<body>

<!-- 1st Row -->
<div class="container">
    <h1 style="color: green;">Important Donation Days</h1>
    <div class="days">
      <div class="day" style="--animation-delay: 0s;">
        <div class="date">Jan 15</div>
        <h2>Martin Luther King Jr. Day</h2>
        <p>A day of service, reflecting on Dr. King's legacy.</p>
      </div>
      <div class="day" style="--animation-delay: 0.1s;">
        <div class="date">Sep 05</div>
        <h2>International Day of Charity</h2>
        <p>Promotes and recognizes the importance of charitable efforts and philanthropy.</p>
      </div>

  <!-- 2nd row -->
  <div class="container">
    <div class="days">
      <div class="day" style="--animation-delay: 0.1s;">
        <div class="date">Apr 22</div>
        <h2>Earth Day</h2>
        <p>Raising awareness about environmental issues.</p>
      </div> 
      <div class="day" style="--animation-delay: 0s;">
        <div class="date">Oct 16</div>
        <h2>World Food Day</h2>
        <p>To promote global awareness and action for those who suffer from hunger.</p>
      </div>
    </div>
  </div>

   <!-- 3rd row -->
  <div class="container">
    <div class="days">
      <div class="day" style="--animation-delay: 0.1s;">
        <div class="date">Nov 2</div>
        <h2>Thanksgiving Day</h2>
        <p>Traditionally marked by a festive meal with gratitude for the blessings of the year.</p>
      </div>
      <div class="day" style="--animation-delay: 0s;">
        <div class="date">Dec 03</div>
        <h2>Giving Tuesday</h2>
        <p>A day that encourages people to do good.</p>
      </div>
    </div>
  </div>

    <!-- 4th row -->
  <div class="container">
    <div class="days">
      <div class="day" style="--animation-delay: 0.1s;">
        <div class="date">Sep 01</div>
        <h2>Food Drive Fridays</h2>
        <p>A day where people come together on Fridays to collect and donate non-perishable food items.</p>
      </div>
      <div class="day" style="--animation-delay: 0s;">
        <div class="date">Oct 06</div>
        <h2>Harvest Festival</h2>
        <p>A yearly celebration that takes place when a region's main harvest occurs.</p>
      </div>
    </div>
  </div>

      <!-- 5th row -->
      <div class="container">
    <div class="days">
      <div class="day" style="--animation-delay: 0.1s;">
        <div class="date">Nov 18-26</div>
        <h2>National Hunger & Homelessness Awareness Week </h2>
        <p>People come together to draw attention to the problems of hunger and homelessness.</p>
      </div>
      <div class="day" style="--animation-delay: 0s;">
        <div class="date">Feb 17</div>
        <h2>Random Act of Kindness</h2>
        <p>Is a nonpremeditated, inconsistent action designed to offer kindness towards the outside world. </p>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>