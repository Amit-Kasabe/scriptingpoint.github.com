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
  	*{
  		margin: 0;
  		padding: 0;
  		box-sizing: border-box;
  		font-family: ;

  	}
  	.main-div{
  		width: 100%;
  		height: 100%;
  		display: flex;
  		flex-direction: column;
  		justify-content: center;
  		align-items: center;
  	}
  	.center-div{
  		width: 90%;
  		height: 80vh;
  		background: -webkit-linear-gradient(left ,#5DADE2 ,#00c6ff);
  		padding: 20px 0 0 0;
  		box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3);
  	}
  	h1{
  		font-size: 18px;
  		color: #000;
  		text-align: center;
  		margin: 20px;
  		
  	}
  	table{
  		border-collapse: collapse;
  		background-color: #fff;
  		box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3);
  		border-radius: 10px;
  		margin: auto;

  	}
  	th,td{
  		border: 1px solid #f2f2f2;
  		padding: 8px 30px;
  		text-align: center;
  		color: black;

  	}
  	th{
  		text-transform: uppercase;
  		font-weight: 500;
  	}
  	td{
  		font-size: 13px;
  	}

  	.fa{
  		cursor: pointer;
  		font-size: 18px;
  	}
  	.fa-edit{
  		color: #63c76a;

  	}
  	.fa-trash{color: #ff0000}
  	a{
  		text-decoration:none;
  		display: flex;
  		justify-content: center;
  	}
  </style>

</head>
<body>
	<div class="main-div container-fluid">
		<h1>Registered Users</h1>
		<div class="center-div">
			<div class="table-responsive">
				<table>
					<thead>
						<th>ID</th>
						<th>USsername</th>
						<th>Password</th>
						<th>Confirm_Password</th>
						<th>OTP</th>
						<th>Delete</th>
						<th>Update</th>
					</thead>
					<tbody>
						<?php

						include 'connection.php';
						
						$selectquery = "SELECT * FROM verification";
						
						$query=mysqli_query($connection,$selectquery);
						
						$nums=mysqli_num_rows($query);
						
						while ($result=mysqli_fetch_array($query)) {
							# code...
							?>

							<tr>
							<td><?php echo $result['id']."<br>"; ?></td>
							<td><?php echo $result['username']."<br>"; ?></td>
							<td><?php echo $result['password']."<br>"; ?></td>
							<td><?php echo $result['confirm_password']."<br>"; ?></td>
							<td><?php echo $result['opt']."<br>"; ?></td>
							<td><a href="#"><i class="fa fa-trash"></i></a></td>
							<td><i class="fa fa-edit"></i></td>
						</tr>


						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>