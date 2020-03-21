<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel='icon' href='fav2.png' type='image/x-icon' sizes="16x16" />
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	 <script type="text/javascript" href="validation.js"></script>
 	 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 	  <style>
  		.fm{
		width: 380px;
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
	h4{
		margin: 0px 20px 20px 60px;
	}
	#member{
		margin: 200px 0px 0px 0px;
	}
  </style>
   <script>
  	function verify(){
			var username=document.getElementById("email").value
			var password=document.getElementById("password").value;
			var rpass=document.getElementById("rpassword").value;
			if (password==""||rpass=="") {
				swal({
					icon:"warning",
					title:"fields can't be blank",
				});
				return false;

			}
			
			if(password.length<8) {
				swal("Error!", "password must contain atlest 8 characters", "warning");
				return false;

				}
				if (rpass!=password) {
					swal("Error!", "password doesn't match", "warning");
					return false;
				}
				else{
					swal("OTP Sent!", "About to signUp!", "success");
				}
		} 
	</script>
</head>
<body>
	<div class="fm container">
	<form method="post" action="insert.php" onsubmit="return verify()">
		<h4>Registration</h4>
		<div class="form-group first">
			<label for="username">Username</label>
			<input type="email" name="email" placeholder="username" class="form-control" autocomplete="off" id="email" required="required">
		</div>
		<div class="form-group first">
			<label for="password">password</label>
			<input type="password" name="password" placeholder="password" class="form-control" id="password">
		</div>
		<div class="form-group first">
			<label for="password">Confirm-Password</label>
			<input type="password" name="cpassword" placeholder="Confirm-Password" class="form-control" id="rpassword">
		</div>
		<button class="btn btn-block btn-primary"  type="Submit">Submit</button><br>
		<p><a href="login.html" style="text-decoration: none;margin-left: 85px;" class="text-success text-center" id="Memeber">Already A Memeber?</a></p>
	</form>
</body>
</html>