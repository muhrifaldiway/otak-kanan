        <div class="container-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger mt-5" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('massage'); ?>

            <button type="button" class="btn btn-light mb-5 mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambahkan</button>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Kelas</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Kelas</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($kelas as $k) {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $no; ?></th>
                                        <td><?= $k['nama_kelas']; ?></td>
                                        <td>
                                            <a href="<?= base_url('sekolah/edit_kelas/' . $k['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="<?= base_url('sekolah/hapus_kelas/' . $k['id']); ?>" class="btn btn-sm btn-danger">Hapus</a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url('sekolah/kelas'); ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label class="form-label" for="kelas">Nama Kelas</label>
                                <input type="text" class="form-control" id="kelas" name="nama_kelas" placeholder="Masukkan Nama Kelas...">
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