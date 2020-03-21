<?php
include ("connection.php");

//smtp...
$subject=$_POST['subject'];
	$message=$_POST['message'];

//$html='<h2 style="color:green;">this is amit...</h2>';
echo smtp_mailer('amit.kasabe18@gmail.com',$subject,$message);
function smtp_mailer($to,$subject,$msg){
	require_once("smtp/class.phpmailer.php");
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPDebug = 1; 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'TLS'; 
	$mail->Host = "smtp.sendgrid.net";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "amitkasabe";
	$mail->Password = "amitkasabe@123";
	$mail->SetFrom($_POST['email']);
	//$mail->addAttachment("amit.jpg");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	if(!$mail->Send()){
		return "something went wrong";
	}else{
		return "<h1>Thanks ".$_POST['name']."    for contacing us<h1>";
		
	}
}



?>