<!-- Begin Page Content -->
<div class="container fluid-md">

  <?php if (validation_errors()) : ?>
    <div class="alert alert-danger" role="alert">
      <?= validation_errors(); ?>
    </div>
  <?php endif; ?>

  <?= $this->session->flashdata('massage'); ?>

  <button type="button" class="btn btn-light mb-5 mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambahkan</button>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables LPS</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">pertanyaan</th>
              <th scope="col">A</th>
              <th scope="col">B</th>
              <th scope="col">C</th>
              <th scope="col">D</th>
              <th scope="col">E</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($LPS as $n) {
            ?>
              <tr>
                <th scope="row"><?= $no; ?></th>
                <td><?= $n['pertanyaan']; ?></td>
                <td><?= $n['jawaban_a']; ?></td>
                <td><?= $n['jawaban_b']; ?></td>
                <td><?= $n['jawaban_c']; ?></td>
                <td><?= $n['jawaban_d']; ?></td>
                <td><?= $n['jawaban_e']; ?></td>
                <td>
                  <a href="<?= base_url('admin/hapus_lps/' . $n['id']); ?>" class="btn btn-sm btn-danger">Hapus</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('admin/data_lps'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group mb-3">
            <input type="text" class="form-control" name="pertanyaan" placeholder="masukkan pertanyaan">
          </div>
          <div class="form-group mb-3">
            <input type="text" class="form-control" name="jawaban_a" placeholder="Masukan Jawaban A" value="">
          </div>
          <div class="form-group mb-3">
            <input type="text" class="form-control" name="jawaban_b" placeholder="Masukan Jawaban B" value="">
          </div>
          <div class="form-group mb-3">
            <input type="text" class="form-control" name="jawaban_c" placeholder="Masukan Jawaban C" value="">
          </div>
          <div class="form-group mb-3">
            <input type="text" class="form-control" name="jawaban_d" placeholder="Masukan Jawaban D" value="">
          </div>
          <div class="form-group mb-3">
            <input type="text" class="form-control" name="jawaban_e" placeholder="Masukan Jawaban E" value="">
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