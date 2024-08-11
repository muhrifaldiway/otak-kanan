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
    <div class="row mb-5">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">

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

            <script>
                function tampilkan() {
                    var nama_kota = document.getElementById("myform").id_data_wali.value;
                    <?php foreach ($kelas as $o) : ?>
                        if (nama_kota == "<?= $o['id_login']; ?>") {
                            document.getElementById("tampil").innerHTML = "<option value='<?= $o['id_login']; ?>'><?= $o['id_login']; ?></option>";
                        }
                    <?php endforeach; ?>
                }
            </script>

            <form name="myform" id="myform" action="<?= base_url('guru/tambah_lps'); ?>" method="post">


                <div class="row">
                    <div class="col-lg-3">
                        <label for="a">* Silahkan Pilih Siswa</label>
                        <select class="form-control" name="id_data_wali[]" id="id_data_wali" onchange="tampilkan()">
                            <option value="">* Pilih Siswa...</option>
                            <?php foreach ($kelas as $m) : ?>
                                <option value="<?= $m['id_login']; ?>"><?= $m['nama']; ?>, <?= $m['id_login']; ?>, <?= $m['nama_kelas']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-lg-9">


                        <?php $i = 1; ?>
                        <?php foreach ($LPS as $p) : ?>

                            <th scope="row"><?= $i; ?>.</th>
                            <label for=""><?= $p['pertanyaan']; ?></label>
                            <input type="text" name="pertanyaan[]" value="<?= $p['pertanyaan']; ?>" hidden> <br>
                            <input type="text" name="id_data_guru[]" value="<?= $login['id_login']; ?>" hidden>
                            <select id='tampil' name='tampil'></select>





                            <div class="form-check">
                                <input type="radio" name="jawaban[]" id="jawaban" value="<?= $p['jawaban_a']; ?>">
                                <label for="jawaban"><?= $p['jawaban_a']; ?></label> <br>
                            </div>

                            <div class="form-check">
                                <input type="radio" name="jawaban[]" id="jawaban" value="<?= $p['jawaban_b']; ?>">
                                <label for="jawaban"><?= $p['jawaban_b']; ?></label> <br>
                            </div>

                            <div class="form-check">
                                <input type="radio" name="jawaban[]" id="jawaban" value="<?= $p['jawaban_c']; ?>">
                                <label for="jawaban"><?= $p['jawaban_c']; ?></label> <br>
                            </div>

                            <div class="form-check">
                                <input type="radio" name="jawaban[]" id="jawaban" value="<?= $p['jawaban_d']; ?>">
                                <label for="jawaban"><?= $p['jawaban_d']; ?></label> <br>
                            </div>

                            <div class="form-check">
                                <input type="radio" name="jawaban[]" id="jawaban" value="<?= $p['jawaban_e']; ?>">
                                <label for="jawaban"><?= $p['jawaban_e']; ?></label> <br>
                            </div>


                            <?php $i++; ?>
                        <?php endforeach; ?>

                    </div>
                </div>


                <button type="submit" form="myform" class="btn btn-success mb-5 mt-5">Kirim</button>
            </form>
        </div>
    </div>
    <!-- akhir colom-->
    <nav class="navbar fixed-bottom navbar-light bg-light mt-5">
        <a class="btn btn-success ml-5" href="<?= base_url('guru/terima_kasih'); ?>">Selanjutnya</a>
    </nav>
</div>