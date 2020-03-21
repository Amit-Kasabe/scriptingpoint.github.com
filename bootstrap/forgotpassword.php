<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<style>
		.forgot-pass{
			margin: 50px auto;
			width: 340px;
		}
		form{
			margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
		}

	</style>
		<script>
		function validate(){
			var emailcheck=document.getElementById("em").value;

			if (emailcheck=="") {
				swal({
  					icon: "warning",
  					title: "Please Enter OTP",
});
			}
		}
	</script>
	<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP OTP Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
	<div class="forgot-pass" >

		<form method="post" onsubmit="return validate()" action="resetpassword.php">
			<h2 class="text-center" style="margin: 0 0 15px;">Email Address</h2>
			<div class="form-group">
				<input type="email" name="email" placeholder="put your email id" class="form-control" id="em">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-block btn-primary">
			</div>
		</form>
		
	</div>

</body>
</html>
