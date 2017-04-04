<html>
<head>
<title>Test</title>
</head>
<body>

<h1>Test Login</h1>

<?php include("login/config.php");
      include("login/session.php");
      echo $_SESSION['login_user'];
?>

<h2><a href = "login/welcome.php">Welcome</a></h2>

</body>
</html>