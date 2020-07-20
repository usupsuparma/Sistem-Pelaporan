  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <!-- Dropdown Menu -->
      <li class="nav-item dropdown dropdown-user">
        <a class="nav-link dropdown-user-link dropdown-toggle" data-toggle="dropdown" href="#">
          <span class="fas fa-user">
            <img src="" alt=""></span>
            <span class="username"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="<?= base_url('admin/set_akun'); ?>" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Setting Akun
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item" id="logout">
            <i class="fas fa-users mr-2"></i> Keluar
          </a>
        </div>
      </li>
    </ul>
  </nav>

  <script type="text/javascript">
    $('#logout').on('click', function(e) {
      e.preventDefault();
      const href = $(this).attr('href');

      Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Akan Keluar dari Sistem Ini",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Logout'
      }).then((result) => {
        if (result.value) {      
          document.location.href = href;
        }
      });
    });
  </script>