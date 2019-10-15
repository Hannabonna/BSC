<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html><html lang="en-US">
<!-- Mirrored from markup.themewagon.com/tryfreya/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2019 12:03:37 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--    Document Title-->
<title>Bandung Smart City</title>
<!--    Favicons-->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/images/favicons/logo.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/images/favicons/logo.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/images/favicons/logo.png">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/images/favicons/logo.png">
<link rel="manifest" href="<?php echo base_url();?>assets/images/favicons/manifest.html">
<link rel="mask-icon" href="<?php echo base_url();?>assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileImage" content="<?php echo base_url();?>assets/images/favicons/logo.png">
<meta name="theme-color" content="#ffffff">
<!--    Stylesheets-->
<!-- Default stylesheets-->
<link href="<?php echo base_url();?>assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Template specific stylesheets-->
<link href="<?php echo base_url();?>assets/lib/loaders.css/loaders.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>https://fonts.googleapis.com/css?family=Nunito:300,400,600" rel="stylesheet">
<link href="<?php echo base_url();?>assets/lib/iconsmind/iconsmind.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/ionicons.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/lib/hamburgers/dist/hamburgers.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/lib/flexslider/flexslider.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets2/js/bootstrap.min.js" rel="stylesheet">
<!-- Main stylesheet and color file-->
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
</head>

<body>
<main style="margin-bottom: -25px;">
	<div class="loading" id="preloader">
	<div class="h-100 d-flex align-items-center justify-content-center">
		<div class="loader-box">
			<div class="loader"></div>
		</div>
	</div>
	</div>

	<div class="znav-container znav-white znav-freya znav-fixed" id="znav-container">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
				<a class="navbar-brand overflow-hidden pr-3" href="<?php echo base_url();?>index.php/homepage">
				<div class="background-primary radius-br-0 radius-secondary lh-1 color-white fs-0" style="padding: 7px 10px 7px 13px;">
					<img src="<?php echo base_url();?>assets/images/favicons/logo.png" alt="Freya" width="30"/>
					<img src="<?php echo base_url();?>assets/images/favicons/text.png" alt="Freya" width="70"/>
				</div>	
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<div class="hamburger hamburger--emphatic">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav fs-0">
					<li><a href="JavaScript:void(0)">Smart City</a>
						<ul class="dropdown">
						<li><a href="JavaScript:void(0)">Bandung Profile</a>
						<ul class="dropdown">
							<li><a href="<?php echo base_url();?>index.php/homepage">Bandung City Profile</a></li>
							<li><a href="<?php echo base_url();?>index.php/not_found">Bandung City on Slide</a></li>
							<li><a href="#">Bandung City Dashboard</a></li>
						</ul>
						</li>
						<li><a href="#">About BSC</a></li>
						<li><a href="#">BSC Logo Philosophy</a></li>
						<li><a href="#">Smart City Programs</a></li>
						<li><a href="#">Emergency Information</a></li>
						<li><a href="#">Smart City Technology</a></li>
						<li><a href="#">Infographic</a></li>
						</ul>
					</li>
					<li><a href="JavaScript:void(0)">Social</a>
						<ul class="dropdown">
						<li><a href="<?php echo base_url();?>index.php/forum">Badami Forum</a></li>
						<li><a href="#">eBook</a></li>
						<li><a href="#">Bandung Web</a></li>
						<li><a href="#">Event</a></li>
						<li><a href="#">Video</a></li>
						<li><a href="#">Contact Us</a></li>
						</ul>
					</li>
					<li><a href="JavaScript:void(0)">OPD</a>
						<ul class="dropdown">
						<li><a href="#">Governance</a></li>
						<li><a href="#">Branding</a></li>
						<li><a href="#">Economy</a></li>
						<li><a href="#">Living</a></li>
						<li><a href="#">Society</a></li>
						<li><a href="#">Environment</a></li>
						</ul>
					</li>
					</ul>
					<ul class="navbar-nav fs-0 ml-lg-auto">
						<li class="text-center">
						<a class="pl-3 pl-lg-1 d-inline-block" data-toggle="modal" data-target="#myModal">
							Login
						</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>

	<div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-sm">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title">Please log in here</h5>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        <div class="modal-body">
	        <div class="background-11 radius-secondary">
				<form class="text-left" action="<?php echo base_url() ?>index.php/registration/login" method="POST">
				<div class="row align-items-center">
					<div class="col-12">
						<div class="input-group">
						<div class="input-group-addon background-11 fs-2">
							<span class="ion-ios-person-outline"></span>
						</div>
						<input class="form-control background-white" type="text" name="email" placeholder="Email" aria-label="Text input with dropdown button" required>
						</div>
					</div>
					<div class="col-12 mt-2 mt-sm-4">
						<div class="input-group">
						<div class="input-group-addon background-11 fs-2">
							<span class="ion-ios-locked-outline"></span>
						</div>
						<input class="form-control background-white" name="password" type="Password" placeholder="Password" aria-label="Text input with dropdown button" required>
						</div>
					</div>
					<div class="col-12 mt-2 mt-sm-2">
						<h6 class="text-right"><a href="#" class="color-info fs--1">Forgot Password?</a></h6>
						<button class="btn btn-info col-md-12" type="submit">Login</button>
					</div>
				</div>
				<div class="row align-items-center mt-1">
					<div class="col-6 align-items-center">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox">
							<span class="color-7 fs--1">Remember Me</span>
						</label>
					</div>
				</div>
				</form>
			</div>
	        </div>
	        <div class="modal-footer">
	        <div class="background-11 radius-secondary">
	        	<form>
	        		<div class="row align-items-center">
					<div class="col-12 align-items-center">
						<h5 class="color-primary">Or Log in with</a></h5>
					</div>
					<div class="col-12 align-items-center">
						<button class="btn btn-icon btn-google-plus btn-icon-left col-md-12">
							<span class="fa fa-google-plus"></span>	Google+
						</button>
					</div>
					<div class="col-12 align-items-center mt-3 mt-sm-3">
						<button class="btn btn-icon btn-facebook btn-icon-left col-md-12">
							<span class="fa fa-facebook"></span> Facebook
						</button>
					</div>
					<div class="col-12 align-items-center mt-3 mt-sm-3">
						<h6 class="text-left"><a class="color-primary fs--1">Don't have an account? Please register</a></h6>
						<a class="btn btn-icon btn-outline-info btn-icon-left col-md-12" href="<?php echo base_url();?>index.php/registration">
							<span class="fa fa-gitlab"></span> Register
						</a>
					</div>
				</div>
	        	</form>
	        </div>
	        </div>
	      </div>
	    </div>
	</div>