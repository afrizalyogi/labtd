<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
	<div class="container d-flex align-items-center justify-content-between">
	<div class="logo">
		<a href="/">
			<img class="img-fluid" src="<?= base_url('./frontend/assets/img/icon-dark.png') ?>" alt="" />
			Lab Teknik Digital
		</a>
	</div>

	<nav id="navbar" class="navbar navbar-expand-lg">
		<ul>
			<li><a class="nav-link scrollto" href="<?= base_url('home#hero') ?>">Home</a></li>
			<li class="dropdown">
				<a href="<?= base_url('home#praktikum') ?>">
					<span>Praktikum</span> <i class="bi bi-chevron-down"></i>
				</a>
				<ul>
					<li><a href="<?= base_url('praktd') ?>">Teknik Digital</a></li>
					<li><a href="<?= base_url('prakembedded') ?>">Embedded System</a></li>
					<li><a href="<?= base_url('prakeldig') ?>">Elektronika Digital</a></li>
				</ul>
			</li>
			<li>
				<a class="nav-link scrollto" href="<?= base_url('home#tentang') ?>">Tentang</a>
			</li>
			<li>
				<a class="getstarted scrollto" href="<?= base_url('home#praktikum') ?>">Get Started</a>
			</li>
		</ul>
		<i class="bi bi-list mobile-nav-toggle"></i>
	</nav>
</div>
</header>
<!-- End Header -->