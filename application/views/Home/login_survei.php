<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Survei</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/tooplate.css">
</head>

<body  style="background-image: url(../assets/img/1.png);" id="reportsPage">
    <div class="container">
        <div class="row tm-mt-big">
            <div class="col-12 mx-auto tm-login-col">
                <div class="bg-light tm-block">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2 class="tm-block-title mt-3">YAYASAN OTAK KANAN INDONESIA</h2>
                            <img src="<?= base_url('assets/img/');?>EMAS.png" width="100px" height="100px">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <form action="index.html" method="post" class="tm-login-form">
                                    
                                    <p class ="text-center">Selamat Datang di SIPTIK</p>
                                    <p class ="text-center">Survei Kepuasan</p>
                                </div>
                                <div class="input-group mt-3">
                                    <a href="<?= base_url('home/login');?>" class="btn btn-primary d-inline-block mx-auto col-sm-4 " >LOGIN</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="row tm-mt-big">
            <div class="col-12 font-weight-light text-center">
                <img src="<?= base_url('assets/img/');?>EMAS.png" width="30px" height="30px">
                Yayasan Otak Kanan Indonesia
                </p>
            </div>
        </footer>
    </div>
</body>

</html>