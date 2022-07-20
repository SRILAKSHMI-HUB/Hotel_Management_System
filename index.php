<?php  
require 'phpmailer/PHPMailerAutoload.php'
$mail=new phpMailer;

$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';

$mail->Username='desaichettyjahnavi@gmail.com';
$mail->Password='9441122322Jl@';

$mail->setFrom('desaichettyjahnavi@gmail.com','jahnavi');
$mail->addAddress('desaichettyjahnavi@gmail.com');
$mail->addReplyTo('desaichettyjahnavi@gmail.com');

$mail->isHTML(true);
$mail->Subject='php mailer';
$mail->Body='<h1 aligh=center>mychannel</h1><br><h4>like</h4>';
if($mail->send()){
	echo "message could not be sent";
}
else{
	echo "message has been send";
}
?>