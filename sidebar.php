<?php if (session_status() == PHP_SESSION_NONE) session_start(); ?>

<div class="col-md-2 bg-light min-vh-100 p-3">
<ul class="nav flex-column">
    <li class="nav-item"><a href="dashboard.php" class="nav-link">Dashboard</a></li>

    <?php if ($_SESSION['role']=='admin') { ?>
        <li class="nav-item"><a href="playstation/index.php" class="nav-link">PlayStation</a></li>
        <li class="nav-item"><a href="pelanggan/index.php" class="nav-link">Pelanggan</a></li>
        <li class="nav-item"><a href="transaksi/index.php" class="nav-link">Transaksi</a></li>
    <?php } ?>

    <?php if ($_SESSION['role']=='kasir') { ?>
        <li class="nav-item"><a href="transaksi/index.php" class="nav-link">Transaksi</a></li>
    <?php } ?>

    <?php if ($_SESSION['role']=='owner') { ?>
        <li class="nav-item"><a href="transaksi/index.php" class="nav-link">Laporan</a></li>
    <?php } ?>
</ul>
</div>
