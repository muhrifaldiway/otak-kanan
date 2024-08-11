<div class="container-fluid">
    <div class="text-center mb-5 mt-5">
        <img src="<?= base_url('assets/img/'); ?>EMAS.png" width="100px" height="100px">
        <h2 class="text-center">SMP Otak Kanan Indonesia Pusat Palu</h2>
        <h3 class="text-center">LAPORAN PERKEMBANGAN SISWA SELAMA DI <strong> SEKOLAH</strong></h3>
    </div>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('massage'); ?>

    <!-- colom -->
    <h6 class="text-center">Silahkan Pilih <strong>Siswa</strong></h6>
    <div class="row mb-5">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">

            <?php
            $kelas = $login['id_data_kelas'];

            $queryKelas =  "SELECT *
                            FROM `login` JOIN `data_kelas`
                              ON `login`.`id_data_kelas` = `data_kelas`.`id`
                          WHERE `login`.`id_data_kelas` = $kelas
                          AND `login`.`level` = 'wali'
                          ";
            $kelas = $this->db->query($queryKelas)->result_array();
            ?>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kelas as $o) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $o['nama']; ?></td>
                            <td><?= $o['nama_kelas']; ?></td>
                            <td>
                                <a href="<?= base_url('guru/lps_guru/') . $o['id_login']; ?>" class="btn badge btn-success">Pilih</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>



        </div>
        <div class="col-sm-3"></div>
    </div>
    <!-- akhir colom-->
    <nav class="navbar fixed-bottom navbar-light bg-light mt-5">
        <a class="btn btn-success ml-5" href="<?= base_url('home'); ?>">Keluar</a>
        <a class="btn btn-success ml-5" href="<?= base_url('guru/terima_kasih'); ?>">Selanjutnya</a>
    </nav>

</div>