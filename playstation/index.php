<?php
include '../auth.php';
$role_diizinkan = ['admin'];
include '../cek_role.php';
include '../koneksi.php';
include '../header.php';
include '../navbar.php';
?>

<div class="container-fluid">
<div class="row">
<?php include '../sidebar.php'; ?>

<div class="col-md-10 p-4">
<h3>Data PlayStation</h3>

<a href="tambah.php" class="btn btn-primary btn-sm mb-2">Tambah PlayStation</a>

<table class="table table-bordered table-striped table-hover">
<tr>
    <th>Tipe</th>
    <th>Harga / Jam</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

<?php
$data = mysqli_query($koneksi,"SELECT * FROM playstation");
while($d = mysqli_fetch_assoc($data)) {
?>
<tr>
    <td><?= $d['tipe_ps']; ?></td>
    <td>Rp <?= number_format($d['harga_jam']); ?></td>
    <td><?= $d['status']; ?></td>
    <td>
        <a href="edit.php?id=<?= $d['id_ps']; ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="hapus.php?id=<?= $d['id_ps']; ?>" class="btn btn-danger btn-sm"
           onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
</div>
</div>
</div>

<?php include '../footer.php'; ?>
