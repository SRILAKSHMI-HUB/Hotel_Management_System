<?php 
  $db = mysqli_connect('localhost', 'root', '', 'practical');
 

  if (isset($_POST['regis'])) {
  	$phonee=$_POST['phone'];
    $arrivall=$_POST['arrival'];
    $departuree=$_POST['departure'];
    $timeinn=$_POST['timein'];
    $timeoutt=$_POST['timeout'];
    $commentss=$_POST['comments'];

    
           $query = "INSERT INTO login5 (phone,arrival,departure,timein,timeout,coments) 
      	    	  VALUES ('$phonee','$arrivall','$departuree','$timeinn',' $timeoutt','$commentss')";
           $results = mysqli_query($db, $query);
           echo 'Saved!';
           exit;
         }
           

     

?>