<?= $this->extend('layout/template'); ?>
<?= $this->section('title'); ?>
Praktikum Elektronika Digital |
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<main id="main">
			<!-- ======= Breadcrumbs Section ======= -->
			<section class="breadcrumbs">
				<div class="container">
					<div class="d-flex justify-content-between align-items-center">
						<h2>Praktikum Elektronika Digital</h2>
						<ol>
							<li><a href="<?= base_url('home') ?>">Home</a></li>
							<li>Praktikum Elektronika Digital</li>
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
									Peserta Praktikum Elektronika Digital 2023
								</h2>
							</div>
							<br />

							<?php if (session()->getFlashdata('Pesan')) : ?>
							<div class="alert alert-success" role="alert">
								<?= session()->getFlashdata('Pesan'); ?>
							</div>
							<?php endif; ?>

							
							<div class="d-flex">
							<button type="button" class="btn btn-primary me-auto" data-bs-toggle="modal" data-bs-target="#create">
								Tambah Peserta
							</button>
							<form class="form-inline ms-auto">
									<div class="input-group">
										<div class="btn-group">
										</div>
										<div class="btn-group me-2" role="group" aria-label="cari">
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
							</div>
							</form>
							<div style="overflow-x: auto">
								<table
									id="table_id"
									class="table">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">NPM</th>
											<th scope="col">Nama Lengkap</th>
										</tr>
									</thead>
									<tbody>
									<?php $i = 1 + (10 * ($curpage - 1)); ?>
									<?php foreach ($prak_eldig as $dt) : ?>
										<tr>
											<th scope="row"><?= $i++; ?></th>
											<td><?= $dt['npm']; ?></td>
											<td><?= $dt['nama']; ?></td>
										</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<form class="form-inline">
								<?= $pager->links('prak_eldig', 'pagination') ?>
							</form>
						</div>
					</div>
				</div>

				<div class="modal fade" id="create" tabindex="-1" aria-labelledby="create" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Daftar Praktikum</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                        </div>

                        <form action="<?= base_url('prakeldig/save'); ?>" method="POST">
                            <?= csrf_field(); ?>
                            <div class="modal-body">
                                <div class="form-group">
																<div class="mb-3">
																	<label class="form-label" for="form-profile">Nama</label>
																	<input
																		class="form-control"
																		type="text"
																		name="nama"
																		id="form-nama"
																		required />
																</div>

																<div class="mb-3">
																	<label class="form-label" for="form-profile">NPM</label>
																	<input
																		class="form-control"
																		type="text"
																		name="npm"
																		id="form-npm"
																		required />
																</div>
															</div>
                            </div>
                            <div class="modal-footer">
                                <div class="button-class">
                                    <button type="submit" name="create" class="btn btn-primary">
                                        Tambah
                                    </button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" class="button btn btn-danger">
                                        Batal
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			</section>
		</main>
<?= $this->endSection(); ?>