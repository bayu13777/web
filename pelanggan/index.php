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
<h3>Data Pelanggan</h3>

<a href="tambah.php" class="btn btn-primary btn-sm mb-2">Tambah Pelanggan</a>

<table class="table table-bordered table-striped table-hover">
<tr>
    <th>Nama</th>
    <th>No HP</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>

<?php
$data = mysqli_query($koneksi,"SELECT * FROM pelanggan");
while($d = mysqli_fetch_assoc($data)) {
?>
<tr>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['no_hp']; ?></td>
    <td><?= $d['alamat']; ?></td>
    <td>
        <a href="edit.php?id=<?= $d['id_pelanggan']; ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="hapus.php?id=<?= $d['id_pelanggan']; ?>" class="btn btn-danger btn-sm"
           onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
</div>
</div>
</div>

<?php include '../footer.php'; ?>
