<?php
$koneksi = mysqli_connect("localhost","root","","rental_ps");

if (!$koneksi) {
    die("Koneksi database gagal");
}
