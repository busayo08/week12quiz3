<?php
   
   if(!isset($_COOKIES['username'])){
    setcookie("username", "", time() - 3600, '/');
    header("location:index.php");
 }
?>