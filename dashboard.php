<?php
include 'auth.php';
include 'koneksi.php';
include 'header.php';
include 'navbar.php';
?>

<div class="container-fluid">
<div class="row">
<?php include 'sidebar.php'; ?>

<div class="col-md-10 p-4">
<h3>Dashboard</h3>
<p>Login sebagai: <b><?= $_SESSION['role']; ?></b></p>

<div class="row">
<div class="col-md-4">
<div class="card bg-primary text-white p-3">
<h5>PlayStation</h5>
<?= mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM playstation")); ?>
</div>
</div>

<div class="col-md-4">
<div class="card bg-success text-white p-3">
<h5>Pelanggan</h5>
<?= mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pelanggan")); ?>
</div>
</div>

<div class="col-md-4">
<div class="card bg-warning text-dark p-3">
<h5>Transaksi</h5>
<?= mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM transaksi")); ?>
</div>
</div>
</div>

</div>
</div>
</div>

<?php include 'footer.php'; ?>
