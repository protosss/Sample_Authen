<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">Add Item</div>
      <div class="panel-body">
        <?php
        echo form_open('item/add_data', array('id' => 'frm_item'));
		?>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label>Item_code</label>
              <input class="form-control" name="item_code" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label>Item_name</label>
              <input class="form-control" name="item_name" required>
            </div>
          </div>
        </div><div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label>Price</label>
              <input name="price_per_unit" class="form-control number" id="price_per_unit" onkeyup="handleEnter(this, event, 0);" onblur="$(this).val(number_format_num($(this).val(),0))" onfocus="onfocus_format(this);" type="text" required>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
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
		$("#frm_item").ajaxForm({
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
					loadview('<?php echo site_url('item/item_main');?>')
				}//end success
		})//end submit ajaxForm
})//end $(function()

</script>