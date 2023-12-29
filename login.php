<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    include 'connectDb.php';

    $user=$_POST['username'];
    $password=$_POST['password'];

    $sql ="select * from login where name ='$user' and password='$password'";
    $result= mysqli_query($conn, $sql);

    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            session_start();
            $_SESSION['name']=$user;
            header('location:index.php');
        }
        else{
            echo "Invalid username or password";
            }
        }
    else{
         die(mysqli_error($conn));
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

         <form action="login.php" method="post" class="login__form">
            <h1 class="login__title">Login</h1>

            <div class="login__inputs">
               <div class="login__box">
                  <input type="text" name="username" placeholder="username" required class="login__input">
               </div>

               <div class="login__box">
                  <input type="password" name="password" placeholder="Password" required class="login__input">
                  <i class="ri-lock-2-fill"></i>
               </div>
            </div>

            <button type="submit" class="login__button">Login</button>

            <div class="login__register">
               Don't have an account? <a href="Singup.php">Register</a>
            </div>
         </form>
      </div>
   </body>
</html>
