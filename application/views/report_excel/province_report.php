
<!-- DataTables CSS -->
<link href="<?php echo base_url();?>assets/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- DataTables Responsive CSS -->
<link href="<?php echo base_url();?>assets/css/dataTables.responsive.css" rel="stylesheet">

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header font-thsan font-size-30"> <strong>ตัวอย่าง Report Excel (By PHPExcel v.1.80 | https://phpexcel.codeplex.com/)</strong> </h1>
  </div>
</div>
<div class="row">
    <div class="col-lg-12">
            <div class="panel panel-default">
            	<div class="panel-heading"> รายชื่อจังหวัด
                		<a id="btn_export" class="btn btn-success btn-sm" href="#"><i class="fa fa-plus"></i> Export Excel</a> 
                      
              </div>
                  <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>PROVINCE_ID</th>
                              <th>PROVINCE_CODE</th>
                              <th>PROVINCE_NAME</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $i=0;
                            foreach ($province as $row)
                            {
								$i++;
                                ?>
                            <tr class="odd gradeX">
                              <td><?php echo $i;?></td>
                              <td><?php echo $row['PROVINCE_ID'];?></td>
                              <td align="center"><?php echo $row['PROVINCE_CODE'];?></td>
                              <td class="center"><?php echo$row['PROVINCE_NAME']; ?></td>
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
	$("#btn_export").click(function(e) {
		window.open('<?php echo site_url('report_excel/get_excel');?>');
    });

})
</script> 
