<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main id="main">
			<!-- ======= Breadcrumbs Section ======= -->
			<section class="breadcrumbs">
				<div class="container">
					<div class="d-flex justify-content-between align-items-center">
						<h2>Praktikum Embedded System</h2>
						<ol>
							<li><a href="home.html">Home</a></li>
							<li>Praktikum Embedded System</li>
						</ol>
					</div>
				</div>
			</section>
			<!-- End Breadcrumbs Section -->

			<section class="inner-page">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="info">
								<h2>
									<i class="fas fa-th-list"></i>&nbsp;&nbsp;Peserta Praktikum
									Teknik Digital
								</h2>
							</div>
							<br />

							<?php if (session()->getFlashdata('Pesan')) : ?>
							<div class="alert alert-success" role="alert">
								<?= session()->getFlashdata('Pesan'); ?>
							</div>
							<?php endif; ?>

							<form
								action=""
								method="POST"
								class="form-inline"
								style="margin-top: 10px; margin-bottom: 10px">
								<form class="form-inline">
									<div class="input-group">
										<div class="btn-group">
											<a
												href="daftar-prak-embedded.html"
												class="btn btn-primary">
												Tambah Peserta
											</a>
										</div>
										<div class="btn-group mr-2" role="group" aria-label="cari">
											<input
												class="form-control mr-sm-2"
												type="search"
												placeholder="Cari Nama Peserta..."
												aria-label="Search"
												name="keyword" />
										</div>
										<div class="btn-group" role="group" aria-label="tombolCari">
											<button
												class="btn btn-outline-primary"
												type="submit"
												name="submit">
												Cari
											</button>
										</div>
									</div>
								</form>
							</form>
							<form class="form-inline">
								<?= $pager->links('semnas', 'pagination') ?>
							</form>

							<div style="overflow-x: auto">
								<table
									id="table_id"
									class="table table-striped table-dark mydatatable"
									width="100%">
									<thead>
										<tr>
											<th scope="col">NPM</th>
											<th scope="col">Nama Lengkap</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1 + (5 * ($curpage - 1)); ?>
										<?php foreach ($semnas as $dt) : ?>
										<tr>
											<th scope="row"><?= $i++; ?></th>
											<td><?= $dt['nama']; ?></td>
											<td><?= $dt['npm']; ?></td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
<?= $this->endSection(); ?>