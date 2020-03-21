<?php
session_start();

include("connection.php");
$email=$_POST['email'];
$phone=$_POST['phone'];
$wnumber=$_POST['whatapp'];
$address=$_POST['address'];
$password=$_POST['password'];
$confirm_password=$_POST['cpassword'];
$otp=rand(111111,999999);
$insertquery="INSERT INTO verification VALUES('','$email','$phone','$wnumber','$address','$password','$confirm_password','$otp')";
$firequery=mysqli_query($connection,$insertquery);
$checkduplicate=mysqli_num_rows($firequery);
//for sending otp to email using PHP mailer..
$html='OTP varifiation';
echo smtp_mailer($email,$html,"Your varification code is:".$otp);
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
		header("location:submit.php");
	}



}


?>