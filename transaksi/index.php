<?php
include '../auth.php';
$role_diizinkan = ['admin','kasir','owner'];
include '../cek_role.php';
include '../koneksi.php';
include '../header.php';
include '../navbar.php';
?>

<div class="container-fluid">
<div class="row">
<?php include '../sidebar.php'; ?>

<div class="col-md-10 p-4">
<h3>Data Transaksi</h3>

<?php if ($_SESSION['role'] != 'owner') { ?>
<a href="tambah.php" class="btn btn-primary btn-sm mb-2">Tambah Transaksi</a>
<?php } ?>

<table class="table table-bordered table-striped table-hover">
<tr>
    <th>Pelanggan</th>
    <th>PlayStation</th>
    <th>Durasi</th>
    <th>Total</th>
    <th>Status</th>
    <th>Tanggal</th>
</tr>

<?php
$data = mysqli_query($koneksi,"
    SELECT transaksi.*, pelanggan.nama, playstation.tipe_ps
    FROM transaksi
    JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan
    JOIN playstation ON transaksi.id_ps=playstation.id_ps
");

while($d = mysqli_fetch_assoc($data)) {
?>
<tr>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['tipe_ps']; ?></td>
    <td><?= $d['durasi']; ?> jam</td>
    <td>Rp <?= number_format($d['total']); ?></td>
    <td><?= $d['status']; ?></td>
    <td><?= $d['tanggal']; ?></td>
</tr>
<?php } ?>
</table>
</div>
</div>
</div>

<?php include '../footer.php'; ?>
