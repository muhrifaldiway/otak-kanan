      <div class="container fluid-md">

        <?php if (validation_errors()) : ?>
          <div class="alert alert-danger mt-5" role="alert">
            <?= validation_errors(); ?>
          </div>
        <?php endif; ?>

        <?= $this->session->flashdata('massage'); ?>

        <button type="button" class="btn btn-light mb-5 mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambahkan</button>


        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Wali Murid</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($wali as $n) {
                  ?>
                    <tr>
                      <th scope="row"><?= $no; ?></th>
                      <td><?= $n->nama; ?></td>
                      <td><?= $n->email; ?></td>
                      <td><?= $n->password; ?></td>
                      <td><?= $n->nama_kelas; ?></td>
                      <td>
                        <a href="<?= base_url('sekolah/hapus_murid/' . $n->id_login); ?>" class="btn btn-sm btn-danger">Hapus</a>
                        <a href="<?= base_url('sekolah/edit_murid/' . $n->id_login); ?>" class="btn btn-sm btn-warning">Ubah</a>
                      </td>
                    </tr>
                  <?php
                    $no++;
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data Murid/wali</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('sekolah'); ?>" method="post">
              <div class="modal-body">
                <div class="form-group mb-3">
                  <input type="text" class="form-control" name="nama" placeholder="masukan nama...">
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control" name="email" placeholder="masukan email...">
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control" name="password" placeholder="masukan password...">
                </div>
                <select class="form-control" name="id_data_kelas">
                  <option value="">* Pilih Kelas Murid</option>
                  <?php foreach ($kelas as $k) : ?>
                    <option value="<?= $k['id']; ?>"><?= $k['nama_kelas']; ?></option>
                  <?php endforeach; ?>
                </select>
                <div class="form-group mb-3">
                  <input type="text" class="form-control" name="level" value="wali" hidden>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>