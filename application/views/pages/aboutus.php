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
		font-size: 15px;
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
		font-size: 25px;
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
				<a class="navbar-brand  inputType" href="<?php echo base_url();?>">Online Banking</a>
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

	<!--Div Start -->
	<div class="container-fluid signin_div" style="margin-top: 70px;">
		<!--Tittle-->
		<p class="title" style="text-align: center;">Our Branch Location</p><br>
		<div class="container">
			<div class="form-group">
				<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
					<!--Table start-->
					<table style="width:100%" border="1px">
						<tr>
							<text>
								<th  class="menu_font">Location</th>
								<th  class="menu_font">Contact no.</th>
							</tr>
							<tr class="Days_later">
								<td>Plot # 01, Asad Gate, Mohammadpur, Dhaka</td>
								<td>02- 9137155, 02- 8158305</td>
							</tr>
							<tr class="Days_later">
								<td>Plot # 5, Block-G (1st & 2nd Floor), Road-11, Banani, Dhaka-1213</td>
								<td>02-8899192</td>
							</tr>
							<tr class="Days_later">
								<td>Holding # 193, Block # B, Safwan Road, Basundhara R/A, Dhaka- 1229</td>
								<td>02-8845030, 02-8845025</td>
							</tr>
							<tr class="Days_later">
								<td>Plot: 12, Block: C, Main Road, Word: 22, P.O : Rampura, Dhaka</td>
								<td>02- 8396587</td>
							</tr>
							<tr class="Days_later">
								<td>Megna Plaza, Holding# 11, Ward#02, Konapara Bazar, Jatrabari, Dhaka</td>
								<td>02-7544726</td>
							</tr>
							<tr class="Days_later">
								<td>Haji Mollah Mansion (1st Floor), East Aganoger Mosque Road, Kerinegonj, Dhaka-1310</td>
								<td>02- 7772661, 02- 7772662</td>
							</tr>
							<tr class="Days_later">
								<td>Holding# 25/2, Ward# 42, Block# C, Tajmahol Road, Mohammadpur, Dhaka- 1207</td>
								<td>02-9116753</td>
							</tr>
							<tr class="Days_later">
								<td>Mika Corner Stone (1st & 2nd Floor) Plot: 16 & 17, Road: 12, Sector: 06, Uttara, Dhaka - 1230</td>
								<td>02 8951118, 02 8931672</td>
							</tr>
							<tr class="Days_later">
								<td>Holding # 193, Block # B, Safwan Road, Basundhara R/A, Dhaka- 1229</td>
								<td>02-8845030, 02-8845025</td>
							</tr>
							<tr class="Days_later">
								<td>Plot: 12, Block: C, Main Road, Word: 22, P.O : Rampura, Dhaka</td>
								<td>02- 8396337</td>
							</tr>
							<tr class="Days_later">
								<td>Megna Plaza, Holding# 11, Ward#02, Konapara Bazar, Jatrabari, Dhaka</td>
								<td>02-7544724</td>
							</tr>
						</table>
						<!--Table end-->
					</div>
				</div>
			</div>
		</div>
		<!--Div end -->

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