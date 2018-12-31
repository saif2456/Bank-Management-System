<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');

foreach ($data as $row) {
	$user_name     = $row['name'];
	$user_lname    = $row['l_name'];
	$user_age      = $row['age'];
	$user_dob      = $row['dob'];
	$user_gender   = $row['gender'];
	$user_religion = $row['religion'];
	$money         = $row['money'];
	$img           = $row['img'];

}
if ($img == Null) {
	echo "<p class='menu_font'>You can change your profile picture</p>";
	$img = "default.jpg";
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $user_name?></title>
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
	.title{


		font-family: "myFirstFont";
		font-size: 40px;

	}
	.infotext{
		font-family: "myFirstFont";
		font-size: 20px;
	}
	.footer{

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
	.total_balance{
		width: 100%;
		height: 50px;

		text-align: center;
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
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/aboutus">About Us</a></li>
					<li class="menu_font"><a class="menu_active" href="<?php echo base_url();?>index.php/logout">Log out</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--Bootstrap Navbar End-->
		<!--New Div Start-->
	<div class="container-fuild " style="margin-top: 70px; overflow-y: scroll;">
		<h1 class="title" align="center">Profile</h1><br><br>
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-md-6 col-sd-6 col-lg-6">
						<!--Show image -->
					<img src="<?php echo base_url('assets/'.$img);?>" width="150" height="150">
	<!--img upload form-->
<?php echo form_open_multipart('index.php/imageupload');?>
					<br>
					<input class="menu_font" type="file" name="file" size="20" />
					<br>
					<input class="menu_font" type='submit' name="upload" value="upload" style="float: left;">

				</form>
	<!--end image upload form-->
			</div>
			<div class="col-xs-6 col-md-6 col-sd-6 col-lg-6">
					<!--update info button-->
				<p class="infotext" style="float: right;"><a href="<?php echo base_url()?>
				index.php/userinfochange">Edit Info</a></p>
					<!--show information from database-->
				<p class="infotext">Account No:<?php echo $this->session->account?></p>
				<p class="infotext">Password: <?php echo $this->session->password?></p>
				<p class="infotext">First Name: <?php if ($user_name == null) {
	echo "Please add your name";
} else {
	echo $user_name." ".$user_lname;
}

?></p>

				<p class="infotext">Age: <?php if ($user_age == null) {
	echo "Please add your age";
} else {
	echo $user_age;
}

?></p>
				<p class="infotext">Date of Birth: <?php if ($user_dob == '0000-00-00') {
	echo "Please add your date of birth";
} else {
	echo $user_dob;
}

?></p>
				<p class="infotext">Gender: <?php if ($user_gender == null) {
	echo "Please add your gender";
} else {
	echo $user_gender;
}

?></p>
				<p class="infotext">Religion: <?php if ($user_religion == null) {
	echo "Please add your religion</a>";
} else {
	echo $user_religion;
}

?></p>
			</div>
		</div>
	</div><br>
	<div class="container total_balance">
		<p class="infotext">Total Balance: <?php if ($money == null) {
	echo "Please contact your manager otherwise you dont make any transaction";
} else {
	echo $money;
}

?></p>	<!--end info -->
	</div><br><br><br>
</div>
	<!--end div-->
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