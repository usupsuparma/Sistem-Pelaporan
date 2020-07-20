<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('layout/head'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?php $this->load->view('layout/navbar'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php $this->load->view('layout/sidebar'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?php $this->load->view('layout/content_header'); ?>
      <!-- /.content-header -->

      <!-- Main content -->
      <?php $this->load->view($content); ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php $this->load->view('layout/footer'); ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <?php $this->load->view('layout/footerjs');?>
</body>
</html>
