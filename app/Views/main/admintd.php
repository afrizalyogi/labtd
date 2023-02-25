<?= $this->extend('layout/template'); ?>
<?= $this->section('title'); ?>
Praktikum Teknik Digital |
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<main id="main">
  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Praktikum Teknik Digital</h2>
        <ol>
          <li><a href="<?= base_url('home') ?>">Home</a></li>
          <li>Praktikum Teknik Digital</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Breadcrumbs Section -->

  <section class="inner-page">
    <div class="container">
          <div class="info">
            <h2>Kelola Data Praktikum Teknik Digital</h2>
          </div>
          <br />

          <?php if (session()->getFlashdata('pesanAdd')) : ?>
          <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesanAdd'); ?>
          </div>
          <?php endif; ?>

          <?php if (session()->getFlashdata('pesanUpdate')) : ?>
          <div class="alert alert-warning" role="alert">
            <?= session()->getFlashdata('pesanUpdate'); ?>
          </div>
          <?php endif; ?>

          <?php if (session()->getFlashdata('pesanDelete')) : ?>
          <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('pesanDelete'); ?>
          </div>
          <?php endif; ?>

          <form class="form-inline">
            <div class="input-group">
              <div class="btn-group me-2" role="group" aria-label="cari">
                <input
                  class="form-control"
                  type="search"
                  placeholder="Cari Nama Peserta..."
                  aria-label="Search"
                  name="key" />
              </div>
              <div class="btn-group" role="group" aria-label="tombolCari">
                <b>
                  <button
                    class="btn btn-primary"
                    type="submit"
                    name="submit">
                    Cari
                  </button>
                </b>
              </div>
            </div>
          </form>
          <div class="btn-group btn-group-toggle">
            <form>
              <div class="input-group">
                <div
                  class="btn-group me-2"
                  role="group"
                  aria-label="multibutton"
                  style="margin-top: 10px; height: 40px">
                  <div class="btn-group" role="group" aria-label="add">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-bs-toggle="modal"
                      data-bs-target="#create">
                      <b>Tambah</b>
                    </button>
                  </div>
                  <div class="btn-group" role="group" aria-label="excel">
                    <a
                      href="<?= base_url('admintd/excel') ?>"
                      type="button"
                      target="_blank"
                      class="btn btn-success"
                      name="excel">
                      <b>Excel</b>
                    </a>
                  </div>
                  <div class="btn-group" role="group" aria-label="print">
                    <a
                      href="<?= base_url('admintd/print') ?>"
                      type="button"
                      target="_blank"
                      class="btn btn-light"
                      name="print">
                      <b>Print</b>
                    </a>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div style="overflow-x: auto">
            <table
              id="table_id"
              class="table"
              width="100%">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">NPM</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Opsi/Pilihan Admin</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 + (10 * ($curpage - 1)); ?>
                <?php foreach ($prak_td as $dt) : ?>
                <tr>
                  <th scope="row"><?= $i++; ?></th>
                  <td><?= $dt['npm']; ?></td>
                  <td><?= $dt['nama']; ?></td>
                  <td class="btn-class">
                    <button
                      type="button"
                      class="edit btn btn-warning btn-sm"
                      data-bs-toggle="modal"
                      data-bs-target="#update<?= $dt['id'] ?>">
                      Ubah
                    </button>
                    <button
                      type="button"
                      class="del btn btn-danger btn-sm"
                      data-bs-toggle="modal"
                      data-bs-target="#delete<?= $dt['id'] ?>">
                      Hapus
                    </button>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div
                  class="btn-group"
                  role="group"
                  aria-label="pagination">
                  <?= $pager->links('prak_td', 'pagination') ?>
                </div>

          <!-- ADD -->
          <div
            class="modal fade"
            id="create"
            tabindex="-1"
            role="dialog"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5
                    class="modal-title">
                    Tambah Data
                  </h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close">
                  </button>
                </div>

                <form action="<?= base_url('admintd/save') ?>" method="POST">
                  <?= csrf_field(); ?>
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="mb-3">
                        <label class="form-label" for="form-nama">Nama</label>
                        <input
                          class="form-control"
                          type="text"
                          name="nama"
                          id="form-nama"
                          required />
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="form-npm">NPM</label>
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

          <!-- EDIT -->
          <?php $i = 1 + (10 * ($curpage - 1)); ?>
          <?php foreach ($prak_td as $dt) : ?>
          <div
            class="modal fade"
            id="update<?= $dt['id'] ?>"
            tabindex="-1"
            role="dialog"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">
                    Update Data
                  </h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close">
                  </button>
                </div>

                <form
                  action="<?= base_url('admintd/update/'.$dt['id']); ?>"
                  method="POST">
                  <?= csrf_field(); ?>
                  <input type="hidden" name="_method" value="UPDATE" />
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="mb-3">
                        <label class="form-label" for="form-update-nama">Nama</label>
                        <input
                          class="form-control"
                          type="text"
                          name="nama"
                          id="form-update-nama"
                          value="<?= $dt['nama']; ?>"
                          required />
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="form-update-npm">NPM</label>
                        <input
                          class="form-control"
                          type="text"
                          name="npm"
                          id="form-update-npm"
                          value="<?= $dt['npm']; ?>"
                          required />
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <div class="button-class">
                        <button type="submit" name="update" class="btn btn-primary">
                            Update
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
          <?php endforeach; ?>

          <!-- DELETE -->
          <?php $i = 1 + (10 * ($curpage - 1)); ?>
          <?php foreach ($prak_td as $dt) : ?>
          <div
            class="modal fade"
            id="delete<?= $dt['id'] ?>"
            tabindex="-1"
            role="dialog"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">
                    Hapus Data
                  </h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close">
                  </button>
                </div>

                <form
                  action="<?= base_url('admintd/delete/'. $dt['id']); ?>"
                  method="POST">
                  <?= csrf_field(); ?>
                  <input type="hidden" name="_method" value="DELETE" />
                  <div class="modal-body">
                    <div class="modal-body">
                      <h5>Apakah anda yakin akan menghapus data ini ?</h5>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <div class="button-class">
                      <button
                        type="submit"
                        name="delete"
                        class="btn btn-primary">
                        Hapus
                      </button>

                      <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                        class="btn btn-danger">
                        Batal
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
    </div>
  </section>
</main>
<?= $this->endSection(); ?>