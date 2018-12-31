<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Update Account Info</title>
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
<body data-spy="scroll">


	<!--Bootstrap Navbar -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand Days_later" href="<?php echo base_url();?>">Online Banking</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url()?>index.php/profile">Profile</a></li>
					<li class="menu_font"><a class="menu_active"  href="<?php echo base_url();?>index.php/depositemoney">Deposite</a></li>
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/sendemoney">Send Money</a></li>
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/help">Help</a></li>
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/aboutus">About Us</a></li>
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/logout">Log out</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--Bootstrap Navbar End-->
	<br>
	<!--new div start-->
	<div  class="container-fluid signin_div" style="margin-top: 70px; overflow-y: scroll;">
		<h1 class="title" align="center">Add your account information</h1><br>
		<div class="container">
			<div class="form-group">
				<form class="form-horizontal" action="<?php echo base_url()?>index.php/changeaccountinfo" method="post" align="center" >
					<div class="row">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<label style="width: 100%;">
								<input class="form-control Days_later" type="text" name="name" value="" placeholder="First Name"></label>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								<label style="width: 100%;">
									<input type="text" class="form-control Days_later"  name="l_name" value="" placeholder="Last Name"></label>
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
									<label style="width: 100%;">
										<input class="form-control Days_later" type="number" name="age" value="" placeholder="Age"></label>
									</div>

									<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
										<label style="width: 100%;">
											<input class="form-control Days_later" type="date" name="dob" value="" placeholder="Date of Birth" >
										</div>
										<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
												<label style="width: 100%;">
													<select class="form-control Days_later" name="gender">
														<option value="Male">Male</option>
														<option value="Female">Female</option>
														<option value="Others">Others</option>
													</select></label>
												</div>

											</div><br>
											<div class="row">
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
													<label style="width: 100%;">
														<input class="form-control Days_later" type="text" name="nid" value="" placeholder="National Id"></label>
													</div>
													<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
													<label style="width: 100%;">
														<input class="form-control Days_later" type="text" name="branch" value="" placeholder="Branch"></label>
													</div>
													<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
													<label style="width: 100%;">
														<input class="form-control Days_later" type="text" name="city" value="" placeholder="City"></label>
													</div>
													<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
													<label style="width: 100%;">
														<input class="form-control Days_later" type="text" name="zip" value="" placeholder="Zip Code"></label>
													</div>
													<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
													<label style="width: 100%;">
														<select class="form-control Days_later" name="religion">
															<option value="Muslim">Muslim</option>
															<option value="Hindu">Hindu</option>
															<option value="Buddha">christian</option>
															<option value="Others">Others</option>
														</select></label>
													</div>
												</div><br>
												<div class="row">
													<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
													<label style="width: 100%;">
														<input class="form-control Days_later" type="text" name="address" value="" placeholder="Adress" width="100%"></label>
													</div>
													<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
													<label style="width: 100%;">
														<input class="form-control Days_later" type="text" name="nation" value="" placeholder="Nationality" width="100%"></label>
													</div>
												</div>
												<div class="row"><br>
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<label style="width: 100%;">
																<input class="form-contol Days_later" type="submit" value="Update" name="submit" style="width: 100%;">
															</label>
													</div>
												</div>
											</form>


										</div></div></div>



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