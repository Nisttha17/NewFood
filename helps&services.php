<?php

ob_start();
// rest of your code

session_start();
include('dbcon.php');
include('navbar.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helps & Services</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Reset CSS */


body {
    font-family: Arial, sans-serif;
    background-color: aliceblue;
}

header {
    background-color: #333;
    color: #fff;
    padding: 15px 0;
    text-align: center;
}



main {
    padding: 50px 0;
}

.helps-services {
    text-align: center;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.helps-services h1 {
    margin-bottom: 20px;
}

.service-cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.card {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 300px;
}

.card h2 {
    margin-bottom: 10px;
}

.card p {
    color: #444;
    margin-bottom: 20px;
}

.btn {
    display: inline-block;
    padding: 8px 20px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #555;
}

/* Existing CSS code remains unchanged */

.faq-section {
    padding: 20px;
    margin-top: 40px;
    background-color: #f9f9f9;
}

.accordion-btn {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    transition: background-color 0.3s ease;
    font-weight: bold;
}

.accordion-btn.active {
    background-color: #ccc;
}

.accordion-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
}
.accordion-content {
      display: none; /* Initially hide the answer content */
    }
    .show-content {
      display: block; /* Show the answer content */
    }

.answer{
   
    color: #444;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    margin-left: 18px;
   
}
    </style>
</head>
<body>
    <main>
        <section class="helps-services">
            <div class="container">
                <h1>Helps & Services</h1>
                <p>Here's how we can assist you:</p>

                <!-- Service Cards -->
                <div class="service-cards">
                    <div class="card">
                        <h2>Food Distribution</h2>
                        <p>Find out about our food distribution services and locations.</p>
                        <a href="index.php#how" class="btn">Learn More</a>
                    </div>

                    <div class="card">
                        <h2>Meal Programs</h2>
                        <p>Information about meal programs for specific groups.</p>
                        <a href="index.php#custom-container" class="btn">Learn More</a>
                    </div>

                    <div class="card">
                        <h2>Contact Us</h2>
                        <p>Feel Free to contact with us in case of any questions</p>
                        <a href="contact.php" class="btn">Learn More</a>
                    </div>

                    <!-- Add more service cards --> 
                </div>
            </div>
        </section>
          <div class="faq-section">
    <h2 style="font-weight:lighter;">Frequently Asked Questions</h2>
    <div class="accordion">
        <div class="accordion-item">
            <button class="accordion-btn">What are the eligibility criteria for food distribution?</button>
            <div class="answer">
                Ans: 18+
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-btn">How can I volunteer for your services?</button>
            <div class="answer">
                Ans: Fill Join us form
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-btn">Do you offer delivery services?</button>
            <div class="answer">
                Ans: Yes
            </div>
            
       
        </div>
        <div class="accordion-item">
            <button class="accordion-btn">How do I request assistance?</button>
            <div class="answer">
                Ans: Contact us
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-btn">What types of donations do you accept?</button>
            <div class="answer">
                Ans: Food Donation
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-btn">How can I contact support?</button>
            <div class="answer">
                Ans: Fill contact form
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-btn">Are there specific times for donation drop-offs?</button>
            <div class="answer">
                Ans: No
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-btn">Can I track my donation's impact?</button>
            <div class="answer">
                Ans: Yes
            </div>
        </div>
        <!-- Add more FAQ items -->
    </div>
</div>
    </main>


    <script>
    // // JavaScript code for service card generation and FAQ accordion
    // document.addEventListener('DOMContentLoaded', () => {
    //     const accordionBtns = document.querySelectorAll('.accordion-btn');

    //     accordionBtns.forEach(btn => {
    //         btn.addEventListener('click', () => {
    //             const content = btn.nextElementSibling;
    //             content.classList.toggle('show-content');
    //         });
    //     });
    // });

        // Create service cards dynamically
        const serviceCardsContainer = document.getElementById('serviceCards');

        services.forEach(service => {
            const card = document.createElement('div');
            card.classList.add('card');

            const title = document.createElement('h2');
            title.textContent = service.title;

            const description = document.createElement('p');
            description.textContent = service.description;

            const learnMoreLink = document.createElement('a');
            learnMoreLink.href = service.link;
            learnMoreLink.textContent = 'Learn More';
            learnMoreLink.classList.add('btn');

            card.appendChild(title);
            card.appendChild(description);
            card.appendChild(learnMoreLink);

            serviceCardsContainer.appendChild(card);
        });

        // Add your FAQ items and accordion functionality here
        document.addEventListener('DOMContentLoaded', () => {
        const accordionBtns = document.querySelectorAll('.accordion-btn');

        accordionBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const content = btn.nextElementSibling;
                content.classList.toggle('show-content');

                accordionBtns.forEach(otherBtn => {
                    const otherContent = otherBtn.nextElementSibling;
                    if (otherBtn !== btn && otherContent.classList.contains('show-content')) {
                        otherContent.classList.remove('show-content');
                    }
                });
            });
        });
    });
    
</script>

</body>
</html>



