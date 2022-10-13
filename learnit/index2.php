<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Index</title>
	<?php include_once 'include.php'; ?>
 	<style type="text/css">
 		.modal-header {
   
    justify-content: center;
}
		body .modal{
			text-align: -webkit-center;
		}
		textarea,input{
			margin: 4% 0;
		}
 	</style>
</head>
<!-- <?php
include_once 'dbConnection.php';
include_once 'cookie.php';

?> -->

	<script>
function validateForm() {var y = document.forms["form"]["name"].value;  var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["pass"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Password is too short! Length should be greater than 5!");return false;}
var m = document.forms["form"]["mob"].value;if(m.length<9||m.length>12){alert("Enter Valid length Mobile Number!");return false;}
var b = document.forms["form"]["pass2"].value;if (a!=b){alert("Passwords must match.");return false;}
var r = document.forms["form"]["role"].value;if(r==null || r == ""){alert("Role must be Selected");return false;}}

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	 
.modal {
  text-align: center;
}

@media screen and (min-width: 768px) { 
  .modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
  }
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}



  {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .left{
  float:left;
}

.right{
  float:right;
}

.clear{
  clear:both;
}
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
 
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;

      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #f4511e !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;

  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>


</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><span class="glyphicon glyphicon-home"></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#login">ADMIN</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal">SIGN IN</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal1">SIGN UP</a></li>
         <li><a href="#" data-toggle="modal" data-target="#login2">TEACHER</a></li>
  <li><a href="#services" >SERVICES</a></li>
        <li><a href="#developers">DEVELOPERS</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
</script>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	 <div class="container-fluid">
	    <a class="navbar-brand" href="#">LearnIT</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
	      <ul class="navbar-nav ">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#signup" href="#signup">Signup</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#feed" data-bs-toggle="modal" data-bs-target="#feed">Feedback</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#login" data-bs-toggle="modal" data-bs-target="#login">Login</a>
	        </li>
	      </ul>
	    </div>
	  </div>
</nav>
<div class="modal fade"   id="login">
  	<div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<h4 class="modal-title" ><span  style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px;"><b>LOGIN</b></span></h4>
	     	</div>
			<div class="modal-body title1" >
				<div class="col-md-9">
					<form role="form" method="post" action="login.php?q=index.php">
						<div class="form-group">
							<input type="text" name="email" maxlength="20"  placeholder="Email Id" class="form-control"/> 
						</div>
						
						<div class="form-group">
							<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
						</div>
						
						<div class="form-group">
							<input type="checkbox" name="remb" placeholder="Remember Me"  />
							<span>Remember Me</span>
						</div>
						
						<div class="form-group" align="center">
							<input type="submit" name="login" value="Login" class="btn btn-primary" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="modal fade "   id="feed">
  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<h4 class="modal-title" ><span  style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px;"><b>FEEDBACK</b></span></h4>
	     	</div>
			<div class="modal-body title1" >
				<div class="col-md-9">
					<form role="form" method="post"   action="update.php">
						<div class="form-group">
							<input type="text" name="name" placeholder="Full Name" required="required" class="form-control"/> 
						</div>
						
						<div class="form-group">
							<input type="email" name="email" placeholder="Email ID" required="required" class="form-control"/>
						</div>
						
						<div class="form-group">
							<input type="text" name="sub" placeholder="Subject" required="required" class="form-control" />
						</div>
						
						<div class="form-group">
							<!-- <input type="textbox" name="feed"  required="required" class="form-control" /> -->
							<textarea class="form-control" name="feed" placeholder="Feedback" required></textarea>
						</div>
						
						<div class="form-group" align="center">
							<input type="submit" name="button12" value="Submit" class="btn btn-primary" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade "   id="signup">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<h4 class="modal-title" ><span  style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px;"><b>SIGN UP</b></span></h4>
	     	</div>
			<div class="modal-body title1" >
				<div class="col-md-9">
					<form role="form" name="form" onSubmit="return validateForm()" action="update.php" method="post">
						<div class="form-group">
							<input type="text" name="name" placeholder="Full Name"  class="form-control"/> 
						</div>
						
						<div class="form-group">
							<input type="email" name="email" placeholder="Email ID"  class="form-control"/>
						</div>
						
						<div class="form-group">
							<input type="number" name="mob"  placeholder="Mobile Number"  class="form-control" />
						</div>
						
						<div class="form-group">
							<input type="password" name="pass" placeholder="Enter Suitable Password" class="form-control" >
						</div>
						
						<div class="form-group">
							<input type="password" name="pass2" placeholder="Confirm Password" class="form-control" >
						</div>
						<span>Role : </span>
						<div class="form-check-inline" >
							<input type="radio" name="role" value="Teacher" id="tchrradio" class="form-check-input" >
							<label class="form-check-label" for="tchrradio">Teacher</label>
						</div>
						<div class="form-check-inline">
							<input type="radio" name="role" value="Student" id="stdradio" class="form-check-input" >
							<label class="form-check-label" for="stdradio">Student</label>
						</div>
						<br>
						<div class="form-group" align="center">
							<input type="submit" name="button11" value="Submit" class="btn btn-primary" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 
<form method="POST" name="form" onSubmit="return validateForm()" action="update.php">
	<input type="text" name="name" placeholder="Full Name" />
	<input type="email" name="email" placeholder="Email ID" />
	<input type="number" name="mob"  placeholder="Mobile Number" />
	<input type="password" name="pass" placeholder="Enter Suitable Password" />
	<input type="password" name="pass2" placeholder="Confirm Password" />
	<input type="radio" name="role" value="Teacher" placeholder="Teacher" />Teacher
	<input type="radio" name="role" value="Student" placeholder="Student" />Student
	<button type= "submit" name="button11" value="1">Submit</button>
</form>


 -->
</body>


</html>





