<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<style>
		a{
			color: orange;
		}
	</style>
</head>
<body>

</body>
</html>

<?php

	session_start();
include("connection.php");

	# code...
	$username=$_POST['username'];
	$password=$_POST['password'];

	$query="SELECT * FROM verification WHERE username='$username' && password='$password'";
	$data=mysqli_query($connection,$query);
	$total =mysqli_num_rows($data);
	//echo $total;
	if ($total==1) {
		# code...
		echo "logged in";
		$_SESSION['username']=$username;
		header('location:homepage.html');
	}
	else{
		echo "login failed";
		echo "<a href='login.html'>Login</a>";
	}



  ?>
