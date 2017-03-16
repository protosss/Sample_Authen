<?php 
$ci =& get_instance(); 

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="windows-874">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $ci->config->item('title_bar');?></title>
    
    <!--Basic Styles-->
    <link href="<?php echo base_url('assets_dashboard/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="<?php echo base_url('assets_dashboard/css/font-awesome.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets_dashboard/css/weather-icons.min.css'); ?>" rel="stylesheet" />
    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!--Beyond styles-->
    <link id="beyond-link" href="<?php echo base_url('assets_dashboard/css/beyond.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets_dashboard/css/demo.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets_dashboard/css/typicons.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets_dashboard/css/animate.min.css'); ?>" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />
    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="<?php echo base_url('assets_dashboard/js/skins.js'); ?>"></script>
    
    
    <!---------------------------------------->
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">      
    <link href="<?php echo base_url('assets/css/jquery-ui.min.css'); ?>" rel="stylesheet"> 
    <link href="<?php echo base_url('assets/css/sb-admin-2.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/thaisanslite.css'); ?>" rel="stylesheet" type="text/css">  
    <link href="<?php echo base_url('assets/css/loading.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/sweetalert.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/css_datepicker.css'); ?>" rel="stylesheet">  
    <link href="<?php echo base_url('assets/css/jquery.timepicker.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/clockpicker.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/animate.min.css'); ?>" rel="stylesheet">
	<!-- Chosen -->
    <link href="<?php echo base_url('assets/css/bootstrap-chosen.css'); ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/theme_modify.css'); ?>" rel="stylesheet" type="text/css">
    
<script>
	var base_url='<?php echo base_url();?>';
	var index_page='<?php echo $ci->config->item('index_page');?>';
      //$(document).ready(function () {
        //change_menu("form/page_first.php","main-ajax-page","","");
        //$('.ajax-load-page').load('form/page_first.php');
      //});
	  
	  
	   $(function() {

        var special = ['reveal', 'top', 'boring', 'perspective', 'extra-pop'];
        // Toggle Nav on Click
        $('.toggle-menu-left').click(function() {
          var transitionClass = $(this).data('transition');
          if ($.inArray(transitionClass, special) > -1) {
            $('body').removeClass();
            $('body').addClass(transitionClass);
          } else {
            $('body').removeClass();
            $('#site-canvas').removeClass();
            $('#site-canvas').addClass(transitionClass);
          }
          $('#site-wrapper').toggleClass('show-nav');
          return false;
        });
      });

    </script>

</head>
<body>


<div id="div_loading" class="preload" style="display: none;">
    <div align="center"> <div class="loader">Loading...</div>  </div>
 </div>
 
 
 
 <div id="site-wrapper">
 
<!-- Navigation -->
<nav class="navbar navbar-default nav-eagle-default navbar-static-top yamm nav-eagle-fixed" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button class="navbar-toggle toggle-menu-left" data-target=".navbar-collapse" data-transition="ease" data-toggle="collapse" type="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url();?>"><img src="<?php echo base_url('assets/images/logo_erp.png'); ?>" width="55" height="55"></a>
       	<span class="navbar-title"><?php echo $ci->config->item('navbar_title');?></span>
    </div>
    <div class="navbar-collapse module-menu">
    </div>
    <div  class="navbar-header " style="position:absolute;top:0;right:0;">
        <ul class="nav nav-eagle navbar-top-links pull-right">
          <li class="dropdown">
              <a class="dropdown-toggle user-login font-thsan" data-toggle="dropdown" href="#">
                <i class="fa fa-user" style="font-size:25px;"></i>
                <span> คุณ<?php echo $username;?></span>
                 <i class="fa fa-caret-down"></i>
              </a>
                <ul class="arraow-up-right dropdown-menu dropdown-user dropdown-menu-eagle">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="<?php echo site_url('authen/logout');?>" ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
          </li>
        </ul>
    </div>
</nav>