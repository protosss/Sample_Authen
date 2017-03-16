<!-- DataTables CSS -->
<link href="<?php echo base_url();?>assets/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- DataTables Responsive CSS -->
<link href="<?php echo base_url();?>assets/css/dataTables.responsive.css" rel="stylesheet">

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header font-thsan font-size-30"><strong>ตัวอย่าง DataTables </strong></h1>
  </div>
</div>


  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-info">
        <div class="panel-heading"> จังหวัด</div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-province">
            <thead>
              <tr>
                <th>PROVINCE_ID</th>
                <th>PROVINCE_CODE</th>
                <th>PROVINCE_NAME</th>
                <th>GEO_ID</th>
              </tr>
            </thead>
            <tbody>
            <?php 
			foreach($province as $provinces){
				
				
			?>
              <tr class="odd gradeX">
                <td><?php echo $provinces['PROVINCE_ID']; ?></td>
               <td><?php echo $provinces['PROVINCE_CODE']; ?></td>
                <td><?php echo $provinces['PROVINCE_NAME']; ?></td>
                <td><?php echo $provinces['GEO_ID']; ?></td>
              </tr>
              
              <?php
              }
			  ?>
            </tbody>
          </table>
          <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body --> 
      </div>
      <!-- /.panel --> 
    </div>
    <!-- /.col-lg-12 --> 
  </div>
  <!-- /.row -->
  

  <div class="row">
    <div class="col-lg-6">
      <div class="panel panel-info">
        <div class="panel-heading"> Kitchen Sink </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive --> 
        </div>
        <!-- /.panel-body --> 
      </div>
      <!-- /.panel --> 
    </div>
    <!-- /.col-lg-6 -->
    <div class="col-lg-6">
      <div class="panel panel-info">
        <div class="panel-heading"> Basic Table </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive --> 
        </div>
        <!-- /.panel-body --> 
      </div>
      <!-- /.panel --> 
    </div>
    <!-- /.col-lg-6 --> 
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-6">
      <div class="panel panel-info">
        <div class="panel-heading"> Striped Rows </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive --> 
        </div>
        <!-- /.panel-body --> 
      </div>
      <!-- /.panel --> 
    </div>
    <!-- /.col-lg-6 -->
    <div class="col-lg-6">
      <div class="panel panel-info">
        <div class="panel-heading"> Bordered Table </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div class="table-responsive table-bordered">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive --> 
        </div>
        <!-- /.panel-body --> 
      </div>
      <!-- /.panel --> 
    </div>
    <!-- /.col-lg-6 --> 
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-6">
      <div class="panel panel-info">
        <div class="panel-heading"> Hover Rows </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive --> 
        </div>
        <!-- /.panel-body --> 
      </div>
      <!-- /.panel --> 
    </div>
    <!-- /.col-lg-6 -->
    <div class="col-lg-6">
      <div class="panel panel-info">
        <div class="panel-heading"> Context Classes </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr class="success">
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr class="info">
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr class="warning">
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
                <tr class="danger">
                  <td>4</td>
                  <td>John</td>
                  <td>Smith</td>
                  <td>@jsmith</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive --> 
        </div>
        <!-- /.panel-body --> 
      </div>
      <!-- /.panel --> 
    </div>
    <!-- /.col-lg-6 --> 
  </div>
  <!-- /.row --> 
  

<script src="<?php echo base_url();?>assets/js/datatables/js/jquery.dataTables.min.js" ></script> 
<script src="<?php echo base_url();?>assets/js/datatables-plugins/dataTables.bootstrap.min.js" ></script> 
<script src="<?php echo base_url();?>assets/js/datatables-responsive/dataTables.responsive.js"></script> 
<script>
 $(document).ready(function() {
        $('#dataTables-example, #dataTables-province').DataTable({
            responsive: true
        });
    });
</script>