<?php

    include("config.php");
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uname = mysqli_real_escape_string($connection,$_POST['uname']);
        $psw = mysqli_real_escape_string($connection,$_POST['psw']);
        $psw = md5($psw);
        
        $sql = "Select id from login where username = '$uname' and password = '$psw'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        $count = mysqli_num_rows($result);
        
        if($count == 1) {
            $_SESSION['login_user'] = $uname;
            $sql = "insert into login_record(username, logindt) values('$uname', now())";
            mysqli_query($connection, $sql);
            header("location: welcome.php");
        }else {
            $error = "Your Login Name or Password is invalid";
        }
    }
?>

<html>
<body>
<h1>Login Page</h1>
<h2><a href = "register.php">Register</a></h2>

<form action ="" method="post">
<label> Username: </label> <input type="text" name="uname"><br>
<label> Password: </label> <input type="password" name="psw"><br>
<input type="submit" value=" Login "><br>
<center>
<font color="Red"></fotn><?php echo($error); ?></font>
</center>

</form>


</body>
</html>