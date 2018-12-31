<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
foreach ($data as $row) {
	$money = $row['money'];
}

?><!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Send Money</title>
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
				<!--Navbar Menu -->
				<ul class="nav navbar-nav navbar-right">
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url()?>index.php/profile">Profile</a></li>
					<li class="menu_font"><a class="menu_active"  href="<?php echo base_url();?>index.php/depositemoney">Deposite</a></li>
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/sendemoney">Send Money</a></li>
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/help">Help</a></li>
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/aboutus">About Us</a></li>
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
			<h1 class="title" align="center">Send Money</h1>
			<hr class="star-light"><br><br>
			<!--deposite form -->
			<div class="form-group">
				<div class="row">
					<!--balance zero msg -->
<?php
if ($money == Null) {
	echo "<p class='menu_font' style='color: red;'>You can not make any transaction beacouse your account balance is 0 ,please contact your manager or admin </p>";
}
?>
					<!--deposite form -->
					<form action="<?php echo base_url()?>index.php/sendmoney_submit" method="post" accept-charset="utf-8">
						<div class="col-xs-4 col-sm-4 col-lg-4 col-md-4">
							<!--account input -->
							<p class="Days_later2">Account number</p>
							<label><input class="form-control Days_later2 " type="text" name="account_two" value="" placeholder="Account Number"></label>
							<!--account input end -->
						</div>
						<div class="col-xs-4 col-sm-4 col-lg-4 col-md-4">
							<!--money input -->
							<p class="Days_later2">Enter Amount</p>
							<label class="Days_later2"><input class="form-control Days_later2" type="text" name="money" value="" placeholder="Enter Amount"></label>
							<!--money input -->
						</div>
						<div class="col-xs-4 col-sm-4 col-lg-4 col-md-4">
							<!--Submit Button -->
							<br><br>
							<label  class="Days_later2"><input class="form-control Days_later2" type="submit" name="submit" value="Send Money"></label>
							<!--Submit Button end  -->
						</div>

					</form>
					<!--deposite form end-->
				</div>
			</div>
			<!--deposite form end-->
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