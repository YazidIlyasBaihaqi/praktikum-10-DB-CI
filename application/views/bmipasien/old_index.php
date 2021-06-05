
<div class="col-md-12">
    <h3>
        Daftar Pasien
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Berat</th>
                <th>Tinggi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $nomor=1;
            foreach($list_data as $bmipasien){
        ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$bmipasien->kode?></td>
                <td><?=$bmipasien->nama?></td>
                <td><?=$bmipasien->gender?></td>
                <td><?=$bmipasien->berat?></td>
                <td><?=$bmipasien->tinggi?></td>
            </tr>
        <?php
            $nomor++;
            }
        ?>
        </tbody>
    </table>
    <h3>Gak bisa - bisa kak, pusing :<</h3>
</div>