
<!-- DataTables CSS -->
<link href="<?php echo base_url();?>assets/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- DataTables Responsive CSS -->
<link href="<?php echo base_url();?>assets/css/dataTables.responsive.css" rel="stylesheet">


<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header font-thsan font-size-30"><strong>รายการ Item</strong></h1>
    </div>
</div>
<div class="row">
  <div class="col-lg-12">

            <div class="panel panel-default">
            <div class="panel-heading">
                	<a id="btn_add" class="btn btn-success btn-sm" href="#"><i class="fa fa-plus"></i> เพิ่ม</a> 
            </div>
            <div class="panel-body">
                    
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                        <thead> 
                            <tr> 
                            <th width="6%">No</th> 
                            <th width="15%">Item Number</th> 
                            <th width="15%">Item Date</th>
                            <th width="34%">Item Remark</th> 
                            <th width="20%">Sum Amount</th>
                            <th width="10%"></th> 
                            </tr> 
                      </thead> 
                         <tbody> 
                          <?php
                            $i=0;
							$query = $list;
							//print_r($list);
                            foreach ($list as $row)
                            {
                                $i++;
                          ?>
                         <tr class="odd gradeX"  id="<?php echo $row['item_number'];?>"> 
                             <td align="center"><?php echo $i;?>.</td> 
                             <td><?php echo $row['item_number'];?></td> 
                             <td align="center"><?php echo chg_date_th($row['item_date']);?></td> 
                             <td><?php echo $row['item_remark'];?></td> 
                             <td align="right"><?php echo number_format($row['sum_amount'],2);?></td> 
                             <td>
    <!--                         	 <button id="btn_edit" type="submit" class="btn btn-primary btn_edit btn-sm" data-id="<?php echo $row['item_number'];?>"> แก้ไข</button>
                                 <button id="btn_del" type="submit" class="btn btn-danger btn_del btn-sm"  data-id="<?php echo $row['item_number'];?>"> ลบ </button>
    -->                             <div class="btn-group">
                                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            จัดการข้อมูล <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu">
                                            <li id="btn_edit2"><a href="#"  data-id="<?php echo $row['item_number'];?>">แก้ไข</a></li>
                                            <li id="btn_del2"><a href="#" data-id="<?php echo $row['item_number'];?>">ลบ</a></li>
                                         </ul>
                                    </div>
                                    <!--<div class="btn-group">
                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                      </ul>
                                    </div>-->
                              </td>
                         </tr> 
                         <?php }?>
                        </tbody> 
                    </table>
                    
                  <!--  <div align="right"><?php echo $pagination;?></div>-->
                    
            </div>
            </div>        

  </div>
</div>



<script src="<?php echo base_url();?>assets/js/datatables/js/jquery.dataTables.min.js" ></script> 
<script src="<?php echo base_url();?>assets/js/datatables-plugins/dataTables.bootstrap.min.js" ></script> 
<script src="<?php echo base_url();?>assets/js/datatables-responsive/dataTables.responsive.js"></script>
<!--<script src="<?php echo base_url();?>assets/js/bootbox/bootbox.min.js"></script>-->
<script>
$(function(){

	$('#dataTables').DataTable({
            responsive: true
        });

	$('#dataTables tbody').on( 'click', '.btn_del', function () {
		var id = $(this).attr('data-id');
		
		confirm('กรุณายืนยันอีกครั้ง', function (result) {
			if (result) {
				$.ajax({
								url:'<?php echo site_url('item_hd/delete_item');?>/'+id,
								type:'POST',
								cache:false,
								success:function(data){
									loadview('<?php echo site_url('item_hd/item_hd_main');?>')
								}
							})
			} else {
				console.log('Confirm Cancel');
			}		
		})
	});
	
	$("#btn_add").click(function(e) {
		ajaxPopup('<?php echo site_url('item_hd/open_popup/add');?>','900px','เพิ่ม Item');
    });
	///////--------------------------------------------------------------
	
	$('#dataTables tbody').on( 'click', '.btn_edit', function () {
		var id = $(this).attr('data-id');
		ajaxPopup('<?php echo site_url('item_hd/open_popup/edit');?>/'+id,'900px','แก้ไข Item');
    });
	
	/*function fnc_edit(id){
		alert(id);
		//ajaxPopup('<?php echo site_url('item_hd/open_popup/edit');?>/'+id,'900px','แก้ไข Item');
		
	}*/
	
	$("#btn_edit2 a").click(function() {
		var id = $(this).attr('data-id');
		ajaxPopup('<?php echo site_url('item_hd/open_popup/edit');?>/'+id,'900px','แก้ไข Item');
    });
	
	$("#btn_del2 a").click(function() {
		var id = $(this).attr('data-id');
		
		confirm('กรุณายืนยันอีกครั้ง', function (result) {
			if (result) {
				$.ajax({
								url:'<?php echo site_url('item_hd/delete_item');?>/'+id,
								type:'POST',
								cache:false,
								success:function(data){
									loadview('<?php echo site_url('item_hd/item_hd_main');?>')
								}
							})
			} else {
				console.log('Confirm Cancel');
			}		
		})
    });
	
	///////--------------------------------------------------------------

})
</script> 

