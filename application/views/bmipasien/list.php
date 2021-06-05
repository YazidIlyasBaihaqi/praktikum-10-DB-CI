<h3>Daftar Bmi Pasien</h3>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Tanggal</th>
            <th>Pasien Id</th>
            <th>Berat</th>
            <th>Tinggi</th>
            <th>Bmi</th>
            <th>Status Bmi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $nomor =1;
    foreach($bmi_pasien->result() as $bmi_pasien){
    echo'
    <tr>
        <td>'.$nomor.'</td>
        <td>'.$bmi_pasien->tanggal.'</td>
        <td>'.$bmi_pasien->pasien_id.'</td>
        <td>'.$bmi_pasien->berat.'</td>
        <td>'.$bmi_pasien->tinggi.'</td>
        <td>'.$bmi_pasien->bmi.'</td>
        <td>'.$bmi_pasien->status_bmi.'</td>
        <td><a href="'.base_url().'index.php/bmipasien/view/'
    .$bmi_pasien->id.'">view</a></td>
    </tr>';
    $nomor++;
    }
    ?>
    </tbody>
</table>