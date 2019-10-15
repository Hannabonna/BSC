<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from uxcandy.co/demo/label_pro/preview/demo_1/pages/forms/editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Aug 2019 12:51:57 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Bandung Smart City</title><!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets3/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets3/vendors/css/vendor.addons.css"><!-- endinject -->
    <!-- vendor css for this page -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets3/vendors/summernote/dist/summernote-lite.css"><!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets3/css/shared/style.css"><!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets3/css/demo_1/style.css"><!-- Layout style -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicons/logo.png">
</head>

<body class="header-fixed">
    <!-- partial:../../partials/_header.html -->
    <nav class="t-header">
    	<!-- <img class="img-responsive" src="<?php echo base_url();?>assets3/images/banner2.jpg" alt="slidebg1"  width="1500" height="80"> -->
        <!-- <div class="t-header-brand-wrapper">
        	<a href="<?php echo base_url();?>index.php/homepage">
	        	<img class="logo" src="<?php echo base_url();?>assets/images/favicons/logo.png" alt="">
	        	<img class="logo-mini" src="<?php echo base_url();?>assets/images/favicons/logo.png" alt=""> 
        	</a>
        	<button class="t-header-toggler t-header-desk-toggler d-none d-lg-block">
        	<svg class="logo" viewBox="0 0 200 200">
                    <path class="top" d="
                M 40, 80
                C 40, 80 120, 80 140, 80
                C180, 80 180, 20  90, 80
                C 60,100  30,120  30,120
              "></path>
                    <path class="middle" d="
                M 40,100
                L140,100
              "></path>
                    <path class="bottom" d="
                M 40,120
                C 40,120 120,120 140,120
                C180,120 180,180  90,120
                C 60,100  30, 80  30, 80
              "></path>
            </svg>
            </button>
        </div> -->
        <div class="t-header-content-wrapper">
            <div class="t-header-content">
            <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none"><i class="mdi mdi-menu"></i></button>
                <ul class="nav ml-auto">
                    <li class="nav-item dropdown"><a class="nav-link" href="#" id="notificationDropdown" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-bell-outline mdi-1x"></i></a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="notificationDropdown">
                            <div class="dropdown-header">
                                <h6 class="dropdown-title">Notifications</h6>
                                <p class="dropdown-title-text">You have 4 unread notification</p>
                            </div>
                            <div class="dropdown-body">
                                <div class="dropdown-list">
                                    <div class="icon-wrapper rounded-circle bg-inverse-primary text-primary"><i class="mdi mdi-alert"></i></div>
                                    <div class="content-wrapper"><small class="name">Storage Full</small> <small class="content-text">Server storage almost full</small></div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="icon-wrapper rounded-circle bg-inverse-success text-success"><i class="mdi mdi-cloud-upload"></i></div>
                                    <div class="content-wrapper"><small class="name">Upload Completed</small> <small class="content-text">3 Files uploded successfully</small></div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="icon-wrapper rounded-circle bg-inverse-warning text-warning"><i class="mdi mdi-security"></i></div>
                                    <div class="content-wrapper"><small class="name">Authentication Required</small> <small class="content-text">Please verify your password to continue using cloud services</small></div>
                                </div>
                            </div>
                            <div class="dropdown-footer"><a href="#">View All</a></div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link" href="#" id="messageDropdown" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-message-outline mdi-1x"></i> <span class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span></a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="messageDropdown">
                            <div class="dropdown-header">
                                <h6 class="dropdown-title">Messages</h6>
                                <p class="dropdown-title-text">You have 4 unread messages</p>
                            </div>
                            <div class="dropdown-body">
                                <div class="dropdown-list">
                                    <div class="image-wrapper"><img class="profile-img" src="<?php echo base_url();?>/assets3/images/profile/male/image_1.png" alt="profile image">
                                        <div class="status-indicator rounded-indicator bg-success"></div>
                                    </div>
                                    <div class="content-wrapper"><small class="name">Clifford Gordon</small> <small class="content-text">Lorem ipsum dolor sit amet.</small></div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="image-wrapper"><img class="profile-img" src="<?php echo base_url();?>/assets3/images/profile/female/image_2.png" alt="profile image">
                                        <div class="status-indicator rounded-indicator bg-success"></div>
                                    </div>
                                    <div class="content-wrapper"><small class="name">Rachel Doyle</small> <small class="content-text">Lorem ipsum dolor sit amet.</small></div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="image-wrapper"><img class="profile-img" src="<?php echo base_url();?>/assets3/images/profile/male/image_3.png" alt="profile image">
                                        <div class="status-indicator rounded-indicator bg-warning"></div>
                                    </div>
                                    <div class="content-wrapper"><small class="name">Lewis Guzman</small> <small class="content-text">Lorem ipsum dolor sit amet.</small></div>
                                </div>
                            </div>
                            <div class="dropdown-footer"><a href="#">View All</a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav><!-- partial -->
    <div class="page-body">
        <!-- partial:../../partials/_sidebar.html -->
        <div class="sidebar">
            <div class="user-profile">
                <div class="display-avatar animated-avatar"><img class="profile-img img-lg rounded-circle" src="<?php echo base_url();?>assets/images/portrait-3.jpg" alt="profile image"></div>
                <div class="info-wrapper">
                    <p class="user-name">Allen Merigold</p>
                    <h6 class="display-income">@allenmer</h6>
                </div>
            </div>
            <ul class="navigation-menu">
                <li class="nav-category-divider">MANAGE ACCOUNT</li>
                <li>
                	<a href="#">
	                	<span class="link-title">Profile</span> 
	                	<i class="mdi mdi-gauge link-icon"></i>
                	</a>
                </li>
                <li>
                	<a href="#">
	                	<span class="link-title">Setting</span> 
	                	<i class="mdi mdi-gauge link-icon"></i>
                	</a>
                </li>
            </ul>
        </div>

        <div class="page-content-wrapper">
            <div class="page-content-wrapper-inner">
                <div class="viewport-header">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb has-arrow">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Forum</a></li>
                            <li class="breadcrumb-item active" aria-current="page">New Post</li>
                        </ol>
                    </nav>
                </div>
                <div class="content-viewport">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="grid">
                                <p class="grid-header">Make new post</p>
                                <div class="grid-body">
                                <form action="<?php echo base_url() ?>index.php/new_topic/new_topic" method="POST">
                                	<div class="item-wrapper">
                                        <div class="row mb-3">
                                            <div class="col-md-10 mx-auto">
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                    	<label>Judul</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                    	<input type="text" class="form-control" name="judul" placeholder="Judul Artikel">
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                    	<label>Tanggal</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                    	<input type="date" class="form-control" name="date">
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                    	<label>Kategori</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                    	<select class="custom-select" name="kategori">
                                                            <option selected="selected">Open this select kategori</option>
                                                            <option value="pemerintahan cerdas">Pemerintahan Cerdas</option>
                                                            <option value="branding cerdas">Branding Cerdas</option>
                                                            <option value="ekonomi cerdas">Ekonomi Cerdas</option>
                                                            <option value="pola hidup cerdas">Pola Hidup Cerdas</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                    	<label>Sub Kategori</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                    	<input type="text" class="form-control" name="sub_kategori" placeholder="Sub Kategori">
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                    	<label>Status Artikel</label>
                                                    </div>
                                                    <div class="form-inline col-md-9">
                                                        <div class="radio mb-3">
                                                        	<label class="radio-label mr-4">
                                                        		<input name="status" type="radio" value="publik" >Publik<i class="input-frame"></i>
                                                        	</label>
                                                        </div>
                                                        <div class="radio mb-3">
                                                        	<label class="radio-label">
                                                        		<input name="status" type="radio" value="private">Private<i class="input-frame"></i>
                                                        	</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area">
                                                    	<label>Isi Artikel</label>
                                                    </div>
                                                    <div class="col-md-9 showcase_content_area">
                                                    	<textarea id="summernoteExample" name="konten"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row showcase_row_area">
                                                    <div class="col-md-3 showcase_text_area"></div>
                                                    <div class="col-md-9 showcase_content_area">
                                                    	<button type="submit" class="btn btn-sm btn-primary" style="margin-right: auto;">Submit</button>
                                                    	<button type="button" class="btn btn-sm btn-danger" style="margin-right: auto;">Cancel</button>
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- content viewport ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="row">
                    <div class="col-sm-6 text-center text-sm-right order-sm-1">
                        <!-- <ul class="text-gray">
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul> -->
                    </div>
                    <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0"><small class="text-muted d-block">© 2018 Bandung Smart City. Semua Hak Dilindungi</small></div>
                </div>
            </footer><!-- partial -->
        </div><!-- page content ends -->
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <script type="text/javascript">
    	$(dokumen).ready(function(){
    		$('#summernoteExample').summernote({
    			heigh: "300px",
    			styleWithSpan: false
    		});
    	});
    	function postForm(){
    		$('textarea[name="konten"]').html($('#summernoteExample').code());
    	}
    </script>
    <!-- plugins:js -->
    <script src="<?php echo base_url();?>assets3/vendors/js/core.js"></script>
    <script src="<?php echo base_url();?>assets3/vendors/js/vendor.addons.js"></script><!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="<?php echo base_url();?>assets3/vendors/tinymce/tinymce.min.js"></script>
    <script src="<?php echo base_url();?>assets3/vendors/tinymce/themes/modern/theme.js"></script>
    <script src="<?php echo base_url();?>assets3/vendors/summernote/dist/summernote-lite.min.js"></script>
    <script src="<?php echo base_url();?>assets3/vendors/codemirror/codemirror.js"></script>
    <script src="<?php echo base_url();?>assets3/vendors/codemirror/javascript.js"></script>
    <script src="<?php echo base_url();?>assets3/vendors/codemirror/shell.js"></script>
    <script src="<?php echo base_url();?>assets3/vendors/simplemde/simplemde.min.js"></script><!-- Vendor Js For This Page Ends-->
    <script src="<?php echo base_url();?>assets3/js/script.js"></script>
</body>
<!-- Mirrored from uxcandy.co/demo/label_pro/preview/demo_1/pages/forms/editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Aug 2019 12:52:16 GMT -->

</html>