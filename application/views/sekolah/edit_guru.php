<div class="container fluid-md">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-10">

            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?php foreach ($guru as $gur) : ?>

                <form action="<?= base_url('sekolah/update_guru') ?>" method="post">

                    <div class="form-group row mb-3">
                        <label for="kd_gejala" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="id_login" value="<?= $gur->id_login; ?>" hidden>
                            <input type="text" class="form-control" name="nama" value="<?= $gur->nama; ?>">
                        </div>
                    </div>

                    <div class="form-group row  mb-3">
                        <label for="kd_gejala" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" value="<?= $gur->email; ?>">
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="kd_gejala" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="password" value="<?= $gur->password; ?>">
                        </div>
                    </div>

                    <div class="form-group row  mb-3">
                        <label for="id_data_kelas" class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-10">
                            <select name="id_data_kelas" class="form-control">
                                <option value="<?= $gur->id_data_kelas; ?>"><?= $gur->nama_kelas; ?></option>
                                <?php foreach ($kelas as $kel) : ?>
                                    <option value="<?= $kel['id']; ?>"><?= $kel['nama_kelas']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <input type="text" class="form-control" name="level" value="<?= $gur->level; ?>" hidden>

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