<!-- Flashdata -->
<div class="flash-data" data-berhasil="<?= $this->session->flashdata('berhasil'); ?>"></div>
<div class="flash-data" data-gagal="<?= $this->session->flashdata('gagal'); ?>"></div>

<!-- Main content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="card card-primary card-outline">
					<div class="card-header">
						<h5 class="card-title m-0">Dashboard SIPMA Polsek Rajagaluh</h5>
					</div>
					<div class="card-body">
						<h6 class="card-title">Informasi</h6>

						<p class="card-text">Selamat datang di laman Dashboard Admin Sistem Pengaduan Masyarakat (SIPMA) Polsek Rajagaluh, untuk melihat aduan pilih menu <a href="<?= base_url('admin/aduan'); ?>"> Laporan Aduan</a> dan untuk mengatur akun pilih menu <a href="<?= base_url('admin/set_akun'); ?>"> Setting Akun</a>.</p>
					</div>
				</div>
			</div>
			<!-- /.col-md-6 -->
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<script type="text/javascript">
  $(function(){
    const berhasil = $('.flash-data').data('berhasil');
    const gagal = $('.flash-data').data('gagal');

    if ( berhasil ) {
      Swal.fire(
        'Informasi',
        '' + berhasil,
        'success'
        );
    }

    if ( gagal ) {
      Swal.fire(
        'Informasi',
        '' + gagal,
        'error'
        );
    }
  });
</script>