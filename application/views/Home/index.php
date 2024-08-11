<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIPTIK SekolahOtak Kanan</title>

    <link rel="stylesheet" href="<?= base_url('assets/');?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/style.css">

</head>

<body style="background-image:url('assets/img/1.png')">

      <div class="container-lg">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mt-5 mb-5">
        <div class="container-fluid">
          <img class="navbar-brand" src="<?= base_url('assets/img/');?>EMAS.png" width="80px" height="100px">
          <h4 class="text-center"> <strong> Otak Kanan <br> Indonesia Pusat Palu </strong></h4>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-sm-6">
             
            </ul>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <strong>MASUK</strong>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?= base_url('home/persetujuan'); ?>">Orang Tua</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('home/login'); ?>">Murobbi</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="<?= base_url('home/login'); ?>">Admin Sekolah</a></li>
                </ul>
              </div>
          </div>
        </div>
      </nav>
      </div>


    
 
      <script src="<?= base_url('assets/');?>js/bootstrap.bundle.js"></script>
  
   

</body>
</html>