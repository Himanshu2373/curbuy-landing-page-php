<?php
 session_start();
 if(!isset($_SESSION['name'])){
    header('location:login.php');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>

    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Link File CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <img src="img/car-logo.png" class="logo" alt="">
            <div class="menu">
                <a href="index.php">Home</a>
                <a href="contact.php">Contact</a>
                <a href="logout.php">Logout</a>
            </div>

            <div class="social">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </nav>
    </header>
    
    <div class="hero">

        <div class="text">
            <h4>Powerful, Fun and</h4>
            <h1>Fierce to <br> <span>Drive</span></h1>
            <p>Real Poise, Real Power, Real Perfomance.</p>
            <a href="#" class="btn">book</a>
        </div>
    </div>

    <script>
        let heroBg = document.querySelector('.hero');

        setInterval(() => {
            heroBg.style.backgroundImage = "url(img/bg-light.jpg)"
            
            setTimeout(() => {
                heroBg.style.backgroundImage = "url(img/bg.jpg)"
            }, 1000);
        }, 2200);
    </script>
</body>
</html>
