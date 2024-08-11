

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
            <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>

            <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newModal">Tambahkan</a>

            <?php if (validation_errors()) : ?>
              <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
              </div>
            <?php endif; ?>

            <?= $this->session->flashdata('massage'); ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Siswa</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">password</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Kelas</th>
                      <th scope="col">NIS</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Telpon</th>
                      <th scope="col">Email</th>
                      <th scope="col">Tanggal Masuk</th>
                      <th scope="col">NIK</th>
                      <th scope="col">NIPD</th>
                      <th scope="col">Ayah</th>
                      <th scope="col">Ibu</th>
                      <th scope="col">Foto</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 1;
                  foreach ($profil as $p) {
                   ?>
                  <tr>
                    <th scope="row"><?= $no; ?></th>
                    <td><?= $p->password; ?></td>
                    <td><?= $p->name; ?></td>
                    <td><?= $p->kelas; ?></td>
                    <td><?= $p->nis; ?></td>
                    <td><?= $p->alamat; ?></td>
                    <td><?= $p->no_telpon; ?></td>
                    <td><?= $p->email; ?></td>
                    <td><?= $p->tgl; ?></td>
                    <td><?= $p->nik; ?></td>
                    <td><?= $p->nipd; ?></td>
                    <td><?= $p->ayah; ?></td>
                    <td><?= $p->ibu; ?></td>
                    <td align="center">
                      <img src="<?= base_url('assets/img/profil/') .  $p->image; ?>" height="50" alt="">
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
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->






  <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="files">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newModalLabel">Add New</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <?= form_open_multipart('admin/profil');?>
        <form action="<?= base_url('admin/profil'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="password" name="password" placeholder=" password Siswa">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder=" Nama Siswa">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="ulasan" name="kelas" placeholder="Kelas">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="nis" placeholder="Nomor induk Siswa" value="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="no_telpon" placeholder="No Telpon" value="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Alamat email" value="">
          </div>
          <div class="form-group">
            <input type="date" class="form-control" name="tgl" placeholder="Tanggal Masuk" value="">
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" class="form-control" name="nik" placeholder="NIK" value="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" class="form-control" name="nipd" placeholder="NIPD" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" class="form-control" name="ayah" placeholder="Nama Ayah" value="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" class="form-control" name="ibu" placeholder="Nama ibu" value="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="gambar" name="image">
              <label class="custom-file-label" for="gambar"></label>
            </div>
          </div>
         </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">upload</button>
        </div>
      </form>
      </div>
    </div>
  </div>
