<!--  http://bootstrap-notify.remabledesigns.com/  -->

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header font-thsan font-size-30"><strong>ตัวอย่าง Notifications </strong></h1>
    <code>หน้านี้แสดงตัวอย่าง Notifications</code> 
    </div>
</div>
<div class="row">
    
      <div class="col-lg-12">
      
            <div class="panel panel-default">
              <div class="panel-heading"> Notify Default <?php echo chg_date_th(date('Y-m-d'));?></div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-12">
                        <a id="btn_notify1" class="btn btn-default btn-sm"  href="#">Default</a> 
                        <a id="btn_notify2" class="btn btn-success btn-sm"  href="#">Success</a> 
                        <a id="btn_notify3" class="btn btn-warning btn-sm"  href="#">Warning</a> 
                        <a id="btn_notify4" class="btn btn-danger btn-sm"  href="#">Danger</a> 
                  </div>           
                </div>
              </div>
            </div>
            
      </div>
      
      <div class="col-lg-6">
      
            <div class="panel panel-default">
              <div class="panel-heading"> Notify Top</div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-12">
                        <a id="btn_notify11" class="btn btn-success btn-sm"  href="#">Success Left</a> 
                        <a id="btn_notify22" class="btn btn-warning btn-sm"  href="#">Warning Center</a> 
                        <a id="btn_notify33" class="btn btn-danger btn-sm"  href="#">Danger Right</a> 
                  </div>           
                </div>
              </div>
            </div>
            
      </div>
      
       <div class="col-lg-6">
      
            <div class="panel panel-default">
              <div class="panel-heading"> Notify Bottom</div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-12">
                        <a id="btn_notify111" class="btn btn-success btn-sm"  href="#">Success Left</a> 
                        <a id="btn_notify222" class="btn btn-warning btn-sm"  href="#">Warning Center</a> 
                        <a id="btn_notify333" class="btn btn-danger btn-sm"  href="#">Danger Right</a> 
                  </div>           
                </div>
              </div>
            </div>
            
      </div>
  
</div>
<script>
$(function(){

	//---Notify Default 
	$('#btn_notify1').click(function(){
		notifys('ทดสอบ');
	});
	$('#btn_notify2').click(function(){
		notifys('ทดสอบ','success');
	});
	$('#btn_notify3').click(function(){
		notifys('ทดสอบ','warning');
	});
	$('#btn_notify4').click(function(){
		notifys('ทดสอบ','danger');
	});
	
	//---Notify TOP 
	$('#btn_notify11').click(function(){
		notifys('ทดสอบ', 'success', 'left');
	});
	$('#btn_notify22').click(function(){
		notifys('ทดสอบ', 'warning', 'center');
	});
	$('#btn_notify33').click(function(){
		notifys('ทดสอบ', 'danger', 'right');
	});
	
	//---Notify Bottom 
	$('#btn_notify111').click(function(){
		notifys('ทดสอบ', 'success', 'left','bottom');
	});
	$('#btn_notify222').click(function(){
		notifys('ทดสอบ', 'warning', 'center','bottom');
	});
	$('#btn_notify333').click(function(){
		notifys('ทดสอบ', 'danger', 'right','bottom');
	});



});
</script>