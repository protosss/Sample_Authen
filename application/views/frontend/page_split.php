
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header font-thsan font-size-30"><strong>ตัวอย่าง Page Split </strong></h1>
    </div>
</div>
<div class="row">

  <div class="col-lg-12">

            <div class="panel panel-default">
            <div class="panel-heading"> Page Split   </div>
            <div class="panel-body">
                <div class="row">
                    
                    <div class="col-lg-12">
                    
                    <table width="100%" class="table table-bordered"> 
                        <thead> 
                            <tr> 
                            <th width="6%">ลำดับ</th> 
                            <th>จังหวัด</th> 
                            </tr> 
                         </thead> 
                         <tbody> 
                         <?php 
						 $i=$start;
						 foreach($result as $f){
							 $i++;
						 ?>
                         <tr> 
                         <td><?php echo $i;?>.</td> 
                         <td><?php echo $f->PROVINCE_NAME;?></td> 
                         </tr> 
                         <?php }?>
                        </tbody> 
                    </table>
                    
                    <div align="right"><?php echo $pagination;?></div>
                    
                    </div>
               </div>
            </div>
            </div>        

  </div>
</div>


