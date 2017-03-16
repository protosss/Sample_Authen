<?php 
//@header("Content-Type:text/html;Charset=TIS-620");
?>
<!-- DataTables CSS -->
<link href="<?php echo base_url();?>assets/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- DataTables Responsive CSS -->
<link href="<?php echo base_url();?>assets/css/dataTables.responsive.css" rel="stylesheet">

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header font-thsan font-size-30"> <strong>ใบเสนอราคา (PR)</strong> 
    <a id="btn_add" class="btn btn-success btn-sm" href="#" style="float:right; font-size:16px;"><i class="fa fa-plus"></i> เพิ่ม</a> 
    </h1>
    
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
            <div class="panel panel-default">
            	<div class="panel-heading">
                		รายการใบเสนอราคา
                </div>
                  <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>PR Number</th>
                              <th>Date</th>
                              <th>Description</th>
                              <th>Sum Amount</th>
                              <th>&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $i=0;
							$query = $list;
                            foreach ($list as $row)
                            {
                                $i++;
                                ?>
                            <tr class="odd gradeX"  id="<?php echo $row['pr_head_id'];?>">
                              <td><?php echo $i;?></td>
                              <td><?php echo $row['pr_number'];?></td>
                              <td align="center"><?php echo chg_date_th($row['pr_date']);?></td>
                              <td align="left"><?php echo $row['description'];?></td>
                              <td align="right"><?php echo number_format($row['sum_amount'],2);?></td>
                              <td class="center">
                              
                              <div class="btn-group">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action <span class="caret"></span>
                              </button>
                                      <ul class="dropdown-menu">
                                                <li><a href="#" class="btn_edit" data-id="<?php echo $row['pr_head_id'];?>">แก้ไข</a></li>
                                            	<li><a href="#" class="btn_del" data-id="<?php echo $row['pr_number'];?>">ลบ</a></li>        
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">ดูข้อมูล</a></li>
                                      </ul>
                            </div>
								<!--
								<button id="btn_edit" type="submit" class="btn btn-primary btn_edit btn-sm" data-id="<?php echo $row['pr_head_id'];?>"> แก้ไข</button>
                                <button id="btn_del" type="submit" class="btn btn-danger btn_del btn-sm"  data-id="<?php echo $row['pr_number'];?>"> ลบ </button>
                                -->
                                
                                </td>
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
		
	///////-----------------------------------------------------------------------------------------------------------	
	$("#btn_add").click(function(e) {
		ajaxPopup('<?php echo site_url('frontend/pr_add/add/1');?>','1200px','บันทึกใบเสนอราคา (PR)');
		});
	///////-----------------------------------------------------------------------------------------------------------
	$('#dataTables tbody').on( 'click', '.btn_edit', function () {
		var id = $(this).attr('data-id');
		ajaxPopup('<?php echo site_url('pr/pr_add/edit');?>/' + id,'1200px','แก้ไขใบเสนอราคา (PR)');
    });
	///////--------------------------------------------------------------
	

	$('#dataTables tbody').on( 'click', '.btn_del', function () {
		var id = $(this).attr('data-id');
		
		confirm('กรุณายืนยันอีกครั้ง', function (result) {
			if (result) {
				$.ajax({
								url:'<?php echo site_url('pr/delete_pr');?>/'+id,
								type:'POST',
								cache:false,
								success:function(data){
									loadview('<?php echo site_url('pr/index');?>')
								}
							})
			} else {
				console.log('Confirm Cancel');
			}		
		})
		
		
		

	})
	///////--------------------------------------------------------------
	
	
	
	
	


})
</script> 
