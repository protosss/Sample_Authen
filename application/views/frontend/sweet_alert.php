
<div class="row">
  	<div class="col-lg-12">
    	<h1 class="page-header font-thsan font-size-30"><strong>������ҧ Sweet Alert</strong></h1>
	</div>
</div>

<div class="row">
      <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading"> Block UI  Button</div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                	<button id="btn_alert" type="button" class="btn btn-default">Alert Default</button>
                    <button id="btn_alert2" type="button" class="btn btn-success">Alert Success</button>
                    <button id="btn_alert3" type="button" class="btn btn-warning">Alert Warning</button>
                    <button id="btn_alert4" type="button" class="btn btn-info">Alert Info</button>
                    <button id="btn_alert5" type="button" class="btn btn-danger">Alert Error</button>
                    
                    <br><br>
                    <button id="btn_confirm" type="button" class="btn btn-primary">Confirm</button>
                    <button id="btn_confirm2" type="button" class="btn btn-primary">Confirm 2</button>
                    
              </div>
              <!-- .panel-body --> 
            </div>
      </div>      
           
      
  
</div>


<script>
$(function(){
	
	$('#btn_alert').click(function(e) {
		alert('���ͺ Alert');
    });
		
	$('#btn_alert2').click(function(e) {
        alert('���ͺ Alert','success');
    });
	
	$('#btn_alert3').click(function(e) {
        alert('���ͺ Alert','warning');
    });
	
	$('#btn_alert4').click(function(e) {
        alert('���ͺ Alert','info');
    });
	
	$('#btn_alert5').click(function(e) {
        alert('���ͺ Alert','error');
    });
	
	
	//-----------------------------------------------------
	
	$('#btn_confirm').click(function(e) {
	
		confirm('��س��׹�ѹ�ա����', function (result) {
			if (result) {
				alert('Confirm OK');
			} else {
				console.log('Confirm Cancel');
			}		
		})
	 
	});
	
	$('#btn_confirm2').click(function(e) {
	
		confirm('Are you sure you are sure?', function (result) {
			if (result) {
				alert('Confirm OK');
			} else {
				console.log('Confirm Cancel');
			}		
		})
	 
	});

	
	
});
</script>









