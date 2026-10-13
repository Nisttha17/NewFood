<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Success Page</title>
<style>
    /* Define the animation */
    @keyframes hopCharacter {
        0%, 100% { transform: translateX(0); } /* Start and end position */
        25% { transform: translateX(calc(25% - 50px)); } /* First hop to the right */
        50% { transform: translateX(calc(50% - 50px)); } /* Second hop to the right */
        75% { transform: translateX(calc(25% - 50px)); } /* Third hop to the right */
    }

    /* Apply the animation to the character */
    .hopping-character {
        width: 100px; /* Adjust character size as needed */
        display: block;
        margin: 0 auto;
        animation: hopCharacter 3s linear infinite; /* Adjust duration and timing as needed */
    }

    /* Style for the card */
    .card {
        width: 350px; /* Adjust card width as needed */
        height: 310px; /* Adjust card height as needed */
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /* Style for the text inside the card */
    .card-text {
        text-align: center;
        color: forestgreen;
    }

    /* Style for the dots */
    .dot {
        height: 20px;
        width: 20px;
        background-color: #052e07;
        border-radius: 50%;
        display: inline-block;
        margin: 0 5px;
        animation: dotBlink 1s linear infinite;
    }

    @keyframes dotBlink {
        0% { opacity: 0; }
        25% { opacity: 1; }
        50% { opacity: 0; }
    }

    .dot:nth-child(2) {
        animation-delay: 0.5s;
    }

    .dot:nth-child(3) {
        animation-delay: 1s;
    }

    .dot.yellow {
        background-color: rgb(236, 236, 11);
    }
</style>
</head>
<body style="background-color: aliceblue;">
    <div class="card">
        <center> <h1 class="card-text">Your form has been submitted!</h1></center>
        <p class="card-text">You will receive an email confirmation from food bank within a week.</p>
        <!-- Add your cartoon character here -->
        <img src="joinusnowgirl.avif" alt="Cartoon Character" class="hopping-character">
        <div class="dots">
            <span class="dot"></span>
            <span class="dot yellow"></span>
            <span class="dot"></span>
        </div>
    </div>

    <script>
        setTimeout(function(){
            window.location.href = "index.php";
        }, 4000);
    </script>
</body>
</html>
