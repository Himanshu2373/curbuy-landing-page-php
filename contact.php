<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    include 'connectDb.php';

    $user=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
 

    $sql= "insert into contact (name,email,message) values('$user','$email','$message')";

    $result=mysqli_query($conn, $sql);
    if($result){
       header('location:index.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact Us </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>for new branded Car</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Khera Road, Phagwara<br>punjab,India,<br>144401</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>8757472373</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>wheels@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="contact.php" method="post">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name ="email" required="required">
                        <span>Eamil</span>
                    </div>
                    <div class="inputBox">
                        <textarea type="text" name="message" required></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <button type="submit" >Send</button>
                    </div>

                    <div class="inputBox">
                        <a href="index.php">Back</a>
                    </div>
                   
                </form>
                
            </div>
        </div>
    </section>
</body>
</html>