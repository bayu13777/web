<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$q = mysqli_query($koneksi,"SELECT * FROM user 
    WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_assoc($q);

if ($data) {
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];
    header("Location: dashboard.php");
} else {
    echo "Login gagal";
}
