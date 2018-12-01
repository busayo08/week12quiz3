<?php
   include('process.php');
   if(isset($_COOKIE['username'])) {
   $user_check = $_COOKIE['username'];
   
   $ses_sql = mysqli_query($link,"select * from user where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_cookies = $row['firstname'];
   $first_name = $row['firstname'];
   $last_name = $row['lastname'];
   $email = $row['email'];
   $phone = $row['phone'];
   $pass = $row['pass'];
   $gender = $row['gender'];
   $country = $row['country'];
   } else
   if(!isset($_COOKIES['username'])){
      header("location:index.php");
   }
?>