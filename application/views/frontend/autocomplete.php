<?php 
//@header("Content-Type:text/html;Charset=TIS-620");
?>
<!-- Jquery-UI CSS For Autocomplete -->
<!--<link href="<?php echo base_url();?>assets/js/jqueryUI/jquery-ui.min.css" rel="stylesheet">-->

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header font-thsan font-size-30"> <strong>Autocomplete</strong> </h1>
    <code>การใช้ Autocomplete จะเป็นการเรียกการทำงานจากฟังก์ชันใน function_main โดยการกำหนด Element ID ที่จะทำ Autocomplete แล้วเรียกไปยัง Controller ที่สร้างไว้</code> </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">ตัวอย่าง Autocomplete แบบ Return 2 Values</div>
      <div class="panel-body">
        <?
						echo form_open();
						?>
        <div class="row ">
          <div class="col-lg-6">
            <div class="form-group">
              <label>province_name</label>
              <input class="form-control" id="province_name" name="province_name" placeholder="province_name">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label>province_id</label>
              <input class="form-control" id="province_id" name="province_id" placeholder="province_id" disabled>
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col-lg-6">
            <div class="form-group">
              <label>province_name2 (Show Province ID)</label>
              <input class="form-control" id="province_name2" name="province_name2" placeholder="province_name2">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label>province_id2</label>
              <input class="form-control" id="province_id2" name="province_id2" placeholder="province_id2" disabled>
            </div>
          </div>
        </div>
        <?
						echo form_close();
						?>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">ตัวอย่าง Autocomplete แบบ Return หลาย Values</div>
      <div class="panel-body">
        <?
						echo form_open();
						?>
        <div class="row ">
          <div class="col-lg-6">
            <div class="form-group">
              <label>province_name3</label>
              <input class="form-control" id="province_name3" name="province_name3" placeholder="province_name3">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label>province_id3</label>
              <input class="form-control" id="province_id3" name="province_id3" placeholder="province_id3" disabled>
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col-lg-6">
            <div class="form-group">
              <label>province_code3</label>
              <input class="form-control" id="province_code3" name="province_code3" placeholder="province_code3" disabled>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label>GEO_ID</label>
              <input class="form-control" id="geo_id" name="geo_id" placeholder="geo_id" disabled>
            </div>
          </div>
        </div>
        <?
						echo form_close();
						?>
      </div>
    </div>
  </div>
</div>

<!-------------------------จังหวัด อำเภอ ตำบล-------------------------->

<div class="row">
  <div class="col-lg-4">
    <div class="panel panel-primary">
      <div class="panel-heading">จังหวัด </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <form role="form">
              <div class="form-group">
                  <label>province_name88</label>
                  <input class="form-control" id="province_name88" name="province_name88" placeholder="province_name88">
                  <input class="form-control" id="province_id88" name="province_id88" placeholder="province_id88" disabled>
            </div>
            </form>
          </div>
          
          <!-- /.col-lg-6 (nested) --> 
          
        </div>
        <!-- /.row (nested) --> 
      </div>
      <!-- /.panel-body --> 
    </div>
  </div>
  <div class="col-lg-4">
    <div class="panel panel-primary">
      <div class="panel-heading">อำเภอ </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <form role="form">
              <div class="form-group">
                  <label>amphur_name88</label>
                  <input class="form-control" id="amphur_name88" name="amphur_name88" placeholder="amphur_name88" onfocus="get_amphur()">
                  <input class="form-control" id="amphur_id88" name="amphur_id88" placeholder="amphur_id88" disabled>
            	</div>
            </form>
          </div>
          
          <!-- /.col-lg-6 (nested) --> 
          
        </div>
        <!-- /.row (nested) --> 
      </div>
      <!-- /.panel-body --> 
    </div>
  </div>
  <div class="col-lg-4">
    <div class="panel panel-primary">
      <div class="panel-heading">ตำบล </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <form role="form">
              <div class="form-group">
                  <label>tumbon_name88</label>
                  <input class="form-control" id="tumbon_name88" name="tumbon_name88" placeholder="tumbon_name88" onfocus="get_tumbon();">
                  <input class="form-control" id="tumbon_id88" name="tumbon_id88" placeholder="tumbon_id88" disabled>
            </div>
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

<!-------------------------จังหวัด อำเภอ ตำบล-------------------------->

</div>
<!-- Jquery-UI JS For Autocomplete --> 
<!--<script src="<?php echo base_url();?>assets/js/jqueryUI/jquery-ui-1.12.1.min.js"></script>--> 

<script>
$(function(){
	/****************************************************** ตัวอย่าง Autocomplete แบบ Return 2 Values *******************************************************************/
	AutocompleteReturn2Values("<?php echo site_url('frontend/get_autocompletes');?>","province_name","province_id","PROVINCE_NAME","PROVINCE_CODE",false);
	AutocompleteReturn2Values("<?php echo site_url('frontend/get_autocompletes');?>","province_name2","province_id2","PROVINCE_NAME","PROVINCE_CODE",true);
	
	
	/****************************************************** ตัวอย่าง Autocomplete แบบ Return หลาย Values ****************************************************************/
	var objAutoComplete=  {//=ชื่อพนักงาน
							elementKeyUp : {"elementId" : "province_name3","fieldName" : "province_name"},
													//ชื่อID ช่อง Input ที่จะให้แสดง , ชื่อฟิวส์ที่จะให้แสดงใน Autocomplete  false
							elementOther : [
														{"showDetail":false,"elementId":"province_id3","fieldName":"province_id"},
														{"showDetail":true,"elementId":"province_code3","fieldName":"province_code"},
														{"showDetail":false,"elementId":"geo_id","fieldName":"geo_id"},
													] };
	AutoCompleteAjax("<?php echo site_url();?>/frontend/get_autocompletes_obj",objAutoComplete);
		
		

})

/****************************************************** ตัวอย่าง Autocomplete แบบ จังหวัด อำเภอ ตำบล *******************************************************************/
AutocompleteReturn2Values("<?php echo site_url();?>/frontend/get_auto_province","province_name88","province_id88","PROVINCE_NAME","PROVINCE_ID",false);

function get_amphur()
{
	var province_id  = $("#province_id88").val();
	if(!province_id) alert("กรุณาเลือก province_id88");
	AutocompleteReturn2Values("<?php echo site_url();?>/frontend/get_auto_amphur/"+province_id,"amphur_name88","amphur_id88","AMPHUR_NAME","AMPHUR_ID",false);
}

function get_tumbon()
{
	var amphur_id  = $("#amphur_id88").val();
	if(!amphur_id) alert("กรุณาเลือก amphur_id88");
	AutocompleteReturn2Values("<?php echo site_url();?>/frontend/get_auto_tumbon/"+amphur_id,"tumbon_name88","tumbon_id88","TUMBON_NAME","TUMBON_ID",false);
}

</script> 
