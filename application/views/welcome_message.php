<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Online Banking</title>
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
   .menu_font2{
      font-family: "myFirstFont";
      font-size: 16px;
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
		bottom: 0;
		width: 100%;
		height:100px;
		background:black !important;
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
               <li class="menu_font"><a href="<?php echo base_url();?>index.php/admin">Admin</a></li>
				</ul>
			</div>
			<!--/Navbar Menu -->
		</div>
	</nav>
	<!--/Bootstrap Navbar End-->


	<!--Image -->
	<img src="<?php echo base_url();?>assets/img/dark.jpg" alt="" width="100%">
	<!--/Image-->

	<!--Div Sign In -->
	<div class="container-fluid signin_div">
		<!--Sign in Tittle-->
		<p class="title" style="text-align: center;">Sign in to online banking</p><br>
		<div class="container">
			<div class="form-group">
				<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
					<!--Form Strat .. -->
					<form class="form-horizontal" action="<?php echo base_url()?>index.php/user_login" method="post" align="center" >
						<!--Account Label Start-->
						<label >
							<input title="Account field must be at least 4 characters in length" class="form-control input-lg inputType" type="text" name="account" value="" placeholder="Account No" >
						</label>
						<br>
						<!--account error message-->
<?php $msg = $this->session->flashdata('account');
if ($msg) {
	echo "<p class='inputType'>$msg</p>";
	$this->session->unset_userdata('incorrect');
}

?>
<!--account label end-->
                 <!--Password label-->
                 <label>
                    <input title="Password field must be at least 4 characters in length" type="password" class="form-control input-lg inputType" type="password" name="password" value="" placeholder="Password">
                 </label><br>
                 <!--Password error message-->
<?php $msg = $this->session->flashdata('password');
if ($msg) {
	echo "<p class='inputType'>$msg</p>";
	$this->session->unset_userdata('incorrect');
}

?>
<!--Password label end-->
                 <!--extra div for login button forget password-->
                 <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
                    <!--error password or account no-->
                    <label>
<?php
$msg = $this->session->flashdata('error');
if ($msg) {
	echo "<p class='inputType' style='color=red;!important'>$msg</p></br>";
	$this->session->unset_userdata('incorrect');
}

?>
                 </label>
                 <br>
                 <!--forget password dont work -->
                 <label>
                   <p class="menu_font2"><a class="foget_hover" href="<?php echo base_url();?>index.php/forget_password">Forget Password</a>
                   </p></label><br>
                   <!--forget password end-->
                   <!--sign up label-->
                   <label><p class="menu_font2"><a class="foget_hover" href="<?php echo base_url();?>index.php/register_korbe">Not Register ? Sing Up</a></p></label><br>
                   <!--sign up label end-->
                   <!--login input label -->
                   <label  class="Days_later" style="width: 300px;"><input class="form-control Days_later2" type="submit" name="submit" value="Log in"></label>
                   <!--login input label -->
                </div>

             </form>
             <!--/Sign In Form -->
          </div>
       </div>
    </div>
 </div>
</body>
</html>