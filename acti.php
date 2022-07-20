<?php 
$host="localhost";
$user="root";
$pass="";
$db="practical";
$con=mysqli_connect($host,$user,$pass,$db);

if ($con->connect_error) {
	die("connection failed:".$con->connect_error);
	# code...
}

	$u=$_POST['user'];
	$p=$_POST['pass'];
	$sql="SELECT * FROM login4 where username='$u' and password='$p'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)==1) {
	echo "<h1>hello </h1>";
	# code...
}
else
{

	echo "Invalid credentials";
}
mysqli_close($con);


?>