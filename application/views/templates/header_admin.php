<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIPTIK SekolahOtak Kanan</title>

  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

</head>

<body style="background-image:url('assets/img/1.png')">

  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-5 mb-5" style="border-radius:10px;">
      <div class="container-fluid">
        <img class="navbar-brand" src="<?= base_url('assets/img/'); ?>EMAS.png" width="80px" height="100px">
        <h6 class="mr-4">Otak Kanan Indonesia Pusat Palu</h6>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-sm-6">

          </ul>
          <ul class="navbar-nav me-auto mb-2 mb-sm-6 ml-5">
            <li class="nav-item">
              <a class="nav-link active" href="<?= base_url('admin'); ?>">Admin</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Data Sekolah
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?= base_url('sekolah'); ?>">Data Murid</a></li>
                <li><a class="dropdown-item" href="<?= base_url('sekolah/guru'); ?>">Data Guru</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="<?= base_url('sekolah/kelas'); ?>">Data Kelas</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?= base_url('admin/data_lps'); ?>">Pertanyaan Perkembangan Siswa</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Data Kuesioner
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?= base_url('admin/data_kuesioner'); ?>">Pertanyaan</a></li>
                <li><a class="dropdown-item" href="<?= base_url('admin/jawaban_kuesioner'); ?>">Jawaban Siswa</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?= base_url('home'); ?>">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>