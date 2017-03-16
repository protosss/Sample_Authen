
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header font-thsan font-size-30"><strong>ตัวอย่าง Tabs </strong></h1>
    <code>หน้านี้แสดงตัวอย่าง Tabs แบบ Simple และ Load Ajax</code> </div>
</div>
<div class="row">

  <div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading"> Ajax Tabs </div>
      <!-- /.panel-heading -->
      <div class="panel-body"> 
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="true" class="loadTab"  data-url="<?php echo site_url('frontend/open_popup/add/1');?>" data-href="tab1">Tab1</a> </li>
          <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false" class="loadTab"  data-url="<?php echo site_url('frontend/open_popup/edit/1');?>" data-href="tab2">Tab2</a> </li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane fade active in" id="tab1" style="padding: 10px;">
            <h4>Tab 1</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="tab-pane fade" id="tab2" style="padding: 10px;">
            <h4>Tab 2</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in t qui officia deserunt mollit anim id est laborum.</p>
          </div> 
        </div>
      </div>
      <!-- /.panel-body --> 
    </div>
  </div>
  
   <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading"> Basic Tabs </div>
      <!-- /.panel-heading -->
      <div class="panel-body"> 
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">Home</a> </li>
          <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Profile</a> </li>
          <li class=""><a href="#messages" data-toggle="tab" aria-expanded="false">Messages</a> </li>
          <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Settings</a> </li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane fade active in" id="home">
            <h4>Home Tab</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="tab-pane fade" id="profile">
            <h4>Profile Tab</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="tab-pane fade" id="messages">
            <h4>Messages Tab</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="tab-pane fade" id="settings">
            <h4>Settings Tab</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
      <!-- /.panel-body --> 
    </div>
  </div>
  
</div>
<script>

$(function(){
	

	LoadTab("<?php echo site_url('frontend/open_popup/add/1');?>","tab1")
	
	$(".loadTab").click(function(e) {
		var url = $(this).attr("data-url");
		var tabContentID = $(this).attr("data-href");
        LoadTab(url,tabContentID)
    });

});


function LoadTab(url,tabContentID){
			$("#"+tabContentID).html("");
			jQuery.ajax({
                type: 'GET',
                url: url,
                success: function (data) {
                    // do somethng**
					$("#"+tabContentID).html(data);
                }
            });
	
	}

</script>