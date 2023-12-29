<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    include 'connectDb.php';

    $user=$_POST['username'];
    $email=$_POST['email'];
    $mob=$_POST['mobile'];
    $password=$_POST['password'];

    $sql ="select * from login where email ='$email'";
    $result= mysqli_query($conn, $sql);

    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            echo "user already exist";
        }else{
            $sql= "insert into login (name,email,mobile,password) values('$user','$email','$mob','$password')";
            $result=mysqli_query($conn, $sql);

            if($result){
                header('location:login.php');
                }else{
                    die(mysqli_error($conn));
                }
            
        }
    }
}

?>



<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="style1.css">

      <title>Login page</title>
   </head>
   <body>
      <div class="login">
         <img src="bg.jpg" alt="image" class="login__bg">

         <form action="SingUp.php" method="post" class="login__form">
            <h1 class="login__title">Register</h1>

            <div class="login__inputs">
            <div class="login__box">
                  <input type="text" name="username" placeholder="username" required class="login__input">
               </div>

               <div class="login__box">
                  <input type="text" name="email" placeholder="email" required class="login__input">
                  <i class="ri-mail-fill"></i>
                </div>

                <div class="login__box">
                  <input type="number" name="mobile" placeholder="mobile no" required class="login__input">
               </div>

               <div class="login__box">
                  <input type="password" name="password" placeholder="Password" required class="login__input">
                  <i class="ri-lock-2-fill"></i>
               </div>
            </div>

            <button type="submit" class="login__button">Submit</button>

            <div class="login__register">
                have an account? <a href="login.php">Sing In</a>
            </div>
         </form>
      </div>
   </body>
</html>

