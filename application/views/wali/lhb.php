<?php

$id_data_wali = $login['id_login'];

          $queryHasil =  "SELECT * FROM hasil_lps WHERE id_data_wali = '$id_data_wali'";


          $hasil = $this->db->query($queryHasil)->result_array();


          $queryHasilGuru =  "SELECT * FROM hasil_lps_guru WHERE id_data_wali = '$id_data_wali'";


          $hasilGuru = $this->db->query($queryHasilGuru)->result_array();


?>


<div class="container-fluid">
    <div class="text-center mb-5 mt-5">
      <img src="<?= base_url('assets/img/');?>EMAS.png" width="100px" height="100px">
      <h2 class="text-center">SMP Otak Kanan Indonesia Pusat Palu</h2>
      <h3 class="text-center">LAPORAN HASIL BELAJAR SISWA</h3>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <table class="table" style="border: 2 solid #eee">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Pertanyaan</th>
              <th scope="col">Jawaban Orang Tua / Wali</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; ?>
          <?php foreach ($hasil as $p) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $p['pertanyaan'];?></td>
              <td><?= $p['jawaban'];?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>


      <div class="col-sm-6">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Pertanyaan</th>
              <th scope="col">Jawaban Guru</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; ?>
          <?php foreach ($hasilGuru as $p) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $p['pertanyaan'];?></td>
              <td><?= $p['jawaban'];?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    
    <nav class="navbar fixed-bottom navbar-light bg-light mt-5">
      <a class="btn btn-success mr-5" href="<?= base_url('wali/kuesioner');?>">Sebelumnya</a>
        <a class="btn btn-success ml-5" href="<?= base_url('wali/responden');?>">Selanjutnya</a>
    </nav>
  </div>
      
      