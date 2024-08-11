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

<body style="background-image:url('../assets/img/1.png')">
    <div class="container-sm">
        <div class="kotak">
            <div class="bg-light block">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img src="<?= base_url('assets/img/');?>EMAS.png" width="80px" height="100px">
                        <h4 class="text-center mb-5"> <strong> OTAK KANAN INDONESIA <br> PUSAT PALU</strong></h4>
                    </div>
                    <div class="col-sm-6">
                        <form action="<?= site_url('home/proses_login');?>" method="post" class="login">
                            <?php if(isset($error)) { echo $error; }; ?>
                            <div class="form-group mb-3">
                                <label for="exampleDropdownFormEmail1">* Email</label>
                                <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="Email...">
                                <?php echo form_error('email'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormPassword1">* Password</label>
                                <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password...">
                                <?php echo form_error('password'); ?>
                            </div>

                            <div class="input-group mt-3">
                                <p><em>Silahkan masuk dengan E-mail yang telah di registrasi</em></p><br>
                                <button type="submit" class="btn btn-success">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?= base_url('assets/');?>js/bootstrap.bundle.js"></script>
  
   

</body>
</html>
    
    
    


