<?php
include '../koneksi.php';

// Ambil pelanggan
$pelanggan = mysqli_query($koneksi, "SELECT * FROM pelanggan");

// Ambil PS yang tersedia
$ps = mysqli_query($koneksi, 
    "SELECT * FROM playstation WHERE status='tersedia'"
);
?>

<h2>Tambah Transaksi Rental</h2>

<form method="post">
    <label>Pelanggan</label><br>
    <select name="id_pelanggan" required>
        <option value="">-- Pilih Pelanggan --</option>
        <?php while ($p = mysqli_fetch_assoc($pelanggan)) { ?>
            <option value="<?= $p['id_pelanggan']; ?>">
                <?= $p['nama']; ?>
            </option>
        <?php } ?>
    </select>
    <br><br>

    <label>PlayStation</label><br>
    <select name="id_ps" required>
        <option value="">-- Pilih PlayStation --</option>
        <?php while ($d = mysqli_fetch_assoc($ps)) { ?>
            <option value="<?= $d['id_ps']; ?>">
                <?= $d['tipe_ps']; ?> - Rp <?= $d['harga_jam']; ?>/jam
            </option>
        <?php } ?>
    </select>
    <br><br>

    <label>Durasi (Jam)</label><br>
    <input type="number" name="durasi" required>
    <br><br>

    <button name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {

    // Ambil harga PS
    $id_ps = $_POST['id_ps'];
    $durasi = $_POST['durasi'];

    $ps_data = mysqli_fetch_assoc(
        mysqli_query($koneksi, "SELECT harga_jam FROM playstation WHERE id_ps='$id_ps'")
    );

    $total = $ps_data['harga_jam'] * $durasi;

    // Simpan transaksi
    mysqli_query($koneksi, "
        INSERT INTO transaksi VALUES (
            NULL,
            '$_POST[id_ps]',
            '$_POST[id_pelanggan]',
            '$durasi',
            '$total',
            'aktif',
            NOW()
        )
    ");

    // Update status PS
    mysqli_query($koneksi, 
        "UPDATE playstation SET status='disewa' WHERE id_ps='$id_ps'"
    );

    header("Location: index.php");
}
?>

<br>
<a href="index.php">Kembali</a>
