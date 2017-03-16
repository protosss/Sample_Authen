
<div class="row">
  	<div class="col-lg-12">
    	<h1 class="page-header font-thsan font-size-30"><strong>ตัวอย่าง Block UI (3 วินาที)</strong></h1>
	</div>
</div>

<div class="row">
      <div class="col-lg-6">
            <div class="panel panel-primary">
              <div class="panel-heading"> Block UI  Button</div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                	<button id="btn_block1" type="button" class="btn btn-outline btn-primary btn-lg btn-block">Block ทั้งหน้า</button>
                    <button id="btn_block2" type="button" class="btn btn-outline btn-primary btn-lg btn-block">Block ID (#show_detail)</button>
                    <button id="btn_block3" type="button" class="btn btn-outline btn-primary btn-lg btn-block">Block ID (#show_data)</button>   
                    
              </div>
              <!-- .panel-body --> 
            </div>
      </div>
      
      <div class="col-lg-6">
            <div class="panel panel-info">
              <div class="panel-heading"><strong> ID #show_data </strong></div>
              <!-- /.panel-heading -->
              <div class="panel-body" id="show_data">
                
                	<div class="w3-padding w3-white notranslate">
                        <table class="table table-bordered">
                        <thead>
                        <tr>
                          <th>Firstname</th>
                          <th>Lastname</th>
                          <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>John</td>
                          <td>Doe</td>
                          <td>john@example.com</td>
                        </tr>
                        <tr>
                          <td>Mary</td>
                          <td>Moe</td>
                          <td>mary@example.com</td>
                        </tr>
                        <tr>
                          <td>July</td>
                          <td>Dooley</td>
                          <td>july@example.com</td>
                        </tr>
                        </tbody>
                        </table>
                      </div>
                
              </div>
              <!-- .panel-body --> 
            </div>
      </div>
      
      
      <div class="col-lg-6">
            <div class="panel panel-green">
              <div class="panel-heading"> Block UI  Button (Custom Message)</div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                	<button id="btn_block11" type="button" class="btn btn-outline btn-primary btn-lg btn-block">Block ทั้งหน้า</button>
                    <button id="btn_block22" type="button" class="btn btn-outline btn-primary btn-lg btn-block">Block ID (#show_detail)</button>
                    <button id="btn_block33" type="button" class="btn btn-outline btn-primary btn-lg btn-block">Block ID (#show_data)</button> 
                    
              </div>
              <!-- .panel-body --> 
            </div>
      </div>
      
      <div class="col-lg-6">
            <div class="panel panel-success">
              <div class="panel-heading"><strong> ID #show_data </strong></div>
              <!-- /.panel-heading -->
              <div class="panel-body" id="show_data2">
                
                	<div class="w3-padding w3-white notranslate">
                        <table class="table table-bordered">
                        <thead>
                        <tr>
                          <th>Firstname</th>
                          <th>Lastname</th>
                          <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>John</td>
                          <td>Doe</td>
                          <td>john@example.com</td>
                        </tr>
                        <tr>
                          <td>Mary</td>
                          <td>Moe</td>
                          <td>mary@example.com</td>
                        </tr>
                        <tr>
                          <td>July</td>
                          <td>Dooley</td>
                          <td>july@example.com</td>
                        </tr>
                        </tbody>
                        </table>
                      </div>
                
              </div>
              <!-- .panel-body --> 
            </div>
      </div>
      
      
      
  
</div>


<script>
$(function(){
	
	$('#btn_block1').click(function(e) {
		block();
        setTimeout(function(){
			unblock();
		}, 3000);
    });
	
	$('#btn_block2').click(function(e) {
        block('#show_detail');
		setTimeout(function(){
			unblock('#show_detail');
		}, 3000);
    });
	
	$('#btn_block3').click(function(e) {
        block('#show_data');
		setTimeout(function(){
			unblock('#show_data');
		}, 3000);
    });
	
	//----------------------------------------------------------------------------------
	
	$('#btn_block11').click(function(e) {
		block(null,'กำลังโหลด...');
        setTimeout(function(){
			unblock();
		}, 3000);
    });
	
	$('#btn_block22').click(function(e) {
        block('#show_detail','กรุณารอสักครู่...');
		setTimeout(function(){
			unblock('#show_detail');
		}, 3000);
    });
	
	$('#btn_block33').click(function(e) {
		block('#show_detail,#show_data2','กรุณารอสักครู่...');        
		setTimeout(function(){
			unblock('#show_detail,#show_data2');
		}, 3000);
    });
	
	
	
	
	
	
});
</script>









