<div class="container-fluid">
  <div class="text-center mb-5 mt-5">
    <img src="<?= base_url('assets/img/'); ?>EMAS.png" width="100px" height="100px">
    <h2 class="text-center">SMP Otak Kanan Indonesia Pusat Palu</h2>
    <h3 class="text-center">LAPORAN PERKEMBANGAN SISWA <strong>"<?= $siswa->nama; ?>"</strong> SELAMA DI <strong> SEKOLAH</strong></h3>
  </div>

  <!-- colom -->
  <div class="row mb-5 mt-5">
    <div class="col-sm-5"></div>
    <div class="col-sm-7">

      <form name="myform" id="myform" action="<?= base_url('guru/tambah_lps'); ?>" method="post">


        <div class="row">
          <div class="col-lg-9">


            <?php $i = 1; ?>
            <?php foreach ($LPS as $p) : ?>

              <th scope="row"><?= $i; ?>.</th>
              <label for=""><?= $p['pertanyaan']; ?></label>
              <input type="text" name="pertanyaan[]" value="<?= $p['pertanyaan']; ?>" hidden> <br>
              <input type="text" name="id_data_guru[]" value="<?= $login['id_login']; ?>" hidden>
              <input type="text" name="id_data_wali[]" value="<?= $siswa->id_login; ?>" hidden>


              <div class="form-check">
                <input type="checkbox" name="jawaban[]" id="jawaban" value="<?= $p['jawaban_a']; ?>">
                <label for="jawaban"><?= $p['jawaban_a']; ?></label> <br>
              </div>

              <div class="form-check">
                <input type="checkbox" name="jawaban[]" id="jawaban" value="<?= $p['jawaban_b']; ?>">
                <label for="jawaban"><?= $p['jawaban_b']; ?></label> <br>
              </div>

              <div class="form-check">
                <input type="checkbox" name="jawaban[]" id="jawaban" value="<?= $p['jawaban_c']; ?>">
                <label for="jawaban"><?= $p['jawaban_c']; ?></label> <br>
              </div>

              <div class="form-check">
                <input type="checkbox" name="jawaban[]" id="jawaban" value="<?= $p['jawaban_d']; ?>">
                <label for="jawaban"><?= $p['jawaban_d']; ?></label> <br>
              </div>

              <div class="form-check">
                <input type="checkbox" name="jawaban[]" id="jawaban" value="<?= $p['jawaban_e']; ?>">
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
    <a class="btn btn-success ml-5" href="<?= base_url('guru'); ?>">Kembali</a>
  </nav>
</div>