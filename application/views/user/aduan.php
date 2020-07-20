<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h5 class="card-title m-0">Form Aduan</h5>
          </div>
          <form role="form" id="form-tambah" method="post" action="<?= base_url('landing/tambah'); ?>">
            <div class="card-body">
              <h5><i class="fas fa-user"></i> Identitas Pelapor</h5><hr>
              <div class="form-group row">
                <label for="nik_p" class="col-sm-3 col-form-label">NIK <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="text" name="nik_p" class="form-control" id="nik_p" placeholder="Masukkan nik">
                  <small class="text-danger"><?= form_error('nik_p'); ?></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="nama_p" class="col-sm-3 col-form-label">Nama <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="text" name="nama_p" class="form-control" id="nama_p" placeholder="Masukkan nama"><small class="text-danger"><?= form_error('nama_p'); ?></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="alamat_p" class="col-sm-3 col-form-label">Alamat <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="text" name="alamat_p" class="form-control" id="alamat_p" placeholder="Masukkan alamat"><small class="text-danger"><?= form_error('alamat_p'); ?></small> 
                </div>
              </div>
              <div class="form-group row">
                <label for="jk_p" class="col-sm-3 col-form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <select class="form-control" name="jk_p" id="jk_p">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
                  </select><small class="text-danger"><?= form_error('jk_p'); ?></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="nohp_p" class="col-sm-3 col-form-label">No. Hp/ Telp. <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="text" name="nohp_p" class="form-control" id="nohp_p" placeholder="Masukkan no_hp"><small class="text-danger"><?= form_error('nohp_p'); ?></small>
                </div>
              </div><br>
              <h5><i class="fas fa-users"></i> Identitas Korban</h5><hr>
              <div class="form-group row">
                <label for="nama_k" class="col-sm-3 col-form-label">Nama <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="text" name="nama_k" class="form-control" id="nama_k" placeholder="Masukkan nama"><small class="text-danger"><?= form_error('nama_k'); ?></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="alamat_k" class="col-sm-3 col-form-label">Alamat <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="text" name="alamat_k" class="form-control" id="alamat_k" placeholder="Masukkan alamat"><small class="text-danger"><?= form_error('alamat_k'); ?></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="jk_k" class="col-sm-3 col-form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <select class="form-control" name="jk_k" id="jk_k">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
                  </select><small class="text-danger"><?= form_error('jk_k'); ?></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="nohp_k" class="col-sm-3 col-form-label">No. Hp/ Telp. <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="text" name="nohp_k" class="form-control" id="nohp_k" placeholder="Masukkan no_hp"><small class="text-danger"><?= form_error('nohp_k'); ?></small>
                </div>
              </div><br>
              <h5><i class="fas fa-file"></i> Laporan Aduan</h5><hr>
              <div class="form-group row">
                <label for="kategori" class="col-sm-3 col-form-label">Kategori Laporan Aduan <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <select class="form-control" name="kategori" id="kategori">
                    <option value="">Pilih Kategori Laporan Aduan</option>
                    <option value="kekerasan fisik">Kekerasan Fisik</option>
                    <option value="kdrt">Kekerasan Dalam Rumah Tangga</option>
                    <option value="maling">Maling</option>
                    <option value="begal">Begal</option>
                    <option value="pembunuhan">Pembunuhan</option>
                  </select><small class="text-danger"><?= form_error('kategori'); ?></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="tkp" class="col-sm-3 col-form-label">Tempat Kejadian Perkara <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <textarea class="form-control" name="tkp" id="tkp" rows="3"></textarea>
                  <small class="text-danger"><?= form_error('tkp'); ?></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="desk" class="col-sm-3 col-form-label">Deskripsi <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <textarea class="form-control" name="desk" id="desk" rows="3"></textarea>
                  <small class="text-danger"><?= form_error('desk'); ?></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="modus" class="col-sm-3 col-form-label">Modus <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="text" name="modus" class="form-control" id="modus" placeholder="Modus berupa">
                  <small class="text-danger"><?= form_error('modus'); ?></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="waktu" class="col-sm-3 col-form-label">Waktu Kejadian <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="date" name="waktu" class="form-control" id="waktu">
                  <small class="text-danger"><?= form_error('waktu'); ?></small>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" id="btn-tambah" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>