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
            <h6 class="m-0 font-weight-bold text-primary">DataTables Admin</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($admin as $n) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no; ?></th>
                                <td><?= $n['nama']; ?></td>
                                <td><?= $n['email']; ?></td>
                                <td><?= $n['password']; ?></td>
                                <td><?= $n['level']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/hapus_admin/' . $n['id_login']); ?>" class="btn btn-sm btn-danger">Hapus</a>
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



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('admin'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Admin">
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Masukan Email" value="">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="password" placeholder="Masukan Password" value="">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id_data_kelas" value="0">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="level" value="admin">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>