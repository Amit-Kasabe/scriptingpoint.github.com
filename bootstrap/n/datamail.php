<?php 
include 'connection.php';

$html='<h2>Hello Amit</h2>';
echo smtp_mailer('amitkasabeofficial@gmail.com','This is amit',$html);
function smtp_mailer($to,$subject, $msg){
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
	$mail->SetFrom("amitkasabeofficial@gmail.com");
	/*$mail->addAttachment("dummy.pdf");*/
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	if(!$mail->Send()){
		return 0;
	}else{
		return 1;
	}
}

?>
