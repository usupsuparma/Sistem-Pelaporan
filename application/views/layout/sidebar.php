<?php
  $s1 = $this->uri->segment(1);
  $s2 = $this->uri->segment(2);
  $s3 = $this->uri->segment(3);
  $s3 = $this->uri->segment(4);
?>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin'); ?>" class="brand-link">
      <img src="<?= base_url('assets/'); ?>dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIPMA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('admin'); ?>" class="nav-link <?php if($s1 == 'admin' && $s2 == ''){echo 'active';} ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/aduan'); ?>" class="nav-link <?php if($s1 == 'admin' && $s2 == 'aduan'){echo 'active';} ?>">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Laporan Aduan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/riwayat'); ?>" class="nav-link <?php if($s1 == 'admin' && $s2 == 'riwayat'){echo 'active';} ?>">
              <i class="nav-icon far fa-file"></i>
              <p>
                Riwayat Aduan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/set_akun'); ?>" class="nav-link <?php if($s1 == 'admin' && $s2 == 'set_akun'){echo 'active';} ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Setting Akun
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>