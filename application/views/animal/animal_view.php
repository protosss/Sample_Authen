<?php 
//@header("Content-Type:text/html;Charset=TIS-620");
?>
<!-- DataTables CSS -->
<link href="<?php echo base_url();?>assets/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- DataTables Responsive CSS -->
<link href="<?php echo base_url();?>assets/css/dataTables.responsive.css" rel="stylesheet">

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header font-thsan font-size-30"> <strong>รายการสัตว์น้อยน่ารัก</strong> 
    				
                    <div style="float:right; ">
                    	<a id="btn_add" class="btn btn-success btn-sm" href="#" style="font-size:16px;"><i class="fa fa-plus"></i> เพิ่ม Popup</a>  
                        <a class="btn btn-success btn-sm links" href="<?php echo site_url('animal/add_animal_load');?>"  style="font-size:16px;">
                        			<i class="fa fa-plus"></i>
                                    เพิ่ม LoadAjax
                       </a>
                   </div>		
    </h1>
    <code>หน้านี้แสดงตัวอย่าง - List (datatable) - add - update - delete</code> </div>
</div>
<div class="row">
    <div class="col-lg-12">
            <div class="panel panel-default">
            	<div class="panel-heading"> DataTables Advanced Tables  
                </div>
                  <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>ชื่อสัตว์</th>
                              <th>รูป</th>
                              <th>&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                             //เป็นวิธีที่ผิด เพราะเราไม่ควร Query ที่หน้า View  
                            $query = $this->db->query("SELECT * FROM animals WHERE animals.active_status = '1' ");
                            $i=0;
                            foreach ($query->result() as $row)
                            {
                                $i++;
                                ?>
                            <tr class="odd gradeX"  id="<?php echo $row->animal_id;?>">
                              <td><?php echo $i;?></td>
                              <td><?php echo $row->animal_name;?></td>
                              <td align="center">
                                    <img class="myImg" src="<?php  echo base_url()."uploads/pictures/".$row->picture ?>" width="100" alt="<?php echo $row->animal_name;?>" />
                             </td>
                              <td class="center">
                                    <button id="btn_edit" type="submit" class="btn btn-primary btn_edit btn-sm" data-id="<?php echo $row->animal_id;?>")> แก้ไข</button>
                                    <button id="btn_del" type="submit" class="btn btn-danger btn_del btn-sm"  data-id="<?php echo $row->animal_id;?>"> ลบ </button></td>
                            </tr>
                            <?php
                                                                }
                                                             ?>
                          </tbody>
                        </table>
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
									url:'<?php echo site_url();?>/animal/delete_animal/'+id,
									type:'POST',
									cache:false,
									success:function(data){
										loadview('<?php echo site_url('animal/index');?>')
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
		//alert();
        jQuery.ajax({
                type: 'GET',
                url: '<?php echo site_url();?>/animal/add_animal',
                success: function (data) {
                   // dialog.modal('hide');
                    bootbox.dialog({
                        message: data,
						size: 'large',
                        title: "เพิ่ม",
                        className: "modal-blue"
                    });
                }
            });
    });
	///////--------------------------------------------------------------
	
	$('#dataTables tbody').on( 'click', '.btn_edit', function () {
		var id = $(this).attr('data-id');
        jQuery.ajax({
                type: 'GET',
				url: '<?php echo site_url();?>/animal/update_animal/'+id,
                success: function (data) {
                   // dialog.modal('hide');
                    bootbox.dialog({
                        message: data,
						size: 'large',
                        title: "แก้ไข",
                        className: "modal-blue"
                    });
                }
            });
    });
	///////--------------------------------------------------------------

})
</script> 
