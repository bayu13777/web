<?php
include '../koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(
    mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id_pelanggan='$id'")
);
?>

<h2>Edit Pelanggan</h2>

<form method="post">
    <input type="text" name="nama" value="<?= $data['nama']; ?>" required><br><br>
    <input type="text" name="no_hp" value="<?= $data['no_hp']; ?>" required><br><br>
    <textarea name="alamat" required><?= $data['alamat']; ?></textarea><br><br>
    <button name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    mysqli_query($koneksi,
        "UPDATE pelanggan SET
            nama='$_POST[nama]',
            no_hp='$_POST[no_hp]',
            alamat='$_POST[alamat]'
         WHERE id_pelanggan='$id'"
    );
    header("Location: index.php");
}
?>

<br>
<a href="index.php">Kembali</a>
