<?php
 
 $hostName='localhost';
 $userName='root';
 $passwoed='';
 $Dbname='carselling';

 $conn=mysqli_connect($hostName,$userName,$passwoed,$Dbname);

 if(!$conn){
    die(mysqli_error($conn));
 }

?>