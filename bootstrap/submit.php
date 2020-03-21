
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

	.frm{
		margin: 50px auto;
		width: 320px;
		
	}
	form{
		background: #f7f7f7;
		padding: 30px;
		box-shadow: 0px 2px 2px rgba(0,0,0,0.3);
	}
</style>
<script>
	function otpcheck(){
		var o=document.getElementById("otp").value;
		if (o=="") {
			swal({
  icon: "warning",
  title: "Please Enter OTP",
});
			return false;
		}
	}
</script>
</head>
<body>
	<div class="frm">
		<form method="post" action="submitotp.php" onsubmit="return otpcheck()">
			<div class="form-group ">
				<input type="text" name="OTP" placeholder="put your OTP" class="form-control" id="otp">
				<span id="otp_error" style="display: none;">Invalid OTP</span>

			</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-block btn-primary" onsubmit="check()">
			</div>
		</form>
	</div>
	<script>
	
	</script>
</body>
</html>