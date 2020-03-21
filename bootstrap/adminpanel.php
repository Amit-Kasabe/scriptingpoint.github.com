<!DOCTYPE html>
<html>
<head>
  <title>
    
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='fav2.png' type='image/x-icon' sizes="16x16" />
  <link rel="stylesheet" type="text/css" href="gallary.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" href="validation.js"></script>
  <style>
    body{
font-family: 'Josefin Sans', sans-serif;  
  background-color: #fbc531;
  }
    .form-body{
      margin: 80px auto;
      width: 340px;
      background-color: #f7f7f7;
      padding: 30px;
      text-align: center;
    }
    .fa{
      position: absolute;
      margin-top: 43px;
      margin-left: -80px;
      font-size: 18px;
    }
    /*for mobiles */
    @media screen and (max-width: 500px){
      body{
       font-family: 'Source Code Pro', monospace;
      }
      .form-body{
          margin: 80px auto;
          width: 340px;
          padding: 30px;
          text-align: center;
          background-color: #f7f7f7;

      }
      h3{
        color: #000;
        font-size: 34px;
       }
       input[type="text"],input[type="password"]{
        font-size: 20px;
        height: 45px;
        color: #000;
       }
       label{
        font-size: 24px;
        color: #000;
       }
       .fa{
      position: absolute;
      margin-top: 57px;
      margin-left: -80px;
      font-size: 18px;
    }
    }
  </style>
</head>
<body>
<div class="container-fluid form-body">
    <div class="row">
      <div class="col-md-12">
        <form>
          <h3>Admin Login</h3>
          <div class="form-group">
            <i class="fa fa-user-o" aria-hidden="true" style=""></i>
            <label>Username</label> 
            
            <input type="text" name="adminusername" class="form-control text-center" placeholder="Admin-Username">
          </div>
          <div class="form-group">
            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
            <label>Password</label>
            <input type="password" name="adminpassword" class="form-control text-center" placeholder="Admin-Password">
          </div>
          <button class="btn btn-block btn-danger">Login</button>
        </form>
      </div>
    </div>
</div>
</body>
</html>