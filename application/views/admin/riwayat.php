<!-- Flashdata -->
<div class="flash-data" data-berhasil="<?= $this->session->flashdata('berhasil'); ?>"></div>
<div class="flash-data" data-gagal="<?= $this->session->flashdata('gagal'); ?>"></div>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Tabel Laporan Aduan Masyarakat</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="datatable" class="table table-bordered table-striped nowrap">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama Pelapor</th>
								<th>Nomor HP Pelapor</th>
								<th>Kategori</th>
								<th>TKP</th>
								<th>Waktu Kejadian</th>
								<th>Desk Progres</th>
								<th>Tanggal Desk</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if (!empty($aduan))
							{
								$no=1;
								foreach ($aduan as $adu) {
									$nik_p = $adu->nik_p;
									$nama_p = $adu->nama_p;
									$alamat_p = $adu->alamat_p;
									$jk_p = $adu->jk_p;
									$nohp_p = $adu->nohp_p;
									$nama_k = $adu->nama_k;
									$alamat_k = $adu->alamat_k;
									$jk_k = $adu->jk_k;
									$nohp_k = $adu->nohp_k;
									$kategori = $adu->kategori;
									$tkp = $adu->tkp;
									$desk = $adu->desk;
									$modus = $adu->modus;
									$waktu = $adu->waktu;
									$tgl_desk = $adu->tgl_desk;
									$desk_progres = $adu->desk_progres;
									$status = $adu->status;
									$id = $adu->id_aduan;
									?>
									<tr>
										<td><?= $no++; ?></td>
										<td><?= $nama_p; ?></td>
										<td><?= $nohp_p; ?></td>
										<td><?= ucfirst($kategori); ?></td>
										<td><?= $tkp; ?></td>
										<td><?= $waktu; ?></td>
										<td><?= ucfirst($desk_progres); ?></td>
										<td><?= ucfirst($tgl_desk); ?></td>
										<td><?= ucfirst($status); ?></td>
										<td>
											<a href="javascript:;"
												data-nik_p="<?= $adu->nik_p; ?>"
												data-nama_p="<?= $adu->nama_p; ?>"
												data-alamat_p="<?= $adu->alamat_p; ?>"
												data-jk_p="<?= $adu->jk_p; ?>"
												data-nohp_p="<?= $adu->nohp_p; ?>"
												data-nama_k="<?= $adu->nama_k; ?>"
												data-alamat_k="<?= $adu->alamat_k; ?>"
												data-jk_k="<?= $adu->jk_k; ?>"
												data-nohp_k="<?= $adu->nohp_k; ?>"
												data-kategori="<?= $adu->kategori; ?>"
												data-tkp="<?= $adu->tkp; ?>"
												data-desk="<?= $adu->desk; ?>"
												data-modus="<?= $adu->modus; ?>"
												data-waktu="<?= $adu->waktu; ?>"
												data-toggle="modal" data-target="#detail">
												<button class="btn btn-primary btn-sm"><i class="fas fa-info"></i></button>
											</a>
											<a href="javascript:;"
												data-id="<?= $id; ?>"
												data-nik_p="<?= $nik_p; ?>"
												data-nama_p="<?= $nama_p; ?>"
												data-alamat_p="<?= $alamat_p; ?>"
												data-jk_p="<?= $jk_p; ?>"
												data-nohp_p="<?= $nohp_p; ?>"
												data-nama_k="<?= $nama_k; ?>"
												data-alamat_k="<?= $alamat_k; ?>"
												data-jk_k="<?= $jk_k; ?>"
												data-nohp_k="<?= $nohp_k; ?>"
												data-kategori="<?= $kategori; ?>"
												data-tkp="<?= $tkp; ?>"
												data-desk="<?= $desk; ?>"
												data-modus="<?= $modus; ?>"
												data-waktu="<?= $waktu; ?>"
												data-tgl_desk="<?= $tgl_desk; ?>"
												data-desk_progres="<?= $desk_progres; ?>"
												data-status="<?= $status; ?>"
												data-toggle="modal" data-target="#progres">
												<button class="btn btn-success btn-sm" id="btn-ubah"><i class="fas fa-check"></i></button>
											</a>
							                <a class="btn btn-danger btn-sm" onclick="return konfirmasi(<?= $id; ?>)"><i class="fas fa-trash"></i></a>
										</td>
									</tr>
									<?php
								}
							}
							?>
						</tbody>
						<tfoot>
							<tr>
								<th>#</th>
								<th>Nama Pelapor</th>
								<th>Nomor HP Pelapor</th>
								<th>Kategori</th>
								<th>TKP</th>
								<th>Waktu Kejadian</th>
								<th>Desk Progres</th>
								<th>Tanggal Desk</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</tfoot>
					</table>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->

<!-- Modal informasi -->
<div class="modal fade" id="detail">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><i class="fas fa-info"></i> Informasi</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form role="form" id="form-detail">
					<div class="card-body">
						<h5><i class="fas fa-user"></i> Identitas Pelapor</h5><hr>
						<div class="form-group row">
							<label for="nik_p" class="col-sm-3 col-form-label">NIK</label>
							<div class="col-sm-9">
								<input type="text" name="nik_p" class="form-control" id="nik_p" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label for="nama_p" class="col-sm-3 col-form-label">Nama</label>
							<div class="col-sm-9">
								<input type="text" name="nama_p" class="form-control" id="nama_p" readonly> 
							</div>
						</div>
						<div class="form-group row">
							<label for="alamat_p" class="col-sm-3 col-form-label">Alamat</label>
							<div class="col-sm-9">
								<input type="text" name="alamat_p" class="form-control" id="alamat_p" readonly> 
							</div>
						</div>
						<div class="form-group row">
							<label for="jk_p" class="col-sm-3 col-form-label">Jenis Kelamin</label>
							<div class="col-sm-9">
								<select class="form-control" name="jk_p" id="jk_p" readonly>
									<option value="">Pilih Jenis Kelamin</option>
									<option value="pria">Pria</option>
									<option value="wanita">Wanita</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="nohp_p" class="col-sm-3 col-form-label">No. Hp/ Telp.</label>
							<div class="col-sm-9">
								<input type="text" name="nohp_p" class="form-control" id="nohp_p" readonly>
							</div>
						</div><br>
						<h5><i class="fas fa-users"></i> Identitas Korban</h5><hr>
						<div class="form-group row">
							<label for="nama_k" class="col-sm-3 col-form-label">Nama</label>
							<div class="col-sm-9">
								<input type="text" name="nama_k" class="form-control" id="nama_k" readonly> 
							</div>
						</div>
						<div class="form-group row">
							<label for="alamat_k" class="col-sm-3 col-form-label">Alamat</label>
							<div class="col-sm-9">
								<input type="text" name="alamat_k" class="form-control" id="alamat_k" readonly> 
							</div>
						</div>
						<div class="form-group row">
							<label for="jk_k" class="col-sm-3 col-form-label">Jenis Kelamin</label>
							<div class="col-sm-9">
								<select class="form-control" name="jk_k" id="jk_k" readonly>
									<option value="">Pilih Jenis Kelamin</option>
									<option value="pria">Pria</option>
									<option value="wanita">Wanita</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="nohp_k" class="col-sm-3 col-form-label">No. Hp/ Telp.</label>
							<div class="col-sm-9">
								<input type="text" name="nohp_k" class="form-control" id="nohp_k" readonly>
							</div>
						</div><br>
						<h5><i class="fas fa-file"></i> Laporan Aduan</h5><hr>
						<div class="form-group row">
							<label for="kategori" class="col-sm-3 col-form-label">Kategori Laporan Aduan</label>
							<div class="col-sm-9">
								<select class="form-control" name="kategori" id="kategori" readonly>
									<option value="">Pilih Kategori Laporan Aduan</option>
									<option value="kekerasan fisik">Kekerasan Fisik</option>
									<option value="kdrt">Kekerasan Dalam Rumah Tangga</option>
									<option value="maling">Maling</option>
									<option value="begal">Begal</option>
									<option value="pembunuhan">Pembunuhan</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="tkp" class="col-sm-3 col-form-label">Tempat Kejadian Perkara</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="tkp" id="tkp" rows="3" readonly></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="desk" class="col-sm-3 col-form-label">Deskripsi</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="desk" id="desk" rows="3" readonly></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="modus" class="col-sm-3 col-form-label">Modus</label>
							<div class="col-sm-9">
								<input type="text" name="modus" class="form-control" id="modus" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label for="waktu" class="col-sm-3 col-form-label">Waktu Kejadian</label>
							<div class="col-sm-9">
								<input type="date" name="waktu" class="form-control" id="waktu" readonly> 
							</div>
						</div>
					</div>
					<!-- /.card-body -->
				</form>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal progres -->
<div class="modal fade" id="progres">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><i class="fas fa-check"></i> Tindak Lanjut Aduan</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form role="form" id="form-progres" method="post" action="<?= base_url('admin/ubah'); ?>">
					<input type="hidden" id="id_aduan" name="id_aduan">
					<div class="card-body">
						<div class="form-group row">
							<label for="nama_p" class="col-sm-3 col-form-label">Nama Pelapor</label>
							<div class="col-sm-9">
								<input type="text" name="nama_p" class="form-control" id="nama_pUbah" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label for="nama_k" class="col-sm-3 col-form-label">Nama Korban</label>
							<div class="col-sm-9">
								<input type="text" name="nama_k" class="form-control" id="nama_kUbah" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label for="tgl_desk" class="col-sm-3 col-form-label">Tanggal Deskripsi</label>
							<div class="col-sm-9">
								<input type="date" name="tgl_desk" class="form-control" id="tgl_deskUbah"> 
							</div>
						</div>
						<div class="form-group row">
							<label for="desk_progres" class="col-sm-3 col-form-label">Tindak Lanjut Laporan</label>
							<div class="col-sm-9">
								<select class="form-control" name="desk_progres" id="desk_progresUbah">
									<option value="">Pilih Tindakan</option>
									<option value="laporan terkirim">Laporan Terkirim</option>
									<option value="laporan diterima">Laporan Diterima</option>
									<option value="laporan segera di tindaklanjuti">Laporan Segera Ditindak Lanjuti</option>
									<option value="laporan sedang di proses">Laporan Sedang Diproses</option>
									<option value="laporan aduan selesai ditangani">Laporan Aduan Selesai Ditangani</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="status" class="col-sm-3 col-form-label">Status Perkara</label>
							<div class="col-sm-9">
								<select class="form-control" name="status" id="statusUbah">
									<option value="">Pilih Status Perkara</option>
									<option value="belum selesai">Belum Selesai</option>
									<option value="selesai">Selesai</option>
								</select>
							</div>
						</div>
					</div>
					<!-- /.card-body -->
			</div>
			<div class="modal-footer float-right">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
				<button type="submit" class="btn btn-success">Simpan</button>
			</div>
				</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- page script -->
<!-- Detail -->
<script type="text/javascript">
	$(function () {
		$("#datatable").DataTable({
			responsive: true
		});

		$("#detail").on("show.bs.modal", function(event) {
			var div = $(event.relatedTarget);
			var nik_p = div.data('nik_p');
			var nama_p = div.data('nama_p');
			var alamat_p = div.data('alamat_p');
			var jk_p = div.data('jk_p');
			var nohp_p = div.data('nohp_p');
			var nama_k = div.data('nama_k');
			var alamat_k = div.data('alamat_k');
			var jk_k = div.data('jk_k');
			var nohp_k = div.data('nohp_k');
			var kategori = div.data('kategori');
			var tkp = div.data('tkp');
			var desk = div.data('desk');
			var modus = div.data('modus');
			var waktu = div.data('waktu');

			$('#nik_p').val(nik_p);
			$('#nama_p').val(nama_p);
			$('#alamat_p').val(alamat_p);
			$('#jk_p').val(jk_p);
			$('#nohp_p').val(nohp_p);
			$('#nama_k').val(nama_k);
			$('#alamat_k').val(alamat_k);
			$('#jk_k').val(jk_k);
			$('#nohp_k').val(nohp_k);
			$('#kategori').val(kategori);
			$('#tkp').val(tkp);
			$('#desk').val(desk);
			$('#modus').val(modus);
			$('#waktu').val(waktu);
		});

		$("#detail").on("hidden.bs.modal", function() {
			$('#form-detail')[0].reset();
		});
	});
</script>

<!-- Progres -->
<script type="text/javascript">
	$(function () {
		$("#progres").on("show.bs.modal", function(event) {
			var div = $(event.relatedTarget);
			var id = div.data('id');
			var nik_p = div.data('nik_p');
			var nama_p = div.data('nama_p');
			var alamat_p = div.data('alamat_p');
			var jk_p = div.data('jk_p');
			var nohp_p = div.data('nohp_p');
			var nama_k = div.data('nama_k');
			var alamat_k = div.data('alamat_k');
			var jk_k = div.data('jk_k');
			var nohp_k = div.data('nohp_k');
			var kategori = div.data('kategori');
			var tkp = div.data('tkp');
			var desk = div.data('desk');
			var modus = div.data('modus');
			var waktu = div.data('waktu');
			var tgl_desk = div.data('tgl_desk');
			var desk_progres = div.data('desk_progres');
			var status = div.data('status');

			$('#id_aduan').val(id);
			$('#nik_pUbah').val(nik_p);
			$('#nama_pUbah').val(nama_p);
			$('#alamat_pUbah').val(alamat_p);
			$('#jk_pUbah').val(jk_p);
			$('#nohp_pUbah').val(nohp_p);
			$('#nama_kUbah').val(nama_k);
			$('#alamat_kUbah').val(alamat_k);
			$('#jk_kUbah').val(jk_k);
			$('#nohp_kUbah').val(nohp_k);
			$('#kategoriUbah').val(kategori);
			$('#tkpUbah').val(tkp);
			$('#deskUbah').val(desk);
			$('#modusUbah').val(modus);
			$('#waktuUbah').val(waktu);
			$('#tgl_deskUbah').val(tgl_desk);
			$('#desk_progresUbah').val(desk_progres);
			$('#statusUbah').val(status);
		});

		$("#progres").on("hidden.bs.modal", function() {
			$('#form-progres')[0].reset();
		});

	    const berhasil = $('.flash-data').data('berhasil');
	    const gagal = $('.flash-data').data('gagal');

	    if ( berhasil ) {
	      Swal.fire(
	        'Laporan Aduan',
	        'Berhasil ' + berhasil,
	        'success'
	        );
	    }

	    if ( gagal ) {
	      Swal.fire(
	        'Laporan Aduan',
	        'Gagal ' + gagal,
	        'error'
	        );
	    }
	});
</script>

<!-- JS hapus -->
<script type="text/javascript">
	function konfirmasi(id) {
		const href = "<?= base_url('admin/hapus/'); ?>"+id;
		Swal.fire({
			title: 'Apakah Anda yakin?',
			text: 'Data akan dihapus',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus'
		}).then((result) => {
			if (result.value) {
				document.location.href = href;
			}
		});
	}	
</script>