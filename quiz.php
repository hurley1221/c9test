<html>
<head>
<title>Quiz</title>
</head>
<body>
    
<h1>Quiz</h1>
    
<?php

$host = "127.0.0.1";
$user = "hurleym2";
$pass = "";
$db = "theta";

$connection = mysqli_connect($host, $user, $pass, $db);

if(!$connection) {
    die("Connection Failed: " . mysqli_connect_errno());
}

$sql = "SELECT * FROM quiz";
$result = mysqli_query($connection, $sql);
$nr = mysqli_num_rows($result);

if ($nr > 0){
    while($row = mysqli_fetch_assoc($result)) {
        echo "Question: " . $row["question"]. "<br>";
        echo "A: " . $row["answer1"] . "<br>";
        echo "B: " . $row["answer2"] . "<br>";
        echo "C: " . $row["answer3"] . "<br>";
        echo "D: " . $row["answer4"] . "<br>";
        
    }
}
else{
    echo "0 results";
}


?>

</body>
</html>