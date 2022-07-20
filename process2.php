<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practical";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 // if (isset($_POST['regis'])) {
  	$phonee=$_POST['phone'];
    $arrivall=$_POST['arrival'];
    $departure=$_POST['date'];
    $timein=$_POST['time'];
    $timeoutt=$_POST['timeout'];
    $commentss=$_POST['comments'];

$sql = "INSERT INTO login7 (phone,arrival,departure,timein,timeout,comments)
VALUES ('$phonee','$arrivall','$departure','$timein',' $timeoutt','$commentss')";

if ($conn->query($sql) === TRUE) {
    echo "<h1><font color='red'>thanku visit once again</h1></font>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//}

$conn->close();
?>