<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Metronic | Admin Dashboard Template</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />      
	<!-- <link href="view/backend/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/> -->
	<link href="view/backend/assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="view/backend/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="view/backend/assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="view/backend/assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="view/backend/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="view/backend/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="view/backend/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link href="view/backend/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
	<link href="view/backend/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
	<link href="view/backend/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
	<link href="view/backend/assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="view/backend/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="view/backend/assets/css/pages/tasks.css" rel="stylesheet" type="text/css" media="screen"/>
	<link rel="shortcut icon" href="favicon.ico" />
</head>

<body class="page-header-fixed" ">

	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container" style="background: #fefffe ">
		<!-- BEGIN SIDEBAR -->
		
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content" style="margin-left: 0">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>Widget Settings</h3>
				</div>
				<div class="modal-body">
					Widget settings form goes here
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN STYLE CUSTOMIZER -->
						<div class="color-panel hidden-phone">
							<div class="color-mode-icons icon-color"></div>
							<div class="color-mode-icons icon-color-close"></div>
							<div class="color-mode">
								<p>THEME COLOR</p>
								<ul class="inline">
									<li class="color-black current color-default" data-style="default"></li>
									<li class="color-blue" data-style="blue"></li>
									<li class="color-brown" data-style="brown"></li>
									<li class="color-purple" data-style="purple"></li>
									<li class="color-grey" data-style="grey"></li>
									<li class="color-white color-light" data-style="light"></li>
								</ul>
								<label>
									<span>Layout</span>
									<select class="layout-option m-wrap small">
										<option value="fluid" selected>Fluid</option>
										<option value="boxed">Boxed</option>
									</select>
								</label>
								<label>
									<span>Header</span>
									<select class="header-option m-wrap small">
										<option value="fixed" selected>Fixed</option>
										<option value="default">Default</option>
									</select>
								</label>
								<label>
									<span>Sidebar</span>
									<select class="sidebar-option m-wrap small">
										<option value="fixed">Fixed</option>
										<option value="default" selected>Default</option>
									</select>
								</label>
								<label>
									<span>Footer</span>
									<select class="footer-option m-wrap small">
										<option value="fixed">Fixed</option>
										<option value="default" selected>Default</option>
									</select>
								</label>
							</div>
						</div>
						<!-- END BEGIN STYLE CUSTOMIZER -->    
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							Thống kê <small> tất cả </small>
						</h3>
						<ul class="breadcrumb">
							
							<li class="pull-right no-text-shadow">
								<div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
									<i class="icon-calendar"></i>
									<span></span>
									<i class="icon-angle-down"></i>
								</div>
							</li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<div id="dashboard">
					<!-- BEGIN DASHBOARD STATS -->
					<div class="row-fluid">
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat blue">
								<div class="visual">
									<i class="icon-comments"></i>
								</div>
								<div class="details">
									<div class="number">
									<?php $count = $this->model->get_all("SELECT * FROM tbl_contact ");
									$i = 0;
											foreach ($count as $row1) {
											   $i ++;
											}
											echo $i;
									?>

									</div>
									<div class="desc">                           
										Phản hồi khách hàng
									</div>
								</div>
								<a class="more" href="#">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>                 
							</div>
						</div>
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat green">
								<div class="visual">
									<i class="icon-shopping-cart"></i>
								</div>
								<div class="details">
									<div class="number"><?php $count = $this->model->get_all("SELECT * FROM tbl_order ");
									$i = 0;
											foreach ($count as $rows) {
											   $i ++;
											}
											echo $i;
									?></div>
									<div class="desc">Hóa Đơn	</div>
								</div>
								<a class="more" href="#">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>                 
							</div>
						</div>
						<div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">
							<div class="dashboard-stat purple">
								<div class="visual">
									<i class="icon-globe"></i>
								</div>
								<div class="details">
									<div class="number"><?php $Tong = $this->model->get_all("SELECT gia FROM tbl_order ");


											$giaT  = 0 ;
											foreach ($Tong as $row ) {
												$giaT = $giaT + $row->gia;
											}
											echo $giaT." Đ ";
									?></div>
									<div class="desc">Tổng Tiền</div>
								</div>
								<a class="more" href="#">
							
								</a>                 
							</div>
						</div>
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat yellow">
								<div class="visual">
									<i class="icon-bar-chart"></i>
								</div>
								<div class="details">
									<div class="number">12,5M$</div>
									<div class="desc">Total Profit</div>
								</div>
								<a class="more" href="#">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>                 
							</div>
						</div>
					</div>
					<!-- END DASHBOARD STATS -->
					<div class="clearfix"></div>
					<div class="row-fluid">
						<div class="span6">
							<!-- BEGIN PORTLET-->
							<div class="portlet solid bordered light-grey">
								<div class="portlet-title">
									<div class="caption"><i class="icon-bar-chart"></i>Site Visits</div>
									<div class="tools">
										<div class="btn-group pull-right" data-toggle="buttons-radio">
											<a href="" class="btn mini">Users</a>
											<a href="" class="btn mini active">Feedbacks</a>
										</div>
									</div>
								</div>
								<div class="portlet-body">
									<div id="site_statistics_loading">
										<img src="view/backend/assets/img/loading.gif" alt="loading" />
									</div>
									<div id="site_statistics_content" class="hide">
										<div id="site_statistics" class="chart"></div>
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
						<div class="span6">
							<!-- BEGIN PORTLET-->
							<div class="portlet solid light-grey bordered">
								<div class="portlet-title">
									<div class="caption"><i class="icon-bullhorn"></i>Activities</div>
									<div class="tools">
										<div class="btn-group pull-right" data-toggle="buttons-radio">
											<a href="" class="btn blue mini active">Users</a>
											<a href="" class="btn blue mini">Orders</a>
										</div>
									</div>
								</div>
								<div class="portlet-body">
									<div id="site_activities_loading">
										<img src="view/backend/assets/img/loading.gif" alt="loading" />
									</div>
									<div id="site_activities_content" class="hide">
										<div id="site_activities" style="height:100px;"></div>
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
							<!-- BEGIN PORTLET-->
							<div class="portlet solid bordered light-grey">
								<div class="portlet-title">
									<div class="caption"><i class="icon-signal"></i>Server Load</div>
									<div class="tools">
										<div class="btn-group pull-right" data-toggle="buttons-radio">
											<a href="" class="btn red mini active">
											<span class="hidden-phone">Database</span>
											<span class="visible-phone">DB</span></a>
											<a href="" class="btn red mini">Web</a>
										</div>
									</div>
								</div>
								<div class="portlet-body">
									<div id="load_statistics_loading">
										<img src="view/backend/assets/img/loading.gif" alt="loading" />
									</div>
									<div id="load_statistics_content" class="hide">
										<div id="load_statistics" style="height:108px;"></div>
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
					</div>
					<div class="clearfix"></div>
					
					<div class="clearfix"></div>
					
					<div class="clearfix"></div>
				
					<div class="clearfix"></div>
				
				</div>
			</div>
			<!-- END PAGE CONTAINER-->    
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
			2013 &copy; Metronic by keenthemes.
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<script src="view/backend/assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="view/backend/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="view/backend/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="view/backend/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="view/backend/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>

	<script src="view/backend/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="view/backend/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="view/backend/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="view/backend/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="view/backend/assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
	<script src="view/backend/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
	<script src="view/backend/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
	<script src="view/backend/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
	<script src="view/backend/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
	<script src="view/backend/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
	<script src="view/backend/assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>  
	<script src="view/backend/assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="view/backend/assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
	<script src="view/backend/assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
	<script src="view/backend/assets/plugins/bootstrap-daterangepicker/date.js" type="text/javascript"></script>
	<script src="view/backend/assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
	<script src="view/backend/assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
	<script src="view/backend/assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
	<script src="view/backend/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
	<script src="view/backend/assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="view/backend/assets/scripts/app.js" type="text/javascript"></script>
	<script src="view/backend/assets/scripts/index.js" type="text/javascript"></script>
	<script src="view/backend/ssets/scripts/tasks.js" type="text/javascript"></script>        
	<!-- END PAGE LEVEL SCRIPTS -->  
	<script>
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins
		   Index.init();
		   Index.initJQVMAP(); // init index page's custom scripts
		   Index.initCalendar(); // init index page's custom scripts
		   Index.initCharts(); // init index page's custom scripts
		   Index.initChat();
		   Index.initMiniCharts();
		   Index.initDashboardDaterange();
		   Index.initIntro();
		   Tasks.initDashboardWidget();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>