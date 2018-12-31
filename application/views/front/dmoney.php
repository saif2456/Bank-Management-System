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
	.box{
	border: 5px solid black;
	text-decoration: none;
	border-radius: 10px;
	padding: 2px;
}
	.button_css{

		display: flex;
  		align-items: center;
  		justify-content: center;
	}
	#rock {
    width: 150px;
    height: 150px;
    background-image: url();
    background-repeat: no-repeat;
}

.button_css p {
	font-weight: bold;
}

.title{

font-weight: bold;

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
				<a class="navbar-brand h_css" href="<?php echo base_url();?>">Online Banking</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="active h_css"><a href="<?php echo base_url()?>index.php/profile">Profile</a></li>
					<li class="h_css"><a href="<?php echo base_url()?>index.php/deposite">Deposite</a></li>
					<li class="h_css"><a href="#">Send Money</a></li>
					<li class="h_css"><a href="#">Help</a></li>
					<li class="h_css"><a href="#">About Us</a></li>
					<li class="h_css"><a href="#">Log out</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--Bootstrap Navbar End-->
	<div class="container-fuild " style="margin-top: 70px;">
		<h1 class="title" align="center">Deposite Money</h1><br>
		<div class="container">
			<div class="row">

			</div>
		</div>
	</div>


	<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
	</body>
	</html>