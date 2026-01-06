<?php include '../koneksi.php'; ?>
<form method="post">
    <input type="text" name="tipe" placeholder="Tipe PS"><br>
    <input type="number" name="harga" placeholder="Harga per jam"><br>
    <button name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    mysqli_query($koneksi,
        "INSERT INTO playstation VALUES (NULL,'$_POST[tipe]','$_POST[harga]','tersedia')"
    );
    header("Location: index.php");
}
?>
