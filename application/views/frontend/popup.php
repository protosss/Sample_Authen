
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header font-thsan font-size-30"><strong>������ҧ Popup </strong></h1>
    <code>˹�ҹ���ʴ�������ҧ ����繡�� Add - Edit ����� Controller ���ǡѺ View ���ǡѹ �¡�����¡�� function_main.js</code> 
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
			ajaxPopup('<?php echo site_url('frontend/open_popup/add');?>','900px','���ͺ');
			
			
        });
		
		$("#btn_popup2").click(function(e) {
			ajaxPopup('<?php echo site_url('frontend/open_popup/edit/1');?>','500px','���ͺ ������');
			
			
        });
});

</script>