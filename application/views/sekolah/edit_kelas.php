<div class="container fluid-md">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-10">

            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?php foreach ($kelas as $kel) : ?>

                <form action="<?= base_url('sekolah/update_kelas') ?>" method="post">

                    <div class="form-group row mb-3">
                        <label for="kd_gejala" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="id" value="<?= $kel->id; ?>" hidden>
                            <input type="text" class="form-control" name="nama_kelas" value="<?= $kel->nama_kelas; ?>">
                        </div>
                    </div>

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-warning">Edit</button>
                        </div>
                    </div>

                </form>
            <?php endforeach; ?>

        </div>
    </div>

</div>