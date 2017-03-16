
<div class="row">
  	<div class="col-lg-12">
    	<h1 class="page-header font-thsan font-size-30"><strong>ตัวอย่าง Report PDF (By mPDF v.5.7 | <a target="_blank" href="http://www.mpdf1.com">http://www.mpdf1.com</a>)</strong></h1>
	</div>
</div>

<div class="row">
      <div class="col-lg-6">
            <div class="panel panel-default">
              <div class="panel-heading"> mPDF</div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                	<button id="btn_pdf" type="button" class="btn btn-primary">PDF 1</button>
                    <button id="btn_pdf2" type="button" class="btn btn-success">PDF 2</button>
                    <button id="btn_pdf3" type="button" class="btn btn-warning">PDF 3</button>
                    <button id="btn_pdf4" type="button" class="btn btn-info">PDF 4</button>
                    
              </div>
              <!-- .panel-body --> 
            </div>    

      </div>   
      
      <div class="col-lg-6">
            <div class="panel panel-default">
              <div class="panel-heading"> Detail</div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                	<code>
                    mPDF การจัด CSS สามารถเพิ่ม Tag &lt;style&gt;&lt;/style&gt; ที่ไฟล์ View body.php <br>
					หรือเพิ่ม Tag style ตัวอย่าง &lt;div style="font-size:16pt; color:#F00;"&gt;รายงาน&lt;/div&gt;
                    </code>
					<br>
					<a target="_blank" href="http://www.thaicreate.com/community/html-to-pdf-and-add-fontthai-mpdf-php.html"> >> การเพิ่มฟอนต์ไทย </a>
					
                    
              </div>
              <!-- .panel-body --> 
            </div>    

      </div>   
         
      
      <div class="col-lg-12">
            
            <div class="panel panel-default">
              <div class="panel-heading"> ตัวอย่างการแสดง PDF ในหน้าเว็บ ใช้ embed tag</div>
              <!-- /.panel-heading -->
              <div class="panel-body">
              		<code>&lt;embed type="application/pdf" width="100%" height="800" src="<?php echo site_url('report_pdf/pdf1');?>"&gt;</code><br><br>
                	<embed type="application/pdf" width="100%" height="800" src="<?php echo site_url('report_pdf/pdf1');?>">                    
              </div>
              <!-- .panel-body --> 
            </div>
            
      </div>   
           
      
  
</div>


<script>
$(function(){
	
	$('#btn_pdf').click(function(e) {
		window.open('<?php echo site_url('report_pdf/pdf1');?>');
    });
		
	$('#btn_pdf2').click(function(e) {
        window.open('<?php echo site_url('report_pdf/pdf2');?>');
    });
	
	$('#btn_pdf3').click(function(e) {
        window.open('<?php echo site_url('report_pdf/pdf3');?>');
    });
	
	$("#btn_pdf4").click(function(e) {
			ajaxPopup('<?php echo site_url('report_pdf/pdf4');?>','1000px','PDF View');			
     });
	
	
});
</script>









