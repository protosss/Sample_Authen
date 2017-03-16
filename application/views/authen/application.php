<style>
.panel-info {
    border: 5px solid #09F transparent !important;;
}
.panel {
    /*background-color: #d9edf7 !important;*/
    border: 5px solid #09F transparent !important;;
    border-radius: 4px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    margin-bottom: 20px;

}
.panel:hover {
	background-color: #F0F0F0;
	/*-webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.52);
	-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.52);
	box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.52);*/
}
li a:hover{
	color:red;
	}
.heading-app{
	/*background-color: #FFF !important;
	border-color: #FFF !important;*/
	border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    padding: 10px 15px;
	}
	
.panel-footer-app {
    background-color: #fff;
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
    border-top: 1px solid #ddd;
    padding: 10px 15px;
}

.free-wall {
	/*margin: 15px;*/
}
.cell {
	/*cursor: move;*/
	position:relative;
	background-color:#f2f2f2;
	height:180px;
}

.default-flat {
	/*width: 150px; 
	height: 150px; */
	display: flex;
	justify-content: center; /* align horizontal */
	align-items: center; /* align vertical */
}

.head-title{
	position:absolute;
	bottom:15px;
	width:100%;
	font-size:27px;
	line-height:1;
}

.margin-bottom-30{
	margin-bottom:30px;
}

.role-detail{
	position:absolute;
	left:0px;
	font-size:27px;
	top:0px;
	padding-top:10px;
	line-height:1;
	width:90%;
	height:100%;

	opacity: 0.0;
    -webkit-transition: all 100ms ease-in-out;
    -moz-transition: all 100ms ease-in-out;
    -ms-transition: all 100ms ease-in-out;
    -o-transition: all 100ms ease-in-out;
    transition: all 100ms ease-in-out;

	-webkit-transform: translate3d(10%,0,0);
	transform: translate3d(10%,0,0);
}

.role-detail a{
	color:#000000 !important;
	/*text-decoration: none !important;*/
	font-weight:bold;

}
.role-detail a:hover{
	color:#333 !important;

}

 .cell:hover > .role-detail {
  background-color: #efefef;
  opacity:0.8;
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
  width:100%;
}

.cover {
	height:80%;
	padding:10px;
}
.cover img {
	width:80px;
}


.cell:hover {
	-webkit-filter: grayscale(100%);
	filter: grayscale(100%);
}


/*.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
  background: #42b078;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  padding: 50px 20px;
}

.hovereffect img {
  display: block;
  position: relative;
  max-width: none;
  width: calc(100% + 20px);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-10px,0,0);
  transform: translate3d(-10px,0,0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.hovereffect:hover img {
  opacity: 0.4;
  filter: alpha(opacity=40);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  overflow: hidden;
  padding: 0.5em 0;
  background-color: transparent;
}

.hovereffect h2:after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: #fff;
  content: '';
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(-100%,0,0);
  transform: translate3d(-100%,0,0);
}

.hovereffect:hover h2:after {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(100%,0,0);
  transform: translate3d(100%,0,0);
}

.hovereffect:hover a, .hovereffect:hover p {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}*/
</style>

<div id="page-wrapper" style=" margin: 0; padding-top: 90px;">

  <div class="row">
		  <div class="layout">
					<div id="freewall" class="free-wall">
                        
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="cell">
								<div class="head-title font-thsan" align="center"><strong>�Է�������ҹ</strong></div>
								<div class="cover default-flat">
									<img class="myImg img-responsive" src="<?php  echo base_url("assets/images/application_icon/books.png"); ?>" />
								</div>
								<div class="col-lg-12 role-detail font-thsan">
										<ul class="list-unstyled">
											<li><a href="<?php echo site_url('frontend/authorize_system'); ?>" >Admin</a></li>
										</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="cell">
								<div class="head-title font-thsan" align="center"><strong>�����</strong></div>
								<div class="cover default-flat">
									<img class="myImg img-responsive" src="<?php  echo base_url("assets/images/application_icon/business-card.png"); ?>" />
								</div>
								<div class="col-lg-12 role-detail font-thsan">
										<ul class="list-unstyled">
											<li><a href="<?php echo site_url('frontend/leave_system'); ?>" >Admin</a></li>
											<li><a href="#" class="text-primary">Employee</a></li>
											<li><a href="#" class="text-primary">Manager</a></li>
											<li><a href="#" class="text-primary">HR</a></li>
										</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="cell">
								<div class="head-title font-thsan" align="center"><strong>�ͧö¹��</strong></div>
								<div class="cover default-flat">
									<img class="myImg img-responsive" src="<?php  echo base_url("assets/images/application_icon/bag.png"); ?>" />
								</div>
								<div class="col-lg-12 role-detail font-thsan">
										<ul class="list-unstyled">
											<li><a href="<?php echo site_url('frontend/car_system'); ?>" >Admin</a></li>
											<li><a href="#" class="text-primary">Employee</a></li>
											<li><a href="#" class="text-primary">Manager</a></li>
											<li><a href="#" class="text-primary">HR</a></li>
										</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="cell">
								<div class="head-title font-thsan" align="center"><strong>�ͧ��ͧ��Ъ��</strong></div>
								<div class="cover default-flat">
									<img class="myImg img-responsive" src="<?php  echo base_url("assets/images/application_icon/beer.png"); ?>" />
								</div>
								<div class="col-lg-12 role-detail font-thsan">
										<ul class="list-unstyled">
											<li><a href="<?php echo site_url('frontend/meeting_room_system'); ?>" >Admin</a></li>
											<li><a href="#" class="text-primary">Employee</a></li>
											<li><a href="#" class="text-primary">Manager</a></li>
											<li><a href="#" class="text-primary">HR</a></li>
										</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="cell">
								<div class="head-title font-thsan" align="center"><strong>���ǻ�Ъ�����ѹ��</strong></div>
								<div class="cover default-flat">
									<img class="myImg img-responsive" src="<?php  echo base_url("assets/images/application_icon/books.png"); ?>" />
								</div>
								<div class="col-lg-12 role-detail font-thsan">
										<ul class="list-unstyled">
											<li><a href="<?php echo site_url('frontend'); ?>" >Admin</a></li>
											<li><a href="#" class="text-primary">Employee</a></li>
											<li><a href="#" class="text-primary">Manager</a></li>
											<li><a href="#" class="text-primary">HR</a></li>
										</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="cell">
								<div class="head-title font-thsan" align="center"><strong>�Դ����ҹ�ؤ��</strong></div>
								<div class="cover default-flat">
									<img class="myImg img-responsive" src="<?php  echo base_url("assets/images/application_icon/computer.png"); ?>" />
								</div>
								<div class="col-lg-12 role-detail font-thsan">
										<ul class="list-unstyled">
											<li><a href="<?php echo site_url('frontend'); ?>" >Admin</a></li>
											<li><a href="#" class="text-primary">Employee</a></li>
											<li><a href="#" class="text-primary">Manager</a></li>
											<li><a href="#" class="text-primary">HR</a></li>
										</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="cell">
								<div class="head-title font-thsan" align="center"><strong>��úѭ</strong></div>
								<div class="cover default-flat">
									<img class="myImg img-responsive" src="<?php  echo base_url("assets/images/application_icon/coffee-biscuit.png"); ?>" />
								</div>
								<div class="col-lg-12 role-detail font-thsan">
										<ul class="list-unstyled">
											<li><a href="<?php echo site_url('frontend'); ?>" >Admin</a></li>
											<li><a href="#" class="text-primary">Employee</a></li>
											<li><a href="#" class="text-primary">Manager</a></li>
											<li><a href="#" class="text-primary">HR</a></li>
										</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="cell">
								<div class="head-title font-thsan" align="center"><strong>�Ѵ����</strong></div>
								<div class="cover default-flat">
									<img class="myImg img-responsive" src="<?php  echo base_url("assets/images/application_icon/calendar.png"); ?>" />
								</div>
								<div class="col-lg-12 role-detail font-thsan">
										<ul class="list-unstyled">
											<li><a href="<?php echo site_url('frontend'); ?>" >Admin</a></li>
											<li><a href="#" class="text-primary">Employee</a></li>
											<li><a href="#" class="text-primary">Manager</a></li>
											<li><a href="#" class="text-primary">HR</a></li>
										</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="cell">
								<div class="head-title font-thsan" align="center"><strong>�Թ��͹</strong></div>
								<div class="cover default-flat">
									<img class="myImg img-responsive" src="<?php  echo base_url("assets/images/application_icon/business-card.png"); ?>" />
								</div>
								<div class="col-lg-12 role-detail font-thsan">
										<ul class="list-unstyled">
											<li><a href="<?php echo site_url('frontend'); ?>" >Admin</a></li>
											<li><a href="#" class="text-primary">Employee</a></li>
											<li><a href="#" class="text-primary">Manager</a></li>
											<li><a href="#" class="text-primary">HR</a></li>
										</ul>
								</div>
							</div>
						</div>
                        
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="cell">
								<div class="head-title font-thsan" align="center"><strong>����Թ</strong></div>
								<div class="cover default-flat">
									<img class="myImg img-responsive" src="<?php  echo base_url("assets/images/application_icon/chair.png"); ?>" />
								</div>
								<div class="col-lg-12 role-detail font-thsan">
										<ul class="list-unstyled">
											<li><a href="<?php echo site_url('frontend'); ?>" >Admin</a></li>
											<li><a href="#" class="text-primary">Employee</a></li>
											<li><a href="#" class="text-primary">Manager</a></li>
											<li><a href="#" class="text-primary">HR</a></li>
										</ul>
								</div>
							</div>
						</div>
                        
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="cell">
								<div class="head-title font-thsan" align="center"><strong>������ҳ</strong></div>
								<div class="cover default-flat">
									<img class="myImg img-responsive" src="<?php  echo base_url("assets/images/application_icon/cell.png"); ?>" />
								</div>
								<div class="col-lg-12 role-detail font-thsan">
										<ul class="list-unstyled">
											<li><a href="<?php echo site_url('frontend'); ?>" >Admin</a></li>
											<li><a href="#" class="text-primary">Employee</a></li>
											<li><a href="#" class="text-primary">Manager</a></li>
											<li><a href="#" class="text-primary">HR</a></li>
										</ul>
								</div>
							</div>
						</div>
                        
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="cell">
								<div class="head-title font-thsan" align="center"><strong>�Ѵ����͡���</strong></div>
								<div class="cover default-flat">
									<img class="myImg img-responsive" src="<?php  echo base_url("assets/images/application_icon/bag.png"); ?>" />
								</div>
								<div class="col-lg-12 role-detail font-thsan">
										<ul class="list-unstyled">
											<li><a href="<?php echo site_url('frontend'); ?>" >Admin</a></li>
											<li><a href="#" class="text-primary">Employee</a></li>
											<li><a href="#" class="text-primary">Manager</a></li>
											<li><a href="#" class="text-primary">HR</a></li>
										</ul>
								</div>
							</div>
						</div>
                        
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="cell">
								<div class="head-title font-thsan" align="center"><strong>�ҹ�ؤ�ҡ�</strong></div>
								<div class="cover default-flat">
									<img class="myImg img-responsive" src="<?php  echo base_url("assets/images/application_icon/business-card.png"); ?>" />
								</div>
								<div class="col-lg-12 role-detail font-thsan">
										<ul class="list-unstyled">
											<li><a href="<?php echo site_url('frontend'); ?>" >Admin</a></li>
											<li><a href="#" class="text-primary">Employee</a></li>
											<li><a href="#" class="text-primary">Manager</a></li>
											<li><a href="#" class="text-primary">HR</a></li>
										</ul>
								</div>
							</div>
						</div>
                        
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 margin-bottom-30">
							<div class="cell">
								<div class="head-title font-thsan" align="center"><strong>������§�����źؤ�ҡ�</strong></div>
								<div class="cover default-flat">
									<img class="myImg img-responsive" src="<?php  echo base_url("assets/images/application_icon/calculator.png"); ?>" />
								</div>
								<div class="col-lg-12 role-detail font-thsan">
										<ul class="list-unstyled">
											<li><a href="<?php echo site_url('frontend'); ?>" >Admin</a></li>
											<li><a href="#" class="text-primary">Employee</a></li>
											<li><a href="#" class="text-primary">Manager</a></li>
											<li><a href="#" class="text-primary">HR</a></li>
										</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
	</div>
  <!-- /.row -->
  
  
<!--<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="http://placehold.it/350x250" alt="">
            <div class="overlay">
                <h2>Effect 12</h2>
				<p> 
					<a href="#">LINK HERE</a>
				</p> 
            </div>
    </div>
</div>-->
  
</div>
<script>
/*var wall = new Freewall("#freewall");
	wall.reset({
		draggable: true,
		selector: '.cell',
		animate: true,
		cellW: 180,
		cellH: 180,
		onResize: function() {
			wall.refresh();
		},
		onBlockMove: function() {
			console.log(this);
		}
	});
	wall.fitWidth();
	// for scroll bar appear;
	$(window).trigger("resize");*/
</script>
