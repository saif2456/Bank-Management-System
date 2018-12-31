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
	.Days_later2{
		font-family: "myFirstFont";
		font-size: 20px;
	}

	.menu_font{
		font-family: "myFirstFont";
		font-size: 20px;
	}
	.title{


		font-family: "myFirstFont";
		font-size: 40px;

	}
	.infotext{


		font-family: "myFirstFont";
		font-size: 20px;

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
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand Days_later" href="<?php echo base_url()?>index.php/adminprofile">Admin Panel</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="menu_font"><a class="menu_active"  href="<?php echo base_url();?>index.php/update">Update</a></li>
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/delete">Delete</a></li>
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/showcustomer">Show List</a></li>
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/logout">Log out</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--Bootstrap Navbar End-->
	<div  class="container-fluid signin_div" style="margin-top: 70px; overflow-y: scroll;">
		<div class="container">
			<!--tittle-->
			<h1 class="title" align="center">Add Money</h1><br>
			<div class="row">
				<div class="col-sm-12 col-lg-12 col-md-12 col-sm-12">
					<form action="<?php echo base_url()?>index.php/addmoneyprocess" method="post" accept-charset="utf-8" >

						<div class="row" align="center">
							<p class="Days_later2">Enter Amount</p>
<?php $id = $this->session->flashdata('id');?>
							<label class="Days_later2" ><input class="form-control Days_later2" type="text" name="money" value="" placeholder="Enter Amount"></label>
							<label class="Days_later2" ><input class="form-control Days_later2" type="hidden" name="id" value="<?php echo $id;?>"  ></label>
							<label  class="Days_later2"><input class="form-control Days_later2" type="submit" name="submit" value="Add Money"></label>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


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