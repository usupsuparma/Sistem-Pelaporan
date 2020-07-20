		<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
			<div class="container">
				<a href="<?= base_url('landing'); ?>" class="navbar-brand">
					<img src="<?= base_url('assets/'); ?>dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3"
					style="opacity: .8">
					<span class="brand-text font-weight-light">SIPMA</span>
				</a>

				<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse order-3" id="navbarCollapse">
					<!-- Left navbar links -->
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="<?= base_url('landing'); ?>" class="nav-link">Beranda</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('landing/aduan'); ?>" class="nav-link">Aduan</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('landing/riwayat'); ?>" class="nav-link">Riwayat Aduan</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Struktur Organisasi</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Tentang</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('auth'); ?>" class="nav-link">Login</a>
						</li>
					</ul>
				</div>
				<!-- Right navbar links -->
			</div>
		</nav>
