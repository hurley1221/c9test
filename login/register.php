<?php
    include("config.php");
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uname = mysqli_real_escape_string($connection,$_POST['uname']);
        $psw = mysqli_real_escape_string($connection,$_POST['psw']);
        $cpsw = mysqli_real_escape_string($connection,$_POST['cpsw']);
        if($psw = $cpsw){
            $psw = md5($psw);
            $sql = "insert into login(username, password) values('$uname', '$psw')";
            header("location: login.php");
        }else {
            $error = "Your Passwords do not match";
        }
    }
    
?>

<html>
<body>
<h1>Register Page</h1>

<form action ="" method="post">
<label> Username:         </label> <input type="text" name="uname"><br>
<label> Password:         </label> <input type="password" name="psw"><br>
<label> Confirm Password: </label> <input type="password" name="cpsw"><br>
<input type="submit" value=" Register "><br>
<?php echo($error); ?>
</form>

</body>
</html>