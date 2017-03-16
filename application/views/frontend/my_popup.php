

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading"> Basic Form Elements </div>

      <div class="panel-body">
     
        <?php
        echo form_open('animal/update_data', array('id' => 'frm_animal'));
		
		
		
		/*if(!empty($model))
		{
			print_r($model);
		}
		else
		{
			echo "No model";
		}*/
		?>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <label>ชื่อสัตว์เลี้ยง</label>
              <input class="form-control" name="animal_name" required value="<?php echo !empty($model['animal_name'])?$model['animal_name']:"";?>">
              <input type="hidden" value="<?php echo !empty($model['animal_id'])?$model['animal_id']:"";?>" name="animal_id" id="animal_id" />
              <p class="help-block">ระบุชื่อสัตว์เลี้ยงของท่าน</p>
            </div>
          </div>
          
        </div>
        
        
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <label>อธิบายเพิ่มเติม</label>
              <textarea class="form-control" rows="3" name="description"><?php echo !empty($model['description'])?$model['description']:"";?></textarea>
            </div>
          </div>
        </div>
        
        <!--<div class="row">
          <div class="col-lg-12">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div>-->
        <?php
        echo form_close();
		?>
      </div>
      
      
    </div>
  </div>
</div>
<script>



</script>