<html>

<?php
   include("session.php");
   $user = $_SESSION['login_user'];
?>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      
      <h1>Welcome <?php echo($user); ?></h1> 
      <h2><a href = "../test.php">Test</a></h2>
      <h2><a href = "../dummy.php">Dummy</a></h2>
      <h2><a href = "logout.php">Sign Out</a></h2>
      
   </body>
   
</html>