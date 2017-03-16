
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header font-thsan font-size-30"><strong>ตัวอย่าง Popup </strong></h1>
    <code>หน้านี้แสดงตัวอย่าง ที่เป็นการ Add - Edit ทีส่งไป Controller เดียวกับ View เดียวกัน โดยการเรียกใช้ function_main.js</code> 
    </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading"> Basic Form Elements </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <form role="form">
              <div class="form-group"> <a id="btn_popup" class="btn btn-success btn-sm"  href="#">Open PopupAjax</a> <a id="btn_popup2" class="btn btn-primary btn-sm" href="#">Edit</a> </div>
            </form>
          </div>
          <!-- /.col-lg-6 (nested) --> 
          
        </div>
        <!-- /.row (nested) --> 
      </div>
      <!-- /.panel-body --> 
    </div>
  </div>
</div>
<script>

$(function(){
		$("#btn_popup").click(function(e) {
            //ajaxPopup(url,size,title);
			ajaxPopup('<?php echo site_url('frontend/open_popup/add');?>','900px','ทดสอบ');
			
			
        });
		
		$("#btn_popup2").click(function(e) {
			ajaxPopup('<?php echo site_url('frontend/open_popup/edit/1');?>','500px','ทดสอบ การแก้ไข');
			
			
        });
});

</script>