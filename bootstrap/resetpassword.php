<?php 

include("connection.php");

$email=$_POST['email'];

$query="SELECT * FROM VERIFICATION WHERE USERNAME='$email'";
$fire=mysqli_query($connection,$query);
$run=mysqli_num_rows($fire);

if ($run>0) {
	# code...
	header("location:repass.php");
}
else{
	echo "user does't exist";
}






 ?>