<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forget Password</title>
	<!--Title Logo-->
	<link rel="icon" href="<?php echo base_url();?>assets/img/bank.png">
	<!--Style -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
	<!--Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--Font Awesome -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<style>
	/* myFirstFont */
	@font-face {
		font-family: myFirstFont;
		src: url("<?php echo base_url();?>assets/font/28_Days_Later.ttf");
	}
	/* myFirstFont */
	.Days_later{
		font-family: "myFirstFont";
		font-size: 25px;
	}
	.menu_font{
		font-family: "myFirstFont";
		font-size: 20px;
	}
	.title{
		font-family: "myFirstFont";
		font-size: 40px;
	}
	.inputType{
		font-family: "myFirstFont";
		font-size: 30px;
	}
	.footer{
		position: absolute;
		bottom: 0;
		left: 0;
		right: 0;
		height:100px;
		background:black;
	}
	.footer_title{
		text-align: center;
		color: white;
		font-size: 25px;
		font-family: "myFirstFont";
	}
	.footer_title2{
		text-align: center;
		color: white;
		font-size: 10px;
		font-family: "myFirstFont";
	}
</style>
</head>
<body>


	<!--Bootstrap Navbar -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<!--Navbar Toogle -->
			<div class="navbar-header">

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand  Days_later" href="<?php echo base_url();?>">Online Banking</a>
			</div>
			<!--/Navbar Toogle -->
			<!--Navbar Menu -->
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="menu_font"><a href="<?php base_url()?>">Home</a></li>
					<li class="menu_font"><a href="<?php echo base_url();?>index.php/gethelp">Get Help</a></li>
					<li class="menu_font"><a href="<?php echo base_url();?>index.php/aboutus">About Us</a></li>
				</ul>
			</div>
			<!--/Navbar Menu -->
		</div>
	</nav>
	<!--/Bootstrap Navbar End-->
	<!--Div Sign In -->
	<div class="container-fluid signin_div" style="margin-top: 70px;">
		<!--Sign in Tittle-->
		<p class="title" style="text-align: center;">This feature don't work properly right now</p>
		<p class="title" style="text-align: center;"><a href="<?php echo base_url();?>">Click to login page</a></p>
		<!--/Sign In Form -->

	</div>
</body>
</html>