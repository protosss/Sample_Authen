<?php 
//@header("Content-Type:text/html;Charset=TIS-620");
?>
<!-- DataTables CSS -->
<!--<link href="<?php echo base_url();?>assets/css/dataTables.bootstrap.css" rel="stylesheet">-->
<!-- DataTables Responsive CSS -->
<!--<link href="<?php echo base_url();?>assets/css/dataTables.responsive.css" rel="stylesheet">-->

<div class="row">
  <div class="col-lg-12">
      <code>หน้านี้แสดงตัวอย่าง - List (datatable) - add - update - delete</code> </div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"> DataTables Advanced Tables  <a id="btn_add" class="btn btn-success btn-sm" href="#"><i class="fa fa-plus"></i> เพิ่ม Popup</a> </div>
  <div class="panel-body">
    	<?php
        echo form_open();
		?>
        <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Text Input</label>
                                            <input class="form-control">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Text Input with Placeholder</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>Static Control</label>
                                            <p class="form-control-static">email@example.com</p>
                                        </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>Text area</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Checkboxes</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input value="" type="checkbox">Checkbox 1
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input value="" type="checkbox">Checkbox 2
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input value="" type="checkbox">Checkbox 3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Inline Checkboxes</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">1
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">2
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">3
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Radio Buttons</label>
                                            <div class="radio">
                                                <label>
                                                    <input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">Radio 1
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="optionsRadios" id="optionsRadios2" value="option2" type="radio">Radio 2
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input name="optionsRadios" id="optionsRadios3" value="option3" type="radio">Radio 3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Inline Radio Buttons</label>
                                            <label class="radio-inline">
                                                <input name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked="" type="radio">1
                                            </label>
                                            <label class="radio-inline">
                                                <input name="optionsRadiosInline" id="optionsRadiosInline2" value="option2" type="radio">2
                                            </label>
                                            <label class="radio-inline">
                                                <input name="optionsRadiosInline" id="optionsRadiosInline3" value="option3" type="radio">3
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Selects</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Multiple Selects</label>
                                            <select multiple="" class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <h1>Disabled Form States</h1>
                                    <form role="form">
                                        <fieldset disabled="">
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled input</label>
                                                <input class="form-control" id="disabledInput" placeholder="Disabled input" disabled="" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled select menu</label>
                                                <select id="disabledSelect" class="form-control">
                                                    <option>Disabled select</option>
                                                </select>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">Disabled Checkbox
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Disabled Button</button>
                                        </fieldset>
                                    </form>
                                    <h1>Form Validation States</h1>
                                    <form role="form">
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Input with success</label>
                                            <input class="form-control" id="inputSuccess" type="text">
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Input with warning</label>
                                            <input class="form-control" id="inputWarning" type="text">
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Input with error</label>
                                            <input class="form-control" id="inputError" type="text">
                                        </div>
                                    </form>
                                    <h1>Input Groups</h1>
                                    <form role="form">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input class="form-control" placeholder="Username" type="text">
                                        </div>
                                        <div class="form-group input-group">
                                            <input class="form-control" type="text">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-eur"></i>
                                            </span>
                                            <input class="form-control" placeholder="Font Awesome Icon" type="text">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">$</span>
                                            <input class="form-control" type="text">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group input-group">
                                            <input class="form-control" type="text">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
        <?php
        echo form_close();
		?> 
  </div>
  </div>
  </div>
</div>

<script src="<?php echo base_url();?>assets/js/bootbox/bootbox.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jqueryForm/jquery.form.min.js"></script>
<script>
$(function(){
	$("#frm_caet_add").ajaxForm({
		type:'POST',
		dataType:'html',
		cache:false,
		beforeSend:function(){
			blockUI();
		},
		success:function(data){
			
			bootbox.hideAll();
			bootbox.alert({
				message: "บันทึกเรียบร้อย",
				size: 'small'
			});
			unblockUI();
			loadViewPage("category/index");
		}//end success
	})
})
</script>