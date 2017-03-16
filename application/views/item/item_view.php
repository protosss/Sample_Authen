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
            <div class="panel-heading"> <a id="btn_add" class="btn btn-success btn-sm" href="#"><i class="fa fa-plus"></i> เพิ่มรายการ </a> </div>
            <div class="panel-body">
            	<div class="row">
                	<div class="col-lg-12" align="left">
                		
                        <!--<a id="btn_edit" class="btn btn-success btn-sm btn_edit" href="#"><i class="fa fa-edit "></i> แก้ไข </a> 
                        <a id="btn_del" class="btn btn-danger btn-sm" href="#"><i class="fa fa-remove"></i> ลบ </a> -->
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-lg-12">
                    
                     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                        <thead> 
                            <tr> 
                            <th width="6%">No</th> 
                            <th>Item Code</th> 
                            <th>Item Name</th> 
                            <th>Price</th> 
                            <th></th> 
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
                         <tr class="odd gradeX"  id="<?php echo $row['item_code'];?>"> 
                         <td><?php echo $i;?>.</td> 
                         <td><?php echo $row['item_code'];?></td> 
                         <td><?php echo $row['item_name'];?></td> 
                         <td align="right"><?php echo number_format($row['price_per_unit'],2);?></td> 
                         <td>
                         	 <button id="btn_edit" type="submit" class="btn btn-primary btn_edit btn-sm" data-id="<?php echo $row['item_id'];?>"> แก้ไข</button>
                             <button id="btn_del" type="submit" class="btn btn-danger btn_del btn-sm"  data-id="<?php echo $row['item_id'];?>"> ลบ </button>
                          </td>
                         </tr> 
                         <?php }?>
                        </tbody> 
                    </table>
                    
                    
                    </div>
               </div>
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

	
	///////--------------------------------------------------------------
	//$(".btn_del").on("click",function(){
	$('#dataTables tbody').on( 'click', '.btn_del', function () {
		var id = $(this).attr('data-id');
		
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
								$.ajax({
									url:'<?php echo site_url();?>/item/delete_item/'+id,
									type:'POST',
									cache:false,
									success:function(data){
										loadview('<?php echo site_url('item/item_main');?>')
									}
							})
						  } 
						  else 
						 {
							console.log('Cancel');
						  }			  	
				});

	})
	///////--------------------------------------------------------------
	
	
	$("#btn_add").click(function(e) {
		ajaxPopup('<?php echo site_url('item/open_popup/add');?>','900px','เพิ่ม Item');
		//alert();
       /* jQuery.ajax({
                type: 'GET',
                url: '<?php echo site_url();?>/item/add_item',
                success: function (data) {
                   // dialog.modal('hide');
                    bootbox.dialog({
                        message: data,
						size: 'large',
                        title: "เพิ่ม",
                        className: "modal-blue"
                    });
                }
            });*/
    });
	///////--------------------------------------------------------------
	
	$('#dataTables tbody').on( 'click', '.btn_edit', function () {
		var id = $(this).attr('data-id');
		ajaxPopup('<?php echo site_url('item/open_popup/edit');?>/'+id,'500px','แก้ไข Item');
        /*jQuery.ajax({
                type: 'GET',
				url: '<?php echo site_url();?>/item/update_item/'+id,
                success: function (data) {
                   // dialog.modal('hide');
                    bootbox.dialog({
                        message: data,
						size: 'large',
                        title: "แก้ไข",
                        className: "modal-blue"
                    });
                }
            });*/
    });
	///////--------------------------------------------------------------

})
</script> 

