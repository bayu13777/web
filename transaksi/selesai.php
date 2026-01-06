<?php
include '../koneksi.php';
$id = $_GET['id'];

// Ambil id PS
$data = mysqli_fetch_assoc(
    mysqli_query($koneksi, "SELECT id_ps FROM transaksi WHERE id_transaksi='$id'")
);

// Update transaksi
mysqli_query($koneksi, 
    "UPDATE transaksi SET status='selesai' WHERE id_transaksi='$id'"
);

// Update PS jadi tersedia
mysqli_query($koneksi,
    "UPDATE playstation SET status='tersedia' WHERE id_ps='$data[id_ps]'"
);

header("Location: index.php");
