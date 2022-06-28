<?= $this -> extend('templates/template'); ?>

<?= $this -> section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Tabel -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nomor</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($user as $u) : ?>
            <tr>
                <th scope="row">1</th>
                <td><?= $u['nama']; ?></td>
                <td><?= $u['alamat']; ?></td>
                <td><?= $u['tempat_lahir']; ?></td>
                <td><?= $u['tanggal_lahir']; ?></td>
                <td><?= $u['jenis_kelamin']; ?></td>
                <td><?= $u['telepon']; ?></td>
            </tr>
            <?php endforeach; ?>
            <!-- <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr> -->
        </tbody>
    </table>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this -> endSection(); ?>