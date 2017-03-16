<?php 
//print_r($provice);

//print_r($amphur);

//print_r($tumbon);
?>
<!-- DataTables CSS -->
<link href="<?php echo base_url();?>assets/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- DataTables Responsive CSS -->
<link href="<?php echo base_url();?>assets/css/dataTables.responsive.css" rel="stylesheet">

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header font-thsan font-size-30"> <strong>ตัวอย่าง  Multiple Loop</strong> </h1>
      <code>ทดสอบการส่งค่าจาก Controller มายัง View เป็น Array หลายมิติ และมานำมา Foreach...</code>
   </div>
</div>
<div class="row">
    <div class="col-lg-12">
            <div class="panel panel-default">
            	<div class="panel-heading">จังหวัด อำเภอ ตำบล </div>
                  <div class="panel-body">
                        
                        <p>จังหวัด <strong class="text-primary"><?php echo $provice['PROVINCE_NAME'] ?></strong>  มีทั้งหมด <strong class="text-primary"><?php echo count($amphur); ?></strong> อำเภอ ประกอบไปด้วย</p>

                        <ol>
                        		<?php 
								
								foreach ($amphur as $amphurs)
								{
								?>
                                            <li>อำเภอ <strong class="text-primary"><?php echo $amphurs['AMPHUR_NAME']; ?></strong> มีทั้งหมด <strong class="text-primary"><?php echo count($tumbon[$amphurs['AMPHUR_ID']]); ?></strong> ตำบล</li>
												<ul>
                                                	<?php 
													foreach ($tumbon[$amphurs['AMPHUR_ID']] as $tumbons)
													{
															?>
                                                            <li><?php echo $tumbons['TUMBON_NAME']; ?></li>
													 		<?php 
                                                     }
                                                      ?>
                                                </ul>
                                <?php 
								}
								?>
                        </ol>
                  </div>
              </div>
      </div>
</div>


<script src="<?php echo base_url('assets/js/datatables/js/jquery.dataTables.min.js');?>" ></script> 
<script src="<?php echo base_url('assets/js/datatables-plugins/dataTables.bootstrap.min.js');?>" ></script> 
<script src="<?php echo base_url('assets/js/datatables-responsive/dataTables.responsive.js');?>"></script>
<!--<script src="<?php echo base_url();?>assets/js/bootbox/bootbox.min.js"></script>-->
