<?php 
error_reporting(0);
$server="localhost";
$user="root";
$password="";
$db="signup";

$connection=mysqli_connect($server,$user,$password,$db);
$username=$_POST['email'];
$password=$_POST['password'];
$repass=$_POST['repass'];

$query="INSERT INTO SIGN_NEW_USER values('$username','$password','$repass')";

$fire=mysqli_query($connection,$query);

if ($fire) {
	# code...
	echo "done";
}
else{
	echo "problem";
 }
?>