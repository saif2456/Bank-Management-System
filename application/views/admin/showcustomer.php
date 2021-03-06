<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Transaction History</title>
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
				<a class="navbar-brand Days_later" href="<?php echo base_url()?>index.php/adminprofile">Admin Panel</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="menu_font"><a class="menu_active"  href="<?php echo base_url();?>index.php/update">Update</a></li>
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/delete">Delete</a></li>
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/showcustomer">Show List</a></li>
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/logout">Log out</a></li>
				</ul>
				<!--Navbar Menu End -->
			</div>
		</div>
	</nav>
	<!--Bootstrap Navbar End-->
	<br>
	<div  class="container-fluid signin_div" style="margin-top: 70px; overflow-y: scroll;">
		<div class="container">
			<h1 class="title" align="center">Here the list</h1>
			<hr class="star-light"><br><br>

			<div class="form-group">
				<div class="row">
					<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">

						<div class="col-xs-2 col-md-2 col-lg-2 col-sm-2">
							<p class="Days_later2">Name</p>
<?php foreach ($data as $row) {

	echo "<p class='Days_later2'>".$row['name']." ".$row['l_name']."</p>";

}?>
</div>
						<div class="col-xs-2 col-md-2 col-lg-2 col-sm-2">
							<p class="Days_later2">Account No</p>
<?php foreach ($data as $row) {

	echo "<p class='Days_later2'>".$row['account']."</p>";

}?>
</div>
						<div class="col-xs-2 col-md-2 col-lg-2 col-sm-2">
							<p class="Days_later2">Branch</p>
<?php foreach ($data as $row) {

	echo "<p class='Days_later2'>".$row['branch']."</p>";

}?>
</div>
						<div class="col-xs-2 col-md-2 col-lg-2 col-sm-2">
							<p class="Days_later2">City</p>
<?php foreach ($data as $row) {

	echo "<p class='Days_later2'>".$row['city']."</p>";

}?>
</div>
						<div class="col-xs-2 col-md-2 col-lg-2 col-sm-2">
							<p class="Days_later2">NID</p>
<?php foreach ($data as $row) {

	echo "<p class='Days_later2'>".$row['nid']."</p>";

}?>
</div>
						<div class="col-xs-2 col-md-2 col-lg-2 col-sm-2">
							<p class="Days_later2">click to delete</p>
<?php foreach ($data as $row) {

	echo "<p class='Days_later2'>"."<a>Delete</a>"."</p>";

}?>
						</div>
					</div>
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