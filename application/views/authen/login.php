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
    <title>Login :: <?php echo $ci->config->item('title_bar');?></title>
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
    <style>
	body{
		background-color:#F7F7F7;
		/*background: transparent url(""); */

	}
	</style>
    
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
    
    
    <script src="<?php echo base_url('assets/js/cookie.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.js'); ?>"></script> <!-- http://t4t5.github.io/sweetalert/ -->
	<script src="<?php echo base_url('assets/js/formula_parser.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/function_main.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/function_application.js'); ?>"></script>
    
<script>
	//var  global_path='./';
$(function(){
		
	var form_login=$("#frm_login");
	form_login.validate({
			// Specify validation rules
			rules: {
			  username: {
				required: true
			  },
			  password: {
				required: true
			  }						
			},
			messages: {
			  username: "กรุณากรอก Username",
			  password: "กรอกกรอก Password",
			},
			errorPlacement: function (error, element) {
				error.appendTo($(element).parents('.form-group'));
			},
			submitHandler: function(form) {
								
				$.ajax({
					type:'POST',
					url: form_login.attr('action'),
					data: form_login.serialize(),
					dataType:'json',
					cache:false,
					beforeSend:function(){
						block();
					},
					success:function(data){
						if(data.user_id>0){
							
							//alert(data.user_id);
							location.reload();
						}else{
							alert('username หรือ password ไม่ถูกต้อง','warning');				
							unblock();
						}
					}				
				});//ajax
			
			}//submitHandler
			
	});
	
	
});
</script>    
    
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            
                <div align="center" class="login-panel " style="margin-bottom:5px; ">
                    <img class="img-responsive" src="<?php echo base_url('assets/images/icon_map2.png'); ?>" width="100">
                </div>
            
                <div class="panel panel-default">
                

                
                    <div class="panel-heading">
                        <h3 class="panel-title">กรุณาเข้าสู่ระบบ</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form"  action="<?php echo site_url('authen/check_login');?>" id="frm_login"  method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <!--<a href="main.php" class="btn btn-lg btn-primary btn-block">Login</a>-->
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
