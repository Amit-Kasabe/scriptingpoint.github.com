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
		width: 750px;
		margin: 70px auto;
		height: 100vh;
		margin: 20px auto;
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
		display: none;
	}
	body{
		background:linear-gradient(to right,#811599,#16BD9A);
	}
	h4{
		margin: 0px 20px 20px 260px;
	}
	#member{
		
		margin-left: 320px;

	}
	label{
		margin-left: 40%;
		text-justify: inter-word;
	}
	input[type="email"],input[type="text"],input[type="password"]{
		text-align: center;

	}
  </style>
  <script>
  	function verify(){
			var username=document.getElementById("email").value;
			var phone=document.getElementById("pnumber").value;
			var wphone=document.getElementById("wnumber").value;
			var add=document.getElementById("address").value;
			var password=document.getElementById("password").value;
			var rpass=document.getElementById("rpassword").value;
			if (isNaN(phone)||isNaN(wphone)) {
				swal("Error!", "Phone Number Should be numeric", "warning");
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
		<!-- EmailAddress 1-->
		<div class="form-group first">
			
			<input type="email" name="email" class="form-control" autocomplete="off" id="email" required="required" placeholder="Your Email(username)">
		</div>
		<!-- phone number 2 -->
		<div class="form-group first">
		
			<input type="text" name="phone" class="form-control" id="pnumber" placeholder="Your Phone Number">
		</div>
		<!-- whatsapp number 3-->
		<div class="form-group first">
			
			<input type="text" name="whatapp"  class="form-control" id="wnumber" placeholder="Your Whatsapp number">
		</div>
		<!-- address 4-->
		<div class="form-group first">
			<input type="text" name="address" class="form-control" id="address" placeholder="Your Address">
		</div>
		<!-- password 5-->
		<div class="form-group first">
			
			<input type="password" name="password" class="form-control" id="password" placeholder="set password">
		</div>
		<!-- confirm-password 6-->
		<div class="form-group first">
			
			<input type="password" name="cpassword"  class="form-control" id="rpassword" placeholder="Confirm-Password">
		</div>
		<button class="btn btn-block btn-primary"  type="Submit">Submit</button><br>
		<p><a href="login.html" style="text-decoration: none;margin-left: 245px;font-size: 20px;" class="text-danger text-center" id="Memeber">Already A Memeber?</a></p>
	</form>
</body>
</html>