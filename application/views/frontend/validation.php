
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header font-thsan font-size-30"><strong>ตัวอย่าง Validation </strong></h1>
  </div>
</div>
<div class="row">
<div class="col-lg-12">
  <div class="panel panel-primary">
    <div class="panel-heading"> Validation Form </div>
    <div class="panel-body"> <?php echo form_open('', array('id'=>'form_validation'));?>
    
      <div class="row">
      
        <div class="col-lg-6">
        
          <div class="form-group">
            <label>Text Input</label>
            <input name="text_input" class="form-control" id="text_input">
          </div>
          <div class="form-group">
            <label>Number Input</label>
            <input name="number_input" class="form-control" id="number_input" placeholder="Enter text">
          </div>
          <div class="form-group">
            <label>E - mail Input</label>
            <input name="email_input" class="form-control" id="email_input" placeholder="Enter text">
          </div>
          <div class="form-group">
            <label>Selects</label>
            <select name="select_input" class="form-control" id="select_input">
              <option value="">เลือก</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
      	  <div class="form-group">
            <label>File input</label>
            <input type="file">
          </div>
        
        </div>
        
        
        <div class="col-lg-6">
          
          <div class="form-group">
            <label>Text area</label>
            <textarea name="textarea_input" rows="3" class="form-control" id="textarea_input"></textarea>
          </div>
          <div class="form-group">
            <label>Checkboxes</label>
            <div class="checkbox">
              <label>
                <input name="checkbox_input" type="checkbox" id="checkbox_input" value="">
                <span>Checkbox 1</span> </label>
            </div>
          </div>
          <div class="form-group">
            <label>Radio Buttons</label>
            <div class="radio">
              <label>
                <input name="radio_input" id="optionsRadios1" value="option1" type="radio">
                Radio 1 </label>
            </div>
            <div class="radio">
              <label>
                <input name="radio_input" id="optionsRadios2" value="option2" type="radio">
                Radio 2 </label>
            </div>
            <div class="radio">
              <label>
                <input name="radio_input" id="optionsRadios3" value="option3" type="radio">
                Radio 3 </label>
            </div>
          </div>
          
        </div>
        
        
      </div>
      
      <div align="center">
        <button id="btn_save" type="submit" class="btn btn-primary">Submit Button</button>
        <button id="btn_cancel" type="button" class="btn btn-danger">Cancel Button</button>
      </div>
      
      <?php echo form_close();?> </div>
  </div>
</div>
<script type="text/javascript">
$(function(){
	
		
		$('#btn_save').click(function(e) {	
		
			$("#form_validation").validate({
					// Specify validation rules
					rules: {
					  text_input: {
						required: true
					  },
					  number_input: {
						required: true,
						number: true,
					  },
						email_input: {
							required: true,
							email: true,						
						},
						select_input: {
							required: true
						},
						textarea_input: {
							required: true
						},
						checkbox_input: {
							required: true
						},
						radio_input: {
							required: true
						},
						
					},
					messages: {
					  text_input: "กรุณากรอกช่องนี้",
					  number_input: {
						  	required: "กรุณากรอกตัวเลข",
							number: "กรณากรอกตัวเลข",
						},
					  email_input: "กรอกอีเมล์ไม่ถูกต้อง",
					  select_input: "กรุณาเลือก Select",
					  textarea_input: "กรุณากรอก TextArea",
					  checkbox_input: "กรุณาเลือก Checkbox",
					  radio_input: "กรุณาเลือก Radio",
					},
					errorPlacement: function (error, element) {
						error.appendTo($(element).parents('.form-group'));
					},
					submitHandler: function(form) {
										
						swal({
							title: "ยืนยัน",
							text: "กรุณายืนยันอีกครั้ง",
							type: "info", //info warning success
							confirmButtonText: 'ยืนยัน',
							cancelButtonText: 'ยกเลิก',
							showCancelButton: true,
							showLoaderOnConfirm: true
						}, function (isConfirm) {
							 if (isConfirm) {
								 alert('Save OK');
								//fnc_submit();
								//notifys('warning', '555555555', 4000);
								//console.info(111111);
							  } else {
								console.log('Cancel');
							  }			  	
						});
	
					} //submitHandler
			});
			
		});
		
		
	 
});

</script> 
