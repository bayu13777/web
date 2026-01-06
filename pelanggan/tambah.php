<?php include '../koneksi.php'; ?>

<h2>Tambah Pelanggan</h2>

<form method="post">
    <input type="text" name="nama" placeholder="Nama" required><br><br>
    <input type="text" name="no_hp" placeholder="No HP" required><br><br>
    <textarea name="alamat" placeholder="Alamat" required></textarea><br><br>
    <button name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    mysqli_query($koneksi, 
        "INSERT INTO pelanggan VALUES (
            NULL,
            '$_POST[nama]',
            '$_POST[no_hp]',
            '$_POST[alamat]'
        )"
    );
    header("Location: index.php");
}
?>

<br>
<a href="index.php">Kembali</a>
