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
    <h1 class="page-header font-thsan font-size-30"> <strong>������ҧ  Multiple Loop</strong> </h1>
      <code>���ͺ����觤�Ҩҡ Controller ���ѧ View �� Array �����Ե� ����ҹ��� Foreach...</code>
   </div>
</div>
<div class="row">
    <div class="col-lg-12">
            <div class="panel panel-default">
            	<div class="panel-heading">�ѧ��Ѵ ����� �Ӻ� </div>
                  <div class="panel-body">
                        
                        <p>�ѧ��Ѵ <strong class="text-primary"><?php echo $provice['PROVINCE_NAME'] ?></strong>  �շ����� <strong class="text-primary"><?php echo count($amphur); ?></strong> ����� ��Сͺ仴���</p>

                        <ol>
                        		<?php 
								
								foreach ($amphur as $amphurs)
								{
								?>
                                            <li>����� <strong class="text-primary"><?php echo $amphurs['AMPHUR_NAME']; ?></strong> �շ����� <strong class="text-primary"><?php echo count($tumbon[$amphurs['AMPHUR_ID']]); ?></strong> �Ӻ�</li>
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
