<html>
<head>
<title>Test</title>
</head>
<body>

<h1>Test Login</h1>

<?php
    include("login/config.php");
    include("login/session.php");
    echo $_SESSION['login_user'];
?>

</body>
</html>