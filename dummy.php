<html>
<body>

<h1>Dummy</h1>

<?php
    include("login/config.php");
    include("login/session.php");
    echo $_SESSION['login_user'];
?>

<h2><a href = "login/welcome.php">Welcome</a></h2>

</body>
</html>