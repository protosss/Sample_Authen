<?php


?>
<div class="row">
  <div class="col-lg-12">
    <?php
        echo form_open('pr/save_pr', array('id' => 'frm_pr'));
		?>
    <div class="panel panel-info">
      <div class="panel-heading"> PR Head</div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label>PR  Numner</label>
              <input type="hidden" value="<?php echo $proc;?>" name="proc" id="proc" />
              <input class="form-control" id="pr_number" name="pr_number" required value="<?php echo !empty($model['head']['pr_number'])?$model['head']['pr_number']:"";?>">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label>วันที่</label>
              <input class="form-control datepicker" id="pr_date" name="pr_date"  data-provide="datepicker" data-date-language="th-th"   required value="<?php echo !empty($model['head']['pr_date']) ? chg_date_th($model['head']['pr_date']): get_current_th() ;?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <label>รายละเอียด</label>
              <textarea class="form-control " rows="2"  id="description" name="description"><?php echo !empty($model['head']['description'])?$model['head']['description']:"";?></textarea>
            </div>
          </div>
        </div>
        
        <!--<div class="row">
              <div class="col-lg-12">
                <button type="submit" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
            </div>--> 
        
      </div>
    </div>
    <div class="panel panel-info ">
      <!--<div class="panel-heading"> PR Detail</div>-->
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <table width="100%" class="table table-hover" id="detailsItems">
              <thead>
                <tr>
                  <th>Del</th>
                  <th>#</th>
                  <th>item code</th>
                  <th>item name</th>
                  <th>ราคาต่อหน่วย</th>
                  <th>จำนวน</th>
                  <th>รวม</th>
                </tr>
              </thead>
              <tbody>
              
              
                
                
                <?php
                	if($proc=='edit')
					{

						foreach($model['detail'] as $detail){
							
							?>
							
							<tr id="row_1" >
                  <td align="center"><button type="button" class="btn btn-danger  btn-sm remove" title="ลบรายการ" > <i class="fa fa-minus"></i> </button></td>
                  <td>1</td>
                  <td>
                          <div class="form-group">
                                  <input  type="text" class="form-control" id="item_code" data-code="item_code" data-id="1" name="item_code[]" required onfocus="GetItem(this);"  value="<?php echo $detail['item_code'];?>">
                        </div>
            	</td>
                  <td>
                          <div class="form-group">
                                  <input type="text"  class="form-control" id="item_name" data-code="item_name" data-id="1" name="item_name[]" required readonly="readonly" value="<?php echo $detail['item_name'];?>">
                        </div>
            	</td>
                  <td>
                          <div class="form-group">
                                  <input type="text"  class="form-control  number readonly price_per_unit" id="price_per_unit" data-code="price_per_unit" data-id="1"  name="price_per_unit[]" required readonly="readonly"  value="<?php echo $detail['price_per_unit'];?>">
                        </div>
            	</td>
                  <td>
                          <div class="form-group">
                                  <input type="text" class="form-control number unit" id="unit" data-code="unit" data-id="1"   name="unit[]" required onKeyUp="handleEnter(this, event, 0);" onBlur="$(this).val(number_format_num($(this).val(),0))" onFocus="onfocus_format(this);"  value="<?php echo $detail['unit'];?>">
                        </div>
            	</td>
                 <td>
                          <div class="form-group">
                                  <input type="text"  class="form-control number readonly"  id="amount" data-code="amount" data-id="1"   name="amount[]" required readonly="readonly" value="<?php echo $detail['amount'];?>">
                        </div>
            	</td>
                </tr>
                
                <?
						}
						?>
						
                
                
                <?php
				
				
					}
					else
					{
						?>
                        
                        <tr id="row_1">
                  <td align="center"><button type="button" class="btn btn-danger  btn-sm remove" title="ลบรายการ" > <i class="fa fa-minus"></i> </button></td>
                  <td>1</td>
                  <td>
                          <div class="form-group">
                                  <input  type="text" class="form-control" id="item_code" data-code="item_code" data-id="1" name="item_code[]" required onfocus="GetItem(this);" >
                        </div>
            	</td>
                  <td>
                          <div class="form-group">
                                  <input type="text"  class="form-control" id="item_name" data-code="item_name" data-id="1" name="item_name[]" required readonly="readonly">
                        </div>
            	</td>
                  <td>
                          <div class="form-group">
                                  <input type="text"  class="form-control  number readonly price_per_unit" id="price_per_unit" data-code="price_per_unit" data-id="1"  name="price_per_unit[]" required readonly="readonly">
                        </div>
            	</td>
                  <td>
                          <div class="form-group">
                                  <input type="text" class="form-control number unit" id="unit" data-code="unit" data-id="1"   name="unit[]" required onKeyUp="handleEnter(this, event, 0);" onBlur="$(this).val(number_format_num($(this).val(),0))" onFocus="onfocus_format(this);" >
                        </div>
            	</td>
                 <td>
                          <div class="form-group">
                                  <input type="text"  class="form-control number readonly"  id="amount" data-code="amount" data-id="1"   name="amount[]" required readonly="readonly">
                        </div>
            	</td>
                </tr>
                     <?php
						
					}
				?>
              </tbody>
              <tfoot>
                <tr>
                  <td align="center"><button id="add_row" type="button"  class="btn btn-success btn-sm" title="เพิ่มรายการ" > <i class="fa fa-plus"></i> </button></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                          <div class="form-group">
                                  <input class="form-control   number readonly " name="sum_total"  id="sum_total"disabled="disabled">
                        </div>
            	</td>
                </tr>
              </tfoot>
            </table>
            
          </div>
        </div>
      </div>
    </div>
    <div class="row">
              <div class="col-lg-12" align="center">
                <button type="submit" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
            </div>
    <?php
        echo form_close();
	?>
  </div>
</div>
<script>

$(function(){
	update_table();
	
	if('<?php echo $proc;?>'=='edit'){
	$("#pr_number").attr("readonly",true);
	}
	$('#add_row').click(function () {
            var isAllValid = true;
            if (isAllValid) {
                var $newRow = $('#detailsItems tbody tr:first').clone().removeAttr('id');
                //Set input is null
				$newRow.find(".date").datepicker();
				$('input', $newRow).val("");
                $('#detailsItems tbody').append($newRow);
				update_table();
            }

        })

       //remove button click event
    $('#detailsItems').on('click', '.remove', function () {
			var roewCount = $('#detailsItems tbody tr').length;
			if(roewCount<=1){
				alert("ต้องมีอย่างน้อย 1 รายการ");
				}
			else{
				$(this).parents('tr').remove();
				}
			update_table();
        });
		
		
	$('#detailsItems').on('keyup', '.number', function () {
		//$(".number").keyup(function(e) {
            calc();
        });
		
		
	$("#frm_pr").ajaxForm({
				type:'POST',
				dataType:'html',
				cache:false,
				beforeSend:function(){
				//blockUI();
			},
				success:function(data){
					if(data){
						alert(data,'error');
						return false;
					}
					bootbox.hideAll();
					alert('บันทึกเรียบร้อย','success');
					//unblockUI();
					loadview('<?php echo site_url('pr/index');?>')
				}//end success
		})//end submit ajaxForm
});


	function update_table(){
		var i = 0;
				$('#detailsItems tbody tr').each(function() {
					i++;
					$(this).attr("id","row_"+i);
					$(this).find('td:nth-child(2)').html(i+'.');
					
					$('input', this).each(function() {
							if($(this).attr("id"))
							{
								$(this).attr("id",$(this).attr("data-code")+i);
								$(this).attr("data-id",i);
							}
					 });
					
				});

		calc();
	}//END update_table
		
	function GetItem(obj){
				
				var item_code = $(obj).attr("id");
				var item_name = "item_name"+$(obj).attr("data-id")
				var price_per_unit = "price_per_unit"+$(obj).attr("data-id")
					var objAutoComplete=  {
							elementKeyUp : {"elementId" :item_code, "fieldName" : "item_code"},
							elementOther : [
														{"showDetail":true,"elementId":item_name,"fieldName":"item_name"},
														{"showDetail":true,"elementId":price_per_unit,"fieldName":"price_per_unit"}
													] };
		AutoCompleteAjax("<?php echo site_url();?>/frontend/get_auto_items",objAutoComplete);
		
		//เมื่อเลือก item แล้ว จะเข้า fnc calc
		$(obj).off("autocompleteselect").on( "autocompleteselect", function( event, ui ) {
			calc();
		});	
				
	}
	
	function calc(){
		//price_per_unit * unit
		var sum_total = 0;
		$('.price_per_unit').each(function() {
			var sum = 0;
			row = $(this).attr("data-id");
			sum = parseFloat( $("#price_per_unit" + row).val() ) * parseFloat($("#unit" + row).val());
			sum = (isNaN(sum) ? 0 : sum);
			
			//console.log(number_format(sum,2));
			$("#amount"+row).val(number_format_num(sum,2));
			sum_total +=sum;

			
		});
		$("#sum_total").val(number_format_num(sum_total,2));
		
}



			
</script>