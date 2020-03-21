<?php

include("connection.php");
session_start();
$givenotp=$_POST['OTP'];



$check="SELECT * FROM verification WHERE opt='$givenotp'";

$checkqueryfire=mysqli_query($connection,$check);

$total=mysqli_num_rows($checkqueryfire);

if ($total>0) {
	# code...
	echo "Success";

	$checkq="UPDATE verification SET opt='' WHERE opt='$givenotp' ";

	$runupdate=mysqli_query($connection,$checkq);

	if ($runupdate) {
		# code...
		echo "updated successfully";
	}
	else{
		echo "problem";
	}

}
else{
	echo "fail";
	header("location:submit.php");
}



?>