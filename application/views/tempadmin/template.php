<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | JDIH Admin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>template/admin/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>template/admin/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>template/admin/assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>template/admin/assets/vendor/chartist/css/chartist-custom.css">
	<!-- Data tables -->
	<link rel="stylesheet" type="text/css" href=" <?php echo base_url() ?>template/admin/css/jquery.dataTables.css">
    <link href=" <?php echo base_url() ?>template/admin/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>template/admin/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url()?>template/admin/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>template/admin/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url()?>template/admin/assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="<?php echo base_url() ?>template/admin/assets/img/logoadmin24.png" width="100px" alt="L_kudus" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i>
						 /<?php echo $title;  ?></button>
				</div>
	
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url()?>template/admin/assets/img/user.png" class="img-circle" alt="Avatar"> <span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="<?php echo base_url('admin/logout')?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>

					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo base_url('admin/dashboard')?>" 
						class="<?php if($this->uri->segment('1') == 'admin'){echo "active";}?>">
						<i class="fa fa-home fs-5x"></i> <span>Dashboard</span></a></li>

						<li><a href="<?php echo base_url('produkhukum')?>" 
						class="<?php if($this->uri->segment('1') == 'produkhukum'){echo "active";}?>">
						<i class="fa fa-bullhorn fa-5x"></i> <span>Produk Hukum</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->

		<div class="main"> 	
			<div class="main-content">
				<div class="container-fluid">
					<?php include "main_contentadmin.php"; ?>
				</div>
			</div>
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="<?php echo base_url()?>template/admin/assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url()?>template/admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>template/admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url()?>template/admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="<?php echo base_url()?>template/admin/assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="<?php echo base_url()?>template/admin/assets/scripts/klorofil-common.js"></script>
	<script src="<?php echo base_url()?>template/admin/js/jquery.dataTables.js"></script>
	 <script>
      $(document).ready(function() {
       $('#example').DataTable();
      } );
    </script>

</body>

</html>
