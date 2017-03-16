<?php


?>
<div class="row">
  <div class="col-lg-12">
    <?php
        echo form_open('item_hd/save_item', array('id' => 'frm_item'));
		?>
    <div class="panel panel-info">
      <div class="panel-heading"> Item Head </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label>Item  Numner</label>
              <input type="hidden" value="<?php echo $proc;?>" name="proc" id="proc" />
              <input class="form-control" id="item_number" name="item_number" required value="<?php echo !empty($model['head']['item_number'])?$model['head']['item_number']:"";?>">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label>วันที่</label>
              <input class="form-control datepicker" id="item_date" name="item_date"  data-provide="datepicker" data-date-language="th-th"   required value="<?php echo !empty($model['head']['item_date']) ? chg_date_th($model['head']['item_date']): get_current_th() ;?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <label>รายละเอียด</label>
              <textarea class="form-control " rows="2"  id="item_remark" name="item_remark"><?php echo !empty($model['head']['item_remark'])?$model['head']['item_remark']:"";?></textarea>
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
      <div class="panel-heading"> Item Detail</div>
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
                                  <input type="text"  class="form-control  number readonly item_price" id="item_price" data-code="item_price" data-id="1"  name="item_price[]" required readonly="readonly"  value="<?php echo $detail['item_price'];?>">
                        </div>
            	</td>
                  <td>
                          <div class="form-group">
                                  <input type="text" class="form-control number" id="item_qty" data-code="item_qty" data-id="1"   name="item_qty[]" required onKeyUp="handleEnter(this, event, 0);" onBlur="$(this).val(number_format_num($(this).val(),0))" onFocus="onfocus_format(this);"  value="<?php echo $detail['item_qty'];?>">
                        </div>
            	</td>
                 <td>
                          <div class="form-group">
                                  <input type="text"  class="form-control number readonly"  id="item_amount" data-code="item_amount" data-id="1"   name="item_amount[]" required readonly="readonly" value="<?php echo $detail['item_amount'];?>">
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
                                  <input type="text"  class="form-control  number readonly item_price" id="item_price" data-code="item_price" data-id="1"  name="item_price[]" required readonly="readonly">
                        </div>
            	</td>
                  <td>
                          <div class="form-group">
                                  <input type="text" class="form-control number item_qty" id="item_qty" data-code="item_qty" data-id="1"   name="item_qty[]" required onKeyUp="handleEnter(this, event, 0);" onBlur="$(this).val(number_format_num($(this).val(),0))" onFocus="onfocus_format(this);" >
                        </div>
            	</td>
                 <td>
                          <div class="form-group">
                                  <input type="text"  class="form-control number readonly"  id="item_amount" data-code="item_amount" data-id="1"   name="item_amount[]" required readonly="readonly">
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
                                  <input class="form-control   number readonly " name="item_total"  id="item_total"disabled="disabled">
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
	$("#item_number").attr("readonly",true);
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
		
		
	$("#frm_item").ajaxForm({
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
					loadview('<?php echo site_url('item_hd/item_hd_main');?>')
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
				var item_price = "item_price"+$(obj).attr("data-id")
					var objAutoComplete=  {
							elementKeyUp : {"elementId" :item_code, "fieldName" : "item_code"},
							elementOther : [
														{"showDetail":true,"elementId":item_name,"fieldName":"item_name"},
														{"showDetail":true,"elementId":item_price,"fieldName":"price_per_unit"}
													] };
		AutoCompleteAjax("<?php echo site_url();?>/frontend/get_auto_items",objAutoComplete);
		
		//เมื่อเลือก item แล้ว จะเข้า fnc calc
		$(obj).off("autocompleteselect").on( "autocompleteselect", function( event, ui ) {
			calc();
		});	
				
	}
	
	function calc(){
		//price_per_unit * unit
		var item_total = 0;
		$('.item_price').each(function() {
			
			var sum = 0;
			row = $(this).attr("data-id");
			sum = parseFloat( $("#item_price" + row).val() ) * parseFloat($("#item_qty" + row).val());
			sum = (isNaN(sum) ? 0 : sum);
			
			//console.log(number_format(sum,2));
			$("#item_amount"+row).val(number_format_num(sum,2));
			item_total +=sum;

			
		});
		$("#item_total").val(number_format_num(item_total,2));
		
}



			
</script>