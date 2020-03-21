<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP OTP Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
		function verify(){
			
			var password=document.getElementById("password").value;
			var rpass=document.getElementById("rpassword").value;
			
			if(password.length<8) {
				swal("Error!", "password must contain atlest 8 characters", "warning");
				return false;

				}
				if (rpass!=password) {
					swal("Error!", "password must doesn't match", "warning");
					return false;
				}
				else{
					swal("OTP Sent!", "About to signUp!", "success");
				}
		} 
	</script>

<style>
	.fm{
		width: 320px;
		margin: 70px auto;
	}
	form{
		background: #f7f7f7;
		padding: 30px;
		margin-bottom: 15px;
		box-shadow: 10px 10px 10px rgba(0,0,0,0.3);

	}
	.second{
		margin: 50px auto
	}
	.second{
		display:  none;
	}
	body{
		background:linear-gradient(to right,#811599,#16BD9A);
	}
</style>
</head>
	
<body>
	<div class="fm">
	<form method="post" action="insert.php" onsubmit="return verify()">
		<div class="form-group first">
			<label for="username">Username</label>
			<input type="email" name="email" placeholder="username" class="form-control" autocomplete="off" id="email" required="required">
		</div>
		<div class="form-group first">
			<label for="password">password</label>
			<input type="password" name="password" placeholder="password" class="form-control" id="password" required="required">
		</div>
		<div class="form-group first">
			<label for="password">Confirm-Password</label>
			<input type="password" name="cpassword" placeholder="Confirm-Password" class="form-control" id="rpassword" required="required">
		</div>
		<button class="btn btn-block btn-primary"  type="Submit">Submit</button>
	</form>

</div>
</body>
</html>
