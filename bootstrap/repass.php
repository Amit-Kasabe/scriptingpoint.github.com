<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP OTP Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

	<style>
		body{
			background-image: linear-gradient(to right,#800080,#0000ff);
		}
		.form-body{
			margin: 50px auto;
			width: 340px;
		}
		.form-body h4{
			margin: 0 0 20px;
		}
		form{
			padding: 30px;
			background: #f7f7f7;
			border-radius: 10px;
		}
		.btn{
			margin: 15px auto;
		}
	</style>

</head>
<body>
	<div class="form-body">

		<form action="newpasscheck.php" method="post" onsubmit="return validation()">
			<h4 style="margin-bottom: 25px;text-align: center;" class="text-dark">Reset Password</h4>
			<div class="form-group">
				<label for="password">Username</label>
				<input type="text" name="username" class="form-control" id="username">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" id="password">
			</div>
			<div>
				<label for="confirm-password">Confirm Password</label>
				<input type="password" name="confirm-password" class="form-control" id="resetpassword">
			</div>
			<button class="btn btn-block btn-primary">Change Password</button>
		</form>
	</div>
	<script>
	function validation(){
			var pass=document.getElementById("password").value;
			var repass=document.getElementById("resetpassword").value;
			var username=document.getElementById("username").value;
			if (username=="") {
				swal({
						icon:"warning",
						title:"username can't be blank",
				});
				return false;
			}
			if (pass=="") {
				swal({
					icon:"warning",
					title:"password can't be blank",
				});
				return false;
			}
			if (pass.length<8) {
				swal({
					icon:"warning",
					title:"password must contain atleast 8 characters",
				});
				return false;
			}
			if (pass!=repass) {
				swal({
					icon:"warning",
					title:"password doesn't match",
				});
				return false;
			}
			else{
				swal({
					icon:"success",
					title:"password reset successfully",
				})
			}

	}
</script>
</body>
</html>
