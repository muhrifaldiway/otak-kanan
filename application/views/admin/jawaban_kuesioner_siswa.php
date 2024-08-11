<div class="container fluid-md">
    <h4 class="text-center mt-5 mb-5">Jawaban Kuesioner Orang Tua/Wali</h4>

    <div class="row">
        <div class="col-sm-12">
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
                    <?php foreach ($jawaban as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $p->pertanyaan; ?></td>
                            <td><?= $p->jawaban; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>



    </div>



</div>