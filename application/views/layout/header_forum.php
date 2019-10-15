<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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

<!-- Bootstrap -->
<link href="<?php echo base_url();?>assets2/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom -->
<link href="<?php echo base_url();?>assets2/css/custom.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

<!-- fonts -->
<link href="<?php echo base_url();?>http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo base_url();?>assets2/font-awesome-4.0.3/css/font-awesome.min.css">

<!-- CSS STYLE-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets2/css/style.css" media="screen" />

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets2/rs-plugin/css/settings.css" media="screen" />

</head>

<body>

        <div class="container-fluid">

            <!-- Slider -->
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>	
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo base_url();?>assets/images/banner2.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                        </li>
                    </ul>
                </div>
            </div>
            <!-- //Slider -->

            <div class="headernav">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-2 col-xs-4 col-sm-5 col-md-4">
                            <a href="<?php echo base_url();?>index.php/homepage">
                            <img src="<?php echo base_url();?>assets/images/favicons/logo.png" alt=""/></a>
                        </div>
                        <div class="col-lg-2 col-xs-6 col-sm-5 col-md-4">
                            <a href="<?php echo base_url();?>index.php/forum">
                            <h3> Forum Badami</h3>
                            </a>
                        </div>
                        
                            <div class="wrap col-lg-4 search col-md-12">
                                <form action="<?php echo base_url() ?>index.php/forum/search" method="post" class="form">
                                    <div class="pull-left txt">
                                        <input type="text" class="form-control" name="search" placeholder="Search Topics">
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        

                        <?php if (isset($_SESSION['username'])): ?>
                            <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
                            <div class="stnt pull-left">                            
                                <div class="stnt pull-left">                            
                                <form action="<?php echo base_url() ?>index.php/new_topic/" method="post" class="form">
                                    <button class="btn btn-primary">Start New Topic</button>
                                </form>
                            </div>
                            </div>
                            <div class="env pull-left"><i class="fa fa-envelope"></i></div>

                            <div class="avatar pull-left dropdown">
                                <a data-toggle="dropdown" href="#"><img src="<?php echo base_url();?>assets2/images/avatar.jpg" alt="" /></a> <b class="caret"></b>
                                <div class="status green">&nbsp;</div>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">My Profile</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-2" href="#">Inbox</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-3" href="<?php echo base_url() ?>index.php/registration/logout">Log Out</a></li>
                                </ul>
                            </div>        
                            <div class="clearfix"></div>
                        </div> 
                        <?php endif ?>
                    
                    </div>
                </div>
            </div>