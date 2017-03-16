<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header font-thsan font-size-30"> <strong>เพิ่ม</strong> </h1>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">สัตว์น้อยน่ารัก</div>
      <div class="panel-body">
        <?php
        echo form_open('animal/add_data', array('id' => 'frm_animal'));
		?>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label>ชื่อสัตว์เลี้ยง</label>
              <input class="form-control" name="animal_name" required>
              <p class="help-block">ระบุชื่อสัตว์เลี้ยงของท่าน</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label>ประเภทสัตว์ </label>
              <select class="form-control" name="animal_type" required>
                <option value="1">สุนัข</option>
                <option value="2">แมว</option>
                <option value="3">หนู</option>
                <option value="4">อื่น ๆ</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <label>เพศสัตว์เลี้ยง</label>
              <label class="radio-inline">
                <input name="sex" id="rdo1" value="1" checked="" type="radio">
                เพศผู้ </label>
              <label class="radio-inline">
                <input name="sex" id="rdo2" value="2" type="radio">
                เพศเมีย </label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <label>อาหาร</label>
              <label class="checkbox-inline">
                <input type="checkbox" name="feed1" value="1">
                อาหารเม็ด </label>
              <label class="checkbox-inline">
                <input type="checkbox" name="feed2" value="1">
                อาหารเสริม </label>
              <label class="checkbox-inline">
                <input type="checkbox" name="feed3" value="1">
                อาหารกินเล่น </label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <label>อธิบายเพิ่มเติม</label>
              <textarea class="form-control" rows="3" name="description"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <label>รูป</label>
              <input type="file" name="picture" id="picture">
              <div  id="err_upload" style="color:#F00;"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <button type="submit" class="btn btn-success">Save</button>            
            <a class="btn btn-danger links" href="<?php echo site_url('animal/index');?>">Cancel</a>
                                  
          </div>
        </div>
        <?php
        echo form_close();
		?>
      </div>
    </div>
  </div>
</div>

<script>

$(function(){
		$("#frm_animal").ajaxForm({
				type:'POST',
				dataType:'html',
				cache:false,
				beforeSend:function(){
				//blockUI();
			},
				success:function(data){
					if(data){
						//$("#err_upload").html("[Upload File ERROR !!]"+data);
						alert(data,'error');
						return false;
					}
					bootbox.hideAll();
					alert('บันทึกเรียบร้อย','success');
					//unblockUI();
					loadview('<?php echo site_url('animal/index');?>')
				}//end success
		})//end submit ajaxForm
})//end $(function()

</script>