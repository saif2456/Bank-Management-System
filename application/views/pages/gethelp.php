<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Get Help</title>
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
		width: 100%;
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
					<li class="menu_font"><a href="<?php echo base_url()?>">Home</a></li>
					<li class="menu_font"><a href="<?php echo base_url();?>index.php/gethelp">Get Help</a></li>
					<li class="menu_font"><a href="<?php echo base_url();?>index.php/aboutus">About Us</a></li>
				</ul>
			</div>
			<!--/Navbar Menu -->
		</div>
	</nav>
	<!--/Bootstrap Navbar End-->

	<!--Div start-->
	<div class="container-fluid signin_div" style="margin-top: 70px;">
		<!-- Tittle-->
		<p class="title" style="text-align: center;">Get Help</p><br>
		<div class="container">
			<div class="form-group">
				<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
					<h1 class="title">How to Use Online Bank</h1>
					<!--Info text-->
					<p class="menu_font">1. First you need to registration with your bank account number and password.<br>2. After login you need to all your all information in profile with profile picture.<br>
					3. And Now you can make transaction with others with this online banking services. </p>
				</div>
			</div>
		</div>
	</div>
	<!--Div End-->


	<!-- Footer -->
	<footer class=" font-small footer">
		<div class="conaiter">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
					<p class="footer_title">Online Banking</p>
					<p class="footer_title2">sopu175@gmail.com</p>
					<p class="footer_title2">01944905784</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer -->

</body>
</html>