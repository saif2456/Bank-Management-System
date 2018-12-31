<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User Profile</title>
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
	<style type="text/css" media="screen">
	@font-face {
		font-family: myFirstFont;
		src: url("<?php echo base_url();?>assets/font/28_Days_Later.ttf");
	}
	.Days_later{
		font-family: "myFirstFont";
		font-size: 25px;
	}
	.menu_font{
		font-family: "myFirstFont";
		font-size: 20px;
	}
	.box{
		border: 5px solid white;
		text-decoration: none;
		border-radius: 10px;
		padding: 2px;
	}
	.button_css{

		display: flex;
		align-items: center;
		justify-content: center;
	}
	.button_css img:hover{
		width: 40% !important;
		height: 40% !important;
	}

	#rock {
		width: 150px;
		height: 150px;
		background-image: url();
		background-repeat: no-repeat;
	}

	.font-black{
		color: black;
		font-family: "myFirstFont";
		font-size: 20px;
	}
	.font-black:hover{
		font-size: 25px;
		text-decoration: none;
		color: black;
	}

	.title{


		font-family: "myFirstFont";
		font-size: 40px;

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
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand Days_later" href="<?php echo base_url()?>index.php/profile">Online Banking</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url()?>index.php/profile">Profile</a></li>
					<li class="menu_font"><a class="menu_active"  href="<?php echo base_url();?>index.php/depositemoney">Deposite</a></li>
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/sendemoney">Send Money</a></li>
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/help">Help</a></li>
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/aboutus_pr">About Us</a></li>
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/logout">Log out</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--Bootstrap Navbar End-->
	<br>
	<!--new div start -->
	<div class="container-fuild " style="margin-top: 70px;">
		<h1 class="title" align="center">Welcome To Online Banking</h1><br>
		<div class="container">
			<div class="row">
				<div  class="col-xs-12 col-md-4 col-lg-4 col-sm-4 ">
					<div  class="col-xs-12 col-md-12 col-lg-12 col-sm-12 box">
						<a class="font-black" href="<?php echo base_url()?>index.php/profiledetails">
							<!--profile img button -->
							<div class="button_css"> <img class="img-fluid" alt="Responsive image" src="<?php echo base_url();?>assets/img/profile.jpeg" height="100" width="100">


							</div>
							<div class="button_css">
								<p>Profile</p>
							</div>
						</a>
					</div>
				</div>
				<!--deposite image button -->
				<div  class="col-xs-12 col-md-4 col-lg-4 col-sm-4 ">
					<div  class="col-xs-12 col-md-12 col-lg-12 col-sm-12 box">
						<a class="font-black" href="<?php echo base_url()?>index.php/depositemoney">
							<div class="button_css"><img src="<?php echo base_url();?>assets/img/deposite.png" height="100" width="100"></div>
							<div class="button_css">
								<p>Deposite Money</p>
							</div>
						</a>
					</div>
				</div>
				<!--send money image button -->
				<div  class="col-xs-12 col-md-4 col-lg-4 col-sm-4 ">

					<div  class="col-xs-12 col-md-12 col-lg-12 col-sm-12 box">
						<a class="font-black" href="<?php echo base_url()?>index.php/sendemoney">
							<div class="button_css"><img src="<?php echo base_url();?>assets/img/send.png" height="100" width="100"></div>
							<div class="button_css">
								<p>Send Money</p>
							</div>
						</a>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<!--transaction history image button -->
				<div  class="col-xs-12 col-md-4 col-lg-4 col-sm-4 ">
					<div  class="col-xs-12 col-md-12 col-lg-12 col-sm-12 box">
						<a class="font-black" href="<?php echo base_url()?>index.php/transaction_history">
							<div class="button_css"><img src="<?php echo base_url();?>assets/img/history.png" height="100" width="100"></div>
							<div class="button_css">
								<p>Transaction History</p>
							</div>
						</a>
					</div>
				</div>
				<!--logout image button -->
				<div  class="col-xs-12  col-md-4 col-lg-4 col-sm-4 ">
					<div  class="col-xs-12 col-md-12 col-lg-12 col-sm-12 box">
						<a class="font-black" href="<?php echo base_url()?>index.php/logout">
							<div class="button_css"><img src="<?php echo base_url();?>assets/img/logout.png" height="100" width="100"></div>
							<div class="button_css">
								<p>Logout</p>
							</div>
						</a>
					</div>
				</div>
				<div  class="col-xs-12  col-md-4 col-lg-4 col-sm-4 ">

					<div  class="col-xs-12 col-md-12 col-lg-12 col-sm-12 box">

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<footer class="page-footer font-small footer">
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