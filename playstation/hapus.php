<?php
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM playstation WHERE id_ps='$id'");
header("Location: index.php");
?>
