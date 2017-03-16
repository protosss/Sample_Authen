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
    <title>Login :: <?php echo $ci->config->item('title_bar');?></title>
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
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/theme_modify.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/login.css'); ?>" rel="stylesheet" type="text/css">
    
    
	 <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery/jquery-1.9.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jqueryUI/jquery-ui-1.12.1.min.js'); ?>"></script>    
    <script src="<?php echo base_url('assets/js/jquery/jquery.validate.js'); ?>"></script> 
    <!-- Time Picker ธรรมดา --> 
    <script src="<?php echo base_url('assets/js/jquery/jquery.timepicker.js'); ?>"></script>  
    <script src="<?php echo base_url('assets/js/clockpicker.js'); ?>"></script>  
    
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap/bootstrap.js'); ?>"></script>
   	<script src="<?php echo base_url('assets/js/bootstrap/bootstrap-datepicker.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap/bootstrap-datepicker.th.js'); ?>"></script>
    <!-- Popup -->
    <script src="<?php echo base_url('assets/js/bootbox/bootbox.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/jqueryForm/jquery.form.min.js');?>"></script>        
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/js/metisMenu/metisMenu.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/sb-admin-2.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.js'); ?>"></script> <!-- http://t4t5.github.io/sweetalert/ -->
    <script src="<?php echo base_url('assets/js/cookie.js'); ?>"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/js/function_main.js'); ?>" charset="tis-620"></script>
    
    
<script>
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
                    <img class="img-responsive" src="<?php echo base_url('assets/images/logo_erp.png'); ?>" width="100">
                </div>
            
                <div class="panel panel-default">                

                
                    <div class="panel-heading">
                        <h3 class="panel-title">กรุณาเข้าสู่ระบบ</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form"  action="<?php echo site_url('authen/check_login');?>" id="frm_login"  method="post">
                            <fieldset>
                                <div class="form-group inner-addon left-addon">
                                	<i class="glyphicon glyphicon-user"></i>
                                    <input class="form-control" placeholder="Username" id="username" name="username" type="text" autofocus required>
                                </div>
                                <div class="form-group inner-addon left-addon">  
                                	<i class="glyphicon glyphicon-lock"></i>
                                    <input class="form-control" placeholder="Password" id="password" name="password" type="password" value="" required>
                                </div>
                               <!-- <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>-->
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                                <!--<a href="<?php echo site_url('frontend');?>" class="btn btn-lg btn-primary btn-block">Login</a>-->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
