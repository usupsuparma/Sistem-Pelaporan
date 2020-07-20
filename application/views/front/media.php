<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('front/head'); ?>
</head>
<body class="hold-transition layout-top-nav">
	<div class="wrapper">

		<!-- Navbar -->
		<?php $this->load->view('front/navbar'); ?>
		<!-- /.navbar -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<?php $this->load->view('front/content_header'); ?>
			<!-- /.content-header -->

			<!-- Main content -->
			<?php $this->load->view($content); ?>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
			<div class="p-3">
				<h5>Title</h5>
				<p>Sidebar content</p>
			</div>
		</aside>
		<!-- /.control-sidebar -->

		<!-- Main Footer -->
		<?php $this->load->view('front/footer'); ?>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->

<?php $this->load->view('front/footerjs'); ?>
</body>
</html>
