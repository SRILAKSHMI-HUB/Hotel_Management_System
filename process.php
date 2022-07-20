<?php 
  $db = mysqli_connect('localhost', 'root', '', 'practical');
  $username = "";
  $email = "";
  

  if (isset($_POST['register'])) {
  	$username = $_POST['username'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];
    $cpassword = $_POST['pwd'];
    //$phonee=$_POST['phone'];
    //$arrivall=$_POST['arrival'];
    //$departuree=$_POST['departure'];
    //$timeinn=$_POST['timein'];
    //$timeoutt=$_POST['timeout'];
    //$commentss=$_POST['comments'];

  //  $from=$_POST['pwd'];
    //$to=$_POST['email'];
    //$subject="jahnavi desaichetty";
    //$message=$_POST['username'];
    //if(mail($to,$subject,$message,$from)){
      //echo "mail sent";
    //}
    //else{
      //echo "not sent";
    //}
//  if($password==null||$password=="")
//{
//  echo "name in password must be filled";
//}
//if($cpassword==null||$cpassword=="")
//{
//echo "name in password 2 must be filled";
//}  

if ($password != $cpassword) {
echo("Error... Passwords do not match");
exit;
}

  	$sql_u = "SELECT * FROM login4 WHERE username='$username'";
  	$sql_e = "SELECT * FROM login4 WHERE email='$email'";
  	$res_u = mysqli_query($db, $sql_u);
  	$res_e = mysqli_query($db, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
  	 $name_error = "Sorry... username already taken"; 	
  	}else if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken"; 	
  	}else{
           $query = "INSERT INTO login4 (username, email, password) 
      	    	  VALUES ('$username', '$email', '$password')";
           $results = mysqli_query($db, $query);
           echo 'Saved!';
           

     $from=$_POST['username'];
    $to=$_POST['email'];
    $subject="jahnavi desaichetty";
    $message=$_POST['pwd'];
    if(mail($to,$subject,$message,$from)){
      echo "mail sent go back and login from first to go to the hotel from";
    }
    else{
      echo "not sent";
    }
           exit();
  	}
  }

?>