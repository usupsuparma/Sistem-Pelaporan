<!-- Flashdata -->
<div class="flash-data" data-berhasil="<?= $this->session->flashdata('berhasil'); ?>"></div>
<div class="flash-data" data-gagal="<?= $this->session->flashdata('gagal'); ?>"></div>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Form Setting Akun</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form id="form-set" method="POST" action="<?= base_url('admin/proses_set_akun');?>">
            <div class="card-body">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username" value="<?= $user->username; ?>">
              </div>
              <div class="form-group">
                <label for="password">Password Baru</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Isi kolom password ini jika anda ingin melakukan perubahan Password">
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama" value="<?= $user->nama; ?>">
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="button" id="btn-submit" class="btn btn-primary">Ubah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->

<script type="text/javascript">
  $(function(){
    const berhasil = $('.flash-data').data('berhasil');
    const gagal = $('.flash-data').data('gagal');

    if ( berhasil ) {
      Swal.fire(
        'Data Akun',
        'Berhasil ' + berhasil,
        'success'
        );
    }

    if ( gagal ) {
      Swal.fire(
        'Data Akun',
        'Gagal ' + gagal,
        'error'
        );
    }

  $('#btn-submit').on('click', function(e) {
      e.preventDefault();

      Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Mengubah data akun",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ubah'
      }).then((result) => {
        if (result.value) {
          $("#form-set").submit();
        }
      });
    });

  });
</script>