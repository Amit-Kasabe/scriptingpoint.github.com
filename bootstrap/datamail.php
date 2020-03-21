<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">

	<style>
		h1{
			font-family: 'Shadows Into Light', ;
			text-align: center;
			

		}
	</style>
</head>
<body>

</body>
</html>
<?php 
error_reporting(0);

	//$mailto=$_POST['mail'];
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
	$mail->SetFrom($_POST['mail']);
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



