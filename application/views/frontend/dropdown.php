
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header font-thsan font-size-30"><strong>ตัวอย่าง Dropdown Selected จาก Database </strong></h1>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading"> Query ข้อมูลจาก Database </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <form role="form">
            
            
              <div class="form-group">
                <label>Selects</label>
                <select class="form-control">
                  <option>==เลือก==</option>
                  <?php
				  	echo  $dropdown;

				?>
                </select>
              </div>
            </form>
          </div>
          
          <!-- /.col-lg-6 (nested) --> 
          
        </div>
        <!-- /.row (nested) --> 
      </div>
      <!-- /.panel-body --> 
    </div>
  </div>
  
  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading"> Query ข้อมูลจาก Database และ Selected</div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <form role="form">
              <div class="form-group">
                <label>Selects</label>
                <select class="form-control">
                  <option>==เลือก==</option>
                  <?php
				  echo $dropdown2;

				?>
                </select>
              </div>
            </form>
          </div>
          
          <!-- /.col-lg-6 (nested) --> 
          
        </div>
        <!-- /.row (nested) --> 
      </div>
      <!-- /.panel-body --> 
    </div>
  </div>
</div>

<!-------------------------จังหวัด อำเภอ ตำบล-------------------------->

<div class="row">
  <div class="col-lg-4">
    <div class="panel panel-primary">
      <div class="panel-heading">จังหวัด </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <form role="form">
            
            
              <div class="form-group">
                <label>Selects</label>
                <select class="form-control" onchange="get_amphur(this);" id="province">
                  <option>==เลือก==</option>
                  <?php
					echo $province;
				?>
                </select>
              </div>
            </form>
          </div>
          
          <!-- /.col-lg-6 (nested) --> 
          
        </div>
        <!-- /.row (nested) --> 
      </div>
      <!-- /.panel-body --> 
    </div>
  </div>
  
  <div class="col-lg-4">
    <div class="panel panel-primary">
      <div class="panel-heading">อำเภอ </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <form role="form">
            
            
              <div class="form-group">
                <label>Selects</label>
                <select class="form-control" id="amphur" onchange="get_tumbon(this);">
                  <option>==เลือก==</option>
                </select>
              </div>
            </form>
          </div>
          
          <!-- /.col-lg-6 (nested) --> 
          
        </div>
        <!-- /.row (nested) --> 
      </div>
      <!-- /.panel-body --> 
    </div>
  </div>
  
  <div class="col-lg-4">
    <div class="panel panel-primary">
      <div class="panel-heading">ตำบล </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <form role="form">
            
            
              <div class="form-group">
                <label>Selects</label>
                <select class="form-control" id="tumbon">
                  <option>==เลือก==</option>
                </select>
              </div>
            </form>
          </div>
          
          <!-- /.col-lg-6 (nested) --> 
          
        </div>
        <!-- /.row (nested) --> 
      </div>
      <!-- /.panel-body --> 
    </div>
  </div>
  
</div>


<!-------------------------จังหวัด อำเภอ ตำบล-------------------------->

<script>
	function get_amphur(obj)
	{
		var value = $(obj).val();
		$.get( "<?php echo site_url('frontend/get_amphur')?>/"+value, function( data ) 
		{ $("#amphur").html(data); });
	}
	
	function get_tumbon(obj)
	{
		var value = $(obj).val();
		$.get( "<?php echo site_url('frontend/get_tumbon')?>/"+value, function( data ) 
		{ $("#tumbon").html(data); });
	}
	
</script>