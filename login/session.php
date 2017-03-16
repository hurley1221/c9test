<?php
   include('config.php');
   session_start();
   $user_check = $_SESSION['login_user'];
   $session_username_sql = mysqli_query($connection,"select username from login where username = '$user_check' ");
   $row = mysqli_fetch_array($session_username_sql,MYSQLI_ASSOC);
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>