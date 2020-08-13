<!-- Flashdata -->
<div class="flash-data" data-berhasil="<?= $this->session->flashdata('berhasil'); ?>"></div>
<div class="flash-data" data-gagal="<?= $this->session->flashdata('gagal'); ?>"></div>

<div class="content">
	<div class="container">
		<div class="row">
			<!-- /.col-md-6 -->

			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Tabel Laporan Aduan Masyarakat Polsek Rajagaluh</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="datatable" class="table table-bordered table-striped nowrap">
							<thead>
							<tr>
								<th>#</th>
								<th>Nama Pelapor</th>
								<th>Nama Korban</th>
								<th>Kategori</th>
								<th>Tindak Lanjut</th>
								<th>Tanggal Tindak Lanjut</th>
								<th>Status Perkara</th>
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
										<td><?= $nama_k; ?></td>
										<td><?= ucfirst($kategori); ?></td>
										<td><?= ucfirst($desk_progres); ?></td>
										<td><?= $tgl_desk; ?></td>
										<td><?= ucfirst($status); ?></td>
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
								<th>Nama Korban</th>
								<th>Kategori</th>
								<th>Tindak Lanjut</th>
								<th>Tanggal Tindak Lanjut</th>
								<th>Status Perkara</th>
							</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</div>

<!-- JS tambah -->
<script type="text/javascript">
	$(function() {

		$("#datatable").DataTable({
			responsive: true
		});

		$("#modal-tambah").on("hidden.bs.modal", function() {
			$('#form-tambah')[0].reset();
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
