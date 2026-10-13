<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-oqr7TlJk5mV5Yn0Ky6c1jlU+M0z+7D3c5SUz40uQC4cm/lrOnmds2j+GtMWA0j+3" crossorigin="anonymous">
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Footer Styles */
        .site-footer {
            margin-top: 50px;
            padding: 50px 0;
            background-color: #222;
            color: gray;
        }

        .top-footer {
            padding-bottom: 30px;
        }

        .footer-info {
            margin-bottom: 30px;
        }

        .footer-info p {
            color: gray;
        }

       

        .footer-flex-box {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .footer-menu {
            margin-bottom: 30px;
        }

        .footer-menu h3 {
            font-size: 18px;
            margin-bottom: 15px;
            color: gray;
        }

        .footer-menu ul {
            list-style: none;
            padding: 0;
        }

        .footer-menu ul li {
            margin-bottom: 8px;
        }

        .footer-menu ul li a {
            color: orange;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-menu ul li a:hover {
            color: #fff; /* Change color on hover */
        }

        .bottom-footer {
            padding: 20px 0;
        }

        .bottom-footer p {
            margin: 0;
            text-align: center;
        }

        .bottom-footer .scrolltop {
            background-color: blue;
            color: orange;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .bottom-footer .scrolltop:hover {
            background-color: #0056b3; /* Change color on hover */
        }

        /* Adjustments for responsiveness */
        @media (max-width: 768px) {
            .footer-flex-box {
                flex-direction: column;
            }
            .footer-menu {
                margin-bottom: 20px;
            }
        }

        /* .social-icon ul {
            list-style: none;
            padding: 0;
        }
        .social-icon ul li {
            margin-bottom: 10px; /* Add spacing between icons 
        }
        .social-icon ul li a {
            color: #000; /* Change icon color 
            font-size: 24px; /* Adjust icon size 
            text-decoration: none;
            display: block; /* Display icons as block elements 
            transition: color 0.3s ease;
        }
        .social-icon ul li a:hover {
            color: #007bff; /* Change color on hover 
        } */
    </style>
</head>
<body>

<footer class="site-footer" id="contact">
    <div class="top-footer section">
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-info">

                            <div class="footer-logo" style="margin-top: 80px;">
                            <i class="fa-solid fa-hand-holding-heart" style="color: yellow;"></i>
                            <h5 style="font-weight:Bold; font-style:italic">Food Bank</h5>
                           
                            </div>
                           
                            <!-- <div class="social-icon">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/santossh.kapare?mibextid=ZbWKwL">
                                        <i class="fa-brands fa-facebook" style="color: #f8f5f2;"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/food_bank_india_official/">
                                        <i class="fa-brands fa-instagram" style="color: #f3f4f7;"></i>
                                        </a>
                                    </li>
                                     <li>
                                        <a href="https://www.youtube.com/@santoshkapare1162">
                                        <i class="fa-brands fa-twitter" style="color: #ffffff;"></i>
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="https://www.youtube.com/@santoshkapare1162">
                                        <i class="fa-brands fa-youtube" style="color: #f4f5f6;"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="footer-flex-box">
                            <div class="footer-menu food-nav-menu">
                                <h3 class="h3-title">Links</h3>
                                <ul class="column-2">
                                    <li><a href="index.php" class="footer-active-menu">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="donate.php">Donate</a></li>
                                    <li><a href="donationhistory.php">History</a></li>
                                    <li><a href="index.php#custom-container">Events</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                            
                            <div class="footer-menu food-nav-menu">
                                <h3 class="h3-title">Links</h3>
                                <ul class="column-2">
                                    <li><a href="joinusnow.php" class="footer-active-menu">Join as Volunteer</a></li>
                                    <li><a href="about.php#missionheading">Mission & Vissions</a></li>
                                    <li><a href="helps&services.php">Services</a></li>
                                    <li><a href="helps&services.php">Helps</a></li>
                                    <li><a href="about.php">Developers</a></li>
                                    <li><a href="helps&services.php#faq-section">FAQs</a></li>
                                </ul>
                            </div>
                            <div class="footer-menu">
                                <h3 class="h3-title">Food Bank</h3>
                                <ul>
                                    <li><a href="termsandconditions.php">Terms & Conditions</a></li>
                                    <li><a href="privacypolicy.php">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p style="color: #fff;">Copyright &copy; 2023 <span class="name">Food Bank</span> All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html