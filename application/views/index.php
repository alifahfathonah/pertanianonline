<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin Pertanian</title>
<base href="<?php echo base_url() ?>"/>
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<link href="assets/css/entypo.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/integral-core.css" rel="stylesheet">
<link href="assets/plugins/jvectormap/css/jquery-jvectormap-2.0.3.css" rel="stylesheet">
<link href="assets/css/integral-forms.css" rel="stylesheet">
<link href="assets/css/integral-forms.css" rel="stylesheet">
<link href="assets/plugins/datatables/css/jquery.dataTables.css" rel="stylesheet">
<link href="assets/plugins/datatables/extensions/Buttons/css/buttons.dataTables.css" rel="stylesheet">

</head>
<body>

<!-- Loader Backdrop -->
	<div class="loader-backdrop">           
	  <!-- Loader -->
		<div class="loader">
			<div class="bounce-1"></div>
			<div class="bounce-2"></div>
		</div>
	  <!-- /loader -->
	</div>
<!-- loader backgrop -->
	
<!-- Page container -->
<div class="page-container">

	<!-- Page Sidebar -->
	<div class="page-sidebar">
	
		<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo"><img src="images/kebun.png" alt="ADMIN CV.PUSAKA TANI" title="ADMIN CV.PUSAKA TANI"></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
			<li class="active"><a href="index.php/admin"><i class="icon-gauge"></i><span class="title">BERANDA</span></a></li>
			<!--<li class="has-sub"><a href="collapsed-sidebar.html"><i class="icon-layout"></i><span class="title">DATA PETANI</span></a>
				<ul class="nav collapse">
					<li><a href="admin/lihat_data_petani"><span class="title"><i class="glyphicon glyphicon-list-alt"></i>LIHAT DATA</span></a></li>
					<li><a href="admin/tambah_data_petani"><span class="title"><i class="glyphicon glyphicon-plus-sign"></i>TAMBAH DATA</span></a></li>
				</ul>
			</li> -->
			<li class="has-sub"><a href="panels.html"><i class="icon-newspaper"></i><span class="title">DATA BARANG </span></a>
				<ul class="nav collapse">
					<li><a href="admin/lihat_data_barang"><span class="title"><i class="glyphicon glyphicon-list-alt"></i>LIHAT DATA</span></a></li>
					<li><a href="admin/tambah_data_barang"><span class="title"><i class="glyphicon glyphicon-plus-sign"></i>TAMBAH DATA</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="basic-tables.html"><i class="icon-window"></i><span class="title">KONTAK</span></a>
				<ul class="nav collapse">
					<li><a href="admin/lihat_data_kontak"><span class="title"><i class="glyphicon glyphicon-list-alt"></i>LIHAT DATA</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="form-basic.html"><i class="icon-doc-text"></i><span class="title">SETTING ADMIN</span></a>
				<ul class="nav collapse">
					<li><a href="admin/lihat_data_admin"><span class="title"><i class="glyphicon glyphicon-list-alt"></i>LIHAT DATA</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="form-basic.html"><i class="icon-doc-text"></i><span class="title">KELUAR</span></a>
				<ul class="nav collapse">
					<li><a href="index.php"><span class="title"><i class="glyphicon glyphicon-list-alt"></i>LOGOUT</span></a></li>
				</ul>
			</li>
		</ul>
		<!-- /main navigation -->		
  </div>
  <!-- /page sidebar -->
  
  <!-- Main container -->
  <div class="main-container">
		
  <?php $this->load->view($content); ?>

  	<!-- Row-->
			
			<!-- Footer -->
			<footer class="footer-main"> 
				SyafriBap&copy; 2019  			
			</footer>	
			<!-- /footer -->
	  </div>
	  <!-- /main content -->
 </div>
  <!-- /main container -->
</div>
<!-- /page container -->

<!--Load JQuery-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/metismenu/js/jquery.metisMenu.js"></script>
<script src="assets/plugins/blockui-master/js/jquery-ui.js"></script>
<script src="assets/plugins/blockui-master/js/jquery.blockUI.js"></script>

<!--Knob Charts-->
<script src="assets/plugins/knob/js/jquery.knob.min.js"></script>

<!--Jvector Map-->
<script src="assets/plugins/jvectormap/js/jquery-jvectormap-2.0.3.min.js"></script>
<script src="assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>

<!--ChartJs-->
<script src="assets/plugins/chartjs/js/Chart.min.js"></script>

<!--Morris Charts-->
<script src="assets/plugins/morris/js/raphael-min.js"></script>
<script src="assets/plugins/morris/js/morris.min.js"></script>

<!--Float Charts-->
<script src="assets/plugins/flot/js/jquery.flot.min.js"></script>
<script src="assets/plugins/flot/js/jquery.flot.tooltip.min.js"></script>
<script src="assets/plugins/flot/js/jquery.flot.resize.min.js"></script>
<script src="assets/plugins/flot/js/jquery.flot.pie.min.js"></script>
<script src="assets/plugins/flot/js/jquery.flot.time.min.js"></script>

<!--Functions Js-->
<script src="assets/js/functions.js"></script>

<!--Dashboard Js-->
<script src="assets/js/dashboard.js"></script>

<script src="assets/js/loader.js"></script>

<script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/js/dataTables.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables/js/jszip.min.js"></script>
<script src="assets/plugins/datatables/js/pdfmake.min.js"></script>
<script src="assets/plugins/datatables/js/vfs_fonts.js"></script>
<script src="assets/plugins/datatables/extensions/Buttons/js/buttons.html5.js"></script>
<script src="assets/plugins/datatables/extensions/Buttons/js/buttons.colVis.js"></script>
<script src="assets/plugins/datatables/js/dataTables-script.js"></script>
<script src="assets/js/loader.js"></script>
</body>

</html>
