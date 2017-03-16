<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header font-thsan font-size-30"> <strong>����</strong> </h1>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">�ѵ����¹���ѡ</div>
      <div class="panel-body">
        <?php
        echo form_open('animal/add_data', array('id' => 'frm_animal'));
		?>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label>�����ѵ������§</label>
              <input class="form-control" name="animal_name" required>
              <p class="help-block">�кت����ѵ������§�ͧ��ҹ</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label>�������ѵ�� </label>
              <select class="form-control" name="animal_type" required>
                <option value="1">�عѢ</option>
                <option value="2">���</option>
                <option value="3">˹�</option>
                <option value="4">��� �</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <label>���ѵ������§</label>
              <label class="radio-inline">
                <input name="sex" id="rdo1" value="1" checked="" type="radio">
                �ȼ�� </label>
              <label class="radio-inline">
                <input name="sex" id="rdo2" value="2" type="radio">
                ������ </label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <label>�����</label>
              <label class="checkbox-inline">
                <input type="checkbox" name="feed1" value="1">
                �������� </label>
              <label class="checkbox-inline">
                <input type="checkbox" name="feed2" value="1">
                ���������� </label>
              <label class="checkbox-inline">
                <input type="checkbox" name="feed3" value="1">
                ����áԹ��� </label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <label>͸Ժ���������</label>
              <textarea class="form-control" rows="3" name="description"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <label>�ٻ</label>
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
					alert('�ѹ�֡���º����','success');
					//unblockUI();
					loadview('<?php echo site_url('animal/index');?>')
				}//end success
		})//end submit ajaxForm
})//end $(function()

</script>