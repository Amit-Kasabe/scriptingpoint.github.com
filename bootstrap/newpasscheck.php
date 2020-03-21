<?php

include("connection.php");

$username=$_POST['username'];
$password=$_POST['password'];
$repeatpassword=$_POST["confirm-password"];


$updatepassword="UPDATE verification set password='$password' && $repeatpassword='$confirm-password' where username='$username";

$fireupdate=mysqli_query($connection,$updatepassword);

if ($fireupdate) {
	# code...
	echo "ok";
}
else{
	echo "failed";
}



?>