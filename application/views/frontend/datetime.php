






    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header font-thsan font-size-30"><strong>ตัวอย่าง DateTime </strong></h1>
        </div>
    </div>

		<code>
        สามารถใช้ฟังก์ชันแปลงวันที่ได้จาก helper file : display_helper.php
        </code>
        <br><br>

	<div class="row">
    
        <div class="col-lg-6">

            <div class="panel panel-default">
                    <div class="panel-heading"> Date Input </div>
                    <div class="panel-body">
                    	<div class="row">
                        	
                            <div class="col-lg-12">
                                    
                                    
                                    
                                      <div class="form-group">
                                        <label>Date Input</label>
                                          <input class="form-control datepicker" type="text" 
                                          data-provide="datepicker" data-date-language="th-th" 
                                          value="<?php echo get_current_th();?>">
                                        </div>
                                        
                                        
                                                                                
             
                                        <div align="right">
                                            <button id="btn_save" type="submit" class="btn btn-primary">Submit Button</button>
                                            <button id="btn_cancel" type="button" class="btn btn-danger">Cancel Button</button>
                                        </div>
                                        
                                        
                                </div>
                            
                        </div>
                    </div>
            
            </div>
            
        </div>
        <!-- /.col-lg-6 -->
        
        
        <div class="col-lg-6">
           	
            <div class="panel panel-default">
                    <div class="panel-heading"> Date Input </div>
                    <div class="panel-body">
                    	<div class="row">
                        	
                            <div class="col-lg-12">
                                    
                                    
                                    
                                      <div class="form-inline">
                                          <div class="form-group">
                                            <label for="exampleInputName2">ตั้งแต่วันที่</label>
                                            <input type="text" class="form-control" id="exampleInputName2" readonly value="<?php echo get_current_th();?>" 
                                            data-provide="datepicker" data-date-language="th-th" >
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputEmail2">ถึง</label>
                                            <input type="email" class="form-control" id="exampleInputEmail2" readonly value="<?php echo get_current_th();?>" 
                                            data-provide="datepicker" data-date-language="th-th" >
                                          </div>
                                          
                                    </div>
                                    
                                </div>
                            
                        </div>
                    </div>
            
            </div>
            
        </div>
        <!-- /.col-lg-6 -->
        
        
        
        <div class="col-lg-12">
           	
            <div class="panel panel-default">
                    <div class="panel-heading"> Time Input </div>
                    <div class="panel-body">
                    	<div class="row">
                        	
                            	<div class="col-lg-2">                                    
                                    
                                    <div class="form-group">
                                        <label>Time Input</label>
                                          <input name="time_input" class="form-control time" id="time_input" value="<?php echo date('H:i');?>">
                                        </div>
                                        
                                </div>
                                
                                <div class="col-lg-2">                                    
                                    
                                    <label>Time Input</label>
                                    <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                                   		
                                        <input type="text" class="form-control" value="<?php echo date('H:i');?>">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                                    </div>                                    
                                        
                                </div>
                                
                                <div class="col-lg-2">                                    
                                    
                                    <label>Time Input</label>
                                    <div class="input-group clockpicker" data-placement="right" data-align="top" data-autoclose="true">
                                   		
                                        <input type="text" class="form-control" value="<?php echo date('H:i');?>">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                                    </div>                                    
                                        
                                </div>
                                
                                <div class="col-lg-2">                                    
                                    
                                    <label>Time Input</label>
                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                   		
                                        <input type="text" class="form-control" value="<?php echo date('H:i');?>">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                                    </div>                                    
                                        
                                </div>
                                
                                 <div class="col-lg-2">                                    
                                    
                                    <label>Time Input</label>
                                    <div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
                                   		
                                        <input type="text" class="form-control" value="<?php echo date('H:i');?>">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                                    </div>                                    
                                        
                                </div>
                                
                                
                            
                        </div>
                    </div>
            
            </div>
            
        </div>
        <!-- /.col-lg-6 -->
        
        
        
        

        
    </div>
            
            
            



<script>
$(function(){
	
	$(".time").timepicker({ 
		'timeFormat': 'H:i',
		'setTime': new Date(),
		minTime: '00:00:00',
		maxTime: '23:55:00',
		'step': 5 
	});
	
	
	$('.clockpicker').clockpicker();
                                    
	
});
</script>


