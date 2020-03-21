<!DOCTYPE html>
<html>
<head>
	<title>
		final year proje
	</title>
	  <link rel='icon' href='fav2.png' type='image/x-icon' sizes="16x16" />
  <link rel="stylesheet" type="text/css" href="gallary.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" href="validation.js"></script>
</head>
<style>

#second-nav{

		background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 5s ease infinite;

}
@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
footer {
  background: #16222A;
  background: -webkit-linear-gradient(59deg, #3A6073, #16222A);
  background: linear-gradient(59deg, #3A6073, #16222A);
  color: white;
  margin-top:100px;
}

footer a {
  color: #fff;
  font-size: 14px;
  transition-duration: 0.2s;
}

footer a:hover {
  color: #FA944B;
  text-decoration: none;
}

.copy {
  font-size: 12px;
  padding: 10px;
  border-top: 1px solid #FFFFFF;
}

.footer-middle {
  padding-top: 2em;
  color: white;
}


/*SOCİAL İCONS*/

/* footer social icons */

ul.social-network {
  list-style: none;
  display: inline;
  margin-left: 0 !important;
  padding: 0;
}

ul.social-network li {
  display: inline;
  margin: 0 5px;
}


/* footer social icons */

.social-network a.icoFacebook:hover {
  background-color: #3B5998;
}

.social-network a.icoYoutube:hover {
  background-color: #FF0000;
}
.social-network a.icoInstagram:hover {
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
  box-shadow: 0px 3px 10px rgba(0,0,0,.25);
}


.social-network a.icoFacebook:hover i,
.social-network a.icoYoutube:hover i {
  color: #fff;
}

.social-network a.socialIcon:hover,
.socialHoverClass {
  color: #44BCDD;
}

.social-circle li a {
  display: inline-block;
  position: relative;
  margin: 0 auto 0 auto;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  text-align: center;
  width: 30px;
  height: 30px;
  font-size: 15px;
}

.social-circle li i {
  margin: 0;
  line-height: 30px;
  text-align: center;
}

.social-circle li a:hover i,
.triggeredHover {
  -moz-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  -ms--transform: rotate(360deg);
  transform: rotate(360deg);
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  -ms-transition: all 0.2s;
  transition: all 0.2s;
}

.social-circle i {
  color: #595959;
  -webkit-transition: all 0.8s;
  -moz-transition: all 0.8s;
  -o-transition: all 0.8s;
  -ms-transition: all 0.8s;
  transition: all 0.8s;
}

.social-network a {
  background-color: #F9F9F9;
}
#loading{
  width: 100%;
  height: 100vh;
  background:#fff url('Img/bar.gif');
}
.mainfooter{
	float: left;
}


</style>
<body>
	<div>
		<header>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-1" id="top">
  <!-- Brand -->
  <a class="navbar-brand text-danger" href="#">SaiInfoTech</a>
<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarid">
    <span class="navbar-toggler-icon"></span>
</button>
  <!-- Links -->
  <div class="collapse navbar-collapse text-center" id="navbarid">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link active" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Programming</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="hacking.html">Hacking</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="#">Articles</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="java.html">Java</a>
    </li>
 

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        popular
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Bootstrap</a>
        <a class="dropdown-item" href="#">Ajax</a>
        <a class="dropdown-item" href="#">JQuery</a>
      </div>
    </li>
            <li class="nav-item">
      <a class="nav-link" href="#joinus">Sign Up</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="login.html">Login</a>
    </li>
  </ul>
</div>
  <form class="form-inline ml-5" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-primary mt-1" type="submit">Search</button>
  </form>

</nav>
<!-- jumbotrone starts here -->
<div class="container-fluid mt-5">
  <div class="jumbotron" style="background-color: #fff;">
    <h1 class="text-center">Templets For Your Projects..</h1>      
    <p class="text-center mt-5 display-4">More Than 1000 templates are available <br>
    	Choose which suits for you.
    </p>

</header>
	</div>
	<nav>
		<div class="container">
			<nav class="navbar navbar-expand-sm  navbar-dark mt-1 navbar-primary" id="second-nav">
  <!-- Brand -->
<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarid">
    <span class="navbar-toggler-icon"></span>
</button>
  <!-- Links -->
  <div class="collapse navbar-collapse text-center" id="navbarid">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" href="#">Navigation-Bars</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">login-pages</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="hacking.html">contact us forms</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="#">home pages</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="java.html">registration-pages</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="java.html">Animations</a>
    </li>
		</div>
	</nav>
	<footer class="mainfooter mt-0 container-fluid" role="contentinfo">
  <div class="footer-middle">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-12 col-sm-12 col-12">
        <!--Column1-->
        <div class="footer-pad">
          <h4>About us</h4>
          <ul class="list-unstyled">
            <li><a href="#"></a></li>
            <li><a href="#">Who We Are</a></li>
            <li><a href="#">Visit Us</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">News and Updates</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 col-sm-12 col-12">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Tutorials</h4>
          <ul class="list-unstyled">
            <li><a href="#">Website Tutorial</a></li>
            <li><a href="#">SEO</a></li>
            <li><a href="#">Digital Marketing</a></li>
            <li><a href="#">Social Media Marketing</a></li>
            <!-- <li><a href="#">FAQs</a></li>
            <li><a href="#">Webmaster</a></li> -->
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 col-sm-12 col-12">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Downloads</h4>
          <ul class="list-unstyled">
            <li><a href="#">PDF Books</a></li>
            <li><a href="#">Source Code</a></li>
            <li><a href="#">plugins</a></li>
            <li><a href="#">Editors</a></li>
            <li><a href="#">Free Notes</a></li>
            <li>
              <a href="#"></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3">
        <h4>Follow Us</h4>
            <ul class="social-network social-circle">
             <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#" class="icoYoutube" title="youtube"><i class="fa fa-youtube"></i></a></li>
             
             <li><a href="#" class="icoInstagram" title="instagram"><i class="fa fa-instagram"></i></a></li>
            </ul>       
    </div>
    </div>

  <div class="row">
    <div class="col-md-12 copy">
      <p class="text-center">&copy; Copyright 200 - SaiInfoTech.  All rights reserved.</p>
      <p class="text-center text-warning">Designed And Developed By Amit Kasabe</p>
    </div>
  </div>


  </div>
  </div>
</footer>
</body>
</html>