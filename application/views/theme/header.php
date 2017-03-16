 <?php 
$ci =& get_instance(); 

?>
<!doctype html>
<html ng-app="themeApp" ng-controller="themeCtrl">
<head>
	<!-- <base href="http://frontends.ra.com/"> -->
    <meta charset="windows-874">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $ci->config->item('title_bar');?></title>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
	 <link href="<?php echo base_url('assets/css/jquery-ui-1.9.1.custom.min.css'); ?>" rel='stylesheet' /> 
    <link href="<?php echo base_url('assets/css/css_datepicker.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/dataTables.bootstrap.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/dataTables.responsive.css'); ?>" rel="stylesheet" type="text/css">
    
    <link href="<?php echo base_url('assets/css/sb-admin-2.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/thaisanslite.css'); ?>" rel="stylesheet" type="text/css">   
     
    <link href="<?php echo base_url('assets/css/loading.css'); ?>" rel="stylesheet" type="text/css">    
    <link href="<?php echo base_url('assets/css/theme_modify.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/sweetalert.css'); ?>" rel="stylesheet" type="text/css">
    
    
    <script src="<?php echo base_url('assets/js/jquery/jquery.js'); ?>"></script> 
    <script src="<?php echo base_url('assets/js/bootstrap/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap/bootstrap-datepicker.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap/bootstrap-datepicker-thai.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap/bootstrap-datepicker.th.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap/bootstrap-notify.js'); ?>"></script>
    
	<script src="<?php echo base_url('assets/js/jquery/jquery-ui-1.9.1.custom.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery/dataTables.bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery/dataTables.responsive.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery/jquery.validate.js'); ?>"></script>
    
    <!-- Popup -->
    <script src="<?php echo base_url('assets/js/bootbox/bootbox.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/jqueryForm/jquery.form.min.js');?>"></script>     
    
    <script src="<?php echo base_url('assets/js/cookie.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.js'); ?>"></script> <!-- http://t4t5.github.io/sweetalert/ -->
	<script src="<?php echo base_url('assets/js/formula_parser.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/function_main.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/function_application.js'); ?>"></script>
    
    <script>
	var  global_path='./';
	$(function(){
		//alert('xx');
		$('#menu1').trigger('click');
	});
	
	

	</script>    
    
</head>

<body>
 <div id="site-wrapper">
    <!-- Navigation --> 
    <nav class="navbar navbar-default nav-eagle-default navbar-static-top yamm nav-eagle-fixed" role="navigation" style="margin-bottom: 0"  >
        <div class="navbar-header">
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"  ui-sref="home.index"><img src="<?php echo base_url('assets/images/icon_map1.png')?>" width="55" height="55" ></a>
        </div>
        <div class="navbar-collapse module-menu">

            <ul class="nav navbar-nav navbar-nav-eagle font-thsan" ng-controller="menu_top" >
            
            
                <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
              <li ng-class="{active : '{{active_menu_top}}'=='1' }" >
                <a  ui-sref="home.index">
                  <i class="fa fa-home"></i>
                  <div class="text-module">Dashboard</div>
                </a>
              </li>
                <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
              <li class="dropdown" ng-class="{active : '{{active_menu_top}}'=='2' }" >
                <a  ui-sref="table.index">
                  <i class="fa fa-table "></i>
                  <div class="text-module">Tables</div>
                </a>
                <ul class="dropdown-menu dropdown-module-menu arraow-up-left dropdown-menu-eagle">
                    <li>
                      <div class="title-module-dropdown">Module 1</div>
                      <hr>
                      <div style="clear:both;"></div>
                      <div class="yamm-content">
                        <div class="row">
                          <ul class="col-sm-2 list-unstyled">
                            <li><a href="<?php echo site_url('authen/input'); ?>" ><i class="fa fa-building-o"></i>Admin</a></li>
                            <li><a href="#"><i class="fa fa-sitemap"></i> Menu 2 </a></li>
                            <li><a href="#"><i class="fa fa-steam"></i> Menu 3 </a></li>
                            <li><a href="#"><i class="fa fa-taxi"></i> Menu 4 </a></li>
                            <li><a href="#"><i class="fa fa-bitcoin"></i> Menu 5 </a></li>
                            <li><a href="#"><i class="fa fa-history "></i> Menu 6 </a></li>
                          </ul>
                          <ul class="col-sm-2 list-unstyled">
                            <li><a href="#"><i class="fa fa-building-o"></i> Menu 1</a></li>
                            <li><a href="#"><i class="fa fa-sitemap"></i> Menu 2 </a></li>
                            <li><a href="#"><i class="fa fa-steam"></i> Menu 3 </a></li>
                            <li><a href="#"><i class="fa fa-taxi"></i> Menu 4 </a></li>
                            <li><a href="#"><i class="fa fa-bitcoin"></i> Menu 5 </a></li>
                            <li><a href="#"><i class="fa fa-history "></i> Menu 6 </a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                </ul>
              </li>
              <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
              <li class="dropdown"  ng-class="{active : '{{active_menu_top}}'=='3' }">
                <a  ui-sref="textbox.index">
                  <i class="fa fa-pencil-square-o "></i>
                  <div class="text-module">Menu 2</div>
                </a>
                <ul class="dropdown-menu dropdown-module-menu arraow-up-left dropdown-menu-eagle">
                    <li>
                      <div class="title-module-dropdown">TextBox</div>
                      <hr>
                      <div style="clear:both;"></div>
                      <div class="yamm-content">
                        <div class="row">
                          <ul class="col-sm-2 list-unstyled">
                            <li><a href="#"><i class="fa fa-building-o"></i> Menu 1 sssssssssssssdsds</a></li>
                            <li><a href="#"><i class="fa fa-sitemap"></i> Menu 2 </a></li>
                            <li><a href="#"><i class="fa fa-steam"></i> Menu 3 </a></li>
                            <li><a href="#"><i class="fa fa-taxi"></i> Menu 4 </a></li>
                            <li><a href="#"><i class="fa fa-bitcoin"></i> Menu 5 </a></li>
                            <li><a href="#"><i class="fa fa-history "></i> Menu 6 </a></li>
                          </ul>
                          <ul class="col-sm-2 list-unstyled">
                            <li><a href="#"><i class="fa fa-building-o"></i> Menu 1 xxx</a></li>
                            <li><a href="#"><i class="fa fa-sitemap"></i> Menu 2 </a></li>
                            <li><a href="#"><i class="fa fa-steam"></i> Menu 3 </a></li>
                            <li><a href="#"><i class="fa fa-taxi"></i> Menu 4 </a></li>
                            <li><a href="#"><i class="fa fa-bitcoin"></i> Menu 5 </a></li>
                            <li><a href="#"><i class="fa fa-history "></i> Menu 6 </a></li>
                          </ul>
                        </div>
                      </div>
    
                    </li>
                </ul>
              </li>
              <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
              <li   ng-class="{active : '{{active_menu_top}}'=='4' }">
                  <a  ui-sref="button.index">
                    <i class="fa fa-cube"></i>
                    <div class="text-module">Buttons</div>
                  </a>
              </li>
              <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
              <li   ng-class="{active : '{{active_menu_top}}'=='5' }">
                  <a  ui-sref="dialogbox.index">
                    <i class="fa fa-list-alt "></i>
                    <div class="text-module">DialogBox</div>
                  </a>
              </li>
              <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
              <li  ng-class="{active : '{{active_menu_top}}'=='6' }">
                  <a  ui-sref="tab.index">
                    <i class="fa fa-columns"></i>
                    <div class="text-module">Tabs</div>
                  </a>
              </li>
              <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
              <li   ng-class="{active : '{{active_menu_top}}'=='7' }">
                  <a  ui-sref="autocomplete.index">
                  	<i class="fa fa-list-ol   "></i>
                    <div class="text-module">Autocomplete</div>
                  </a>
              </li>
              <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
              
            </ul>
            
        </div>
        <div  class="navbar-header " style="position:absolute;top:0;right:0;">
          <ul class="nav nav-eagle navbar-top-links pull-right font-thsan ">
            <li class="dropdown">
               
               <a class="dropdown-toggle user-login font-thsan" data-toggle="dropdown" href="#">
                  <i class="fa fa-user" style="font-size:25px;"></i>
                  <span>
                    Administrator
                  </span>
                  <i class="fa fa-caret-down"></i>
                </a>
               
                  <ul class="arraow-up-right dropdown-menu dropdown-user dropdown-menu-eagle font-thsan font-size-18">
                      <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                      </li>
                      <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="<?php echo site_url('authen/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                      </li>
                  </ul>
            </li>
        </ul>
    
          <ul class="nav nav-eagle navbar-top-links pull-right" style="display:none">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
          </ul>
    
        </div>
	</nav>










