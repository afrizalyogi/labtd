<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
			<div class="container">
				<div class="row">
					<div
						class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center text-lg-start text-center">
						<h1 data-aos="fade-up">Laboratorium Teknik Digital</h1>
						<h2 data-aos="fade-up" data-aos-delay="400">
							Rekayasa digital sebagai penerapan teknologi IoT
						</h2>
						<div data-aos="fade-up" data-aos-delay="800">
							<a href="#praktikum" class="btn-get-started scrollto">
								Get Started
							</a>
						</div>
					</div>
					<div
						class="col-lg-6 order-1 order-lg-2 hero-img"
						data-aos="fade-left"
						data-aos-delay="200">
						<img
							src="./frontend/assets/img/hero-img.png"
							class="img-fluid animated"
							alt="" />
					</div>
				</div>
			</div>
		</section>
		<!-- End Hero -->

		<main id="main">
			<!-- ======= Tools Section ======= -->
			<section id="tools" class="clients clients">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-4 col-6">
							<img
								src="./frontend/assets/img/clients/client-1.png"
								class="img-fluid"
								alt=""
								data-aos="zoom-in" />
						</div>

						<div class="col-lg-2 col-md-4 col-6">
							<img
								src="./frontend/assets/img/clients/client-2.png"
								class="img-fluid"
								alt=""
								data-aos="zoom-in"
								data-aos-delay="100" />
						</div>

						<div class="col-lg-2 col-md-4 col-6">
							<img
								src="./frontend/assets/img/clients/client-3.png"
								class="img-fluid"
								alt=""
								data-aos="zoom-in"
								data-aos-delay="200" />
						</div>

						<div class="col-lg-2 col-md-4 col-6">
							<img
								src="./frontend/assets/img/clients/client-4.png"
								class="img-fluid"
								alt=""
								data-aos="zoom-in"
								data-aos-delay="300" />
						</div>

						<div class="col-lg-2 col-md-4 col-6">
							<img
								src="./frontend/assets/img/clients/client-5.png"
								class="img-fluid"
								alt=""
								data-aos="zoom-in"
								data-aos-delay="400" />
						</div>

						<div class="col-lg-2 col-md-4 col-6">
							<img
								src="./frontend/assets/img/clients/client-6.png"
								class="img-fluid"
								alt=""
								data-aos="zoom-in"
								data-aos-delay="500" />
						</div>
					</div>
				</div>
			</section>
			<!-- End Tools Section -->

			<!-- ======= Praktikum Section ======= -->
			<section id="praktikum" class="services">
				<div class="container">
					<div class="section-title" data-aos="fade-up">
						<h2>Praktikum</h2>
						<p>Pendaftaran praktikum pada laboratorium teknik digital</p>
					</div>

					<div class="row">
						<div
							class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
							<a href="<?= base_url('praktd') ?>">
								<div class="icon-box" data-aos="fade-up" data-aos-delay="200">
									<div class="icon"><i class="bx bx-file"></i></div>
									<h4 class="title">Praktikum Teknik Digital</h4>
									<p class="description">
										Duis aute irure dolor in reprehenderit in voluptate velit
										esse cillum dolore
									</p>
								</div>
							</a>
						</div>

						<div
							class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
							<a href="<?= base_url('prakembedded') ?>">
								<div class="icon-box" data-aos="fade-up" data-aos-delay="300">
									<div class="icon"><i class="bx bx-tachometer"></i></div>
									<h4 class="title">Praktikum Embedded System</h4>
									<p class="description">
										Excepteur sint occaecat cupidatat non proident, sunt in
										culpa qui officia
									</p>
								</div>
							</a>
						</div>

						<div
							class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
							<a href="<?= base_url('prakeldig') ?>">
								<div class="icon-box" data-aos="fade-up" data-aos-delay="400">
									<div class="icon"><i class="bx bx-world"></i></div>
									<h4 class="title">Praktikum Elektronika Digital</h4>
									<p class="description">
										At vero eos et accusamus et iusto odio dignissimos ducimus
										qui blanditiis
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End Praktikum Section -->

			<!-- ======= Tentang Section ======= -->
			<section id="tentang" class="about">
				<div class="container">
					<div class="section-title" data-aos="fade-up">
						<h2>Tentang</h2>
					</div>

					<div class="row content">
						<div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
								eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<ul>
								<li>
									<i class="ri-check-double-line"></i> Ullamco laboris nisi ut
									aliquip ex ea commodo consequat
								</li>
								<li>
									<i class="ri-check-double-line"></i> Duis aute irure dolor in
									reprehenderit in voluptate velit
								</li>
								<li>
									<i class="ri-check-double-line"></i> Ullamco laboris nisi ut
									aliquip ex ea commodo consequat
								</li>
							</ul>
						</div>
						<div
							class="col-lg-6 pt-4 pt-lg-0"
							data-aos="fade-up"
							data-aos-delay="300">
							<p>
								Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
								aute irure dolor in reprehenderit in voluptate velit esse cillum
								dolore eu fugiat nulla pariatur. Excepteur sint occaecat
								cupidatat non proident, sunt in culpa qui officia deserunt
								mollit anim id est laborum.
							</p>
							<a href="#" class="btn-learn-more">Learn More</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End Tentang Section -->

			<!-- ======= Contact Section ======= -->
			<section id="kontak" class="contact">
				<div class="container">
					<div class="section-title" data-aos="fade-up">
						<h2>Kontak</h2>
					</div>

					<div class="row">
						<div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
							<div class="contact-about">
								<h3>Lab Teknik Digital</h3>
								<p>
									Cras fermentum odio eu feugiat. Justo eget magna fermentum
									iaculis eu non diam phasellus. Scelerisque felis imperdiet
									proin fermentum leo. Amet volutpat consequat mauris nunc
									congue.
								</p>
								<div class="social-links">
									<a href="#" class="twitter">
										<i class="bi bi-twitter"></i>
									</a>
									<a href="#" class="facebook">
										<i class="bi bi-facebook"></i>
									</a>
									<a href="#" class="instagram">
										<i class="bi bi-instagram"></i>
									</a>
									<a href="#" class="linkedin">
										<i class="bi bi-linkedin"></i>
									</a>
								</div>
							</div>
						</div>
						<div
							class="col-md-6 mt-4 mt-md-0"
							data-aos="fade-up"
							data-aos-delay="200">
							<div class="info">
								<div>
									<i class="ri-map-pin-line"></i>
									<p>Lab Terpadu Teknik Elektro lt 3</p>
								</div>

								<div>
									<i class="ri-mail-send-line"></i>
									<p>info@example.com</p>
								</div>

								<div>
									<i class="ri-phone-line"></i>
									<p>+1 5589 55488 55s</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Contact Section -->
		</main>
		<!-- End #main -->
<?= $this->endSection(); ?>