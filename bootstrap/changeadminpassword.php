<?php 




 ?>





<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	 <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <link href="admin.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <style>
        	body{
        		background: #487eb0;
        	}
        	.form-body{
        		margin:50px auto;
        		width: 360px;
        		background-color: #9c88ff;
        		padding: 30px;
        		box-shadow: 4px 2px 8px #e84118;

        	}
        </style>
</head>
<body>
	
		<div class="form-body">
			<form>
				<h4 style="margin:0px 0px 20px 50px;">Change Password</h4>
				<div class="form-group">
					<input type="password" name="password" placeholder="old password" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" name="newpassword" class="form-control" placeholder="Enter New Password">
				</div>
				<div class="form-group">
					<input type="password" name="newpasswordrepeat" placeholder="repeat New password" class="form-control">
				</div>
			</form>
		</div>
</body>
</html>