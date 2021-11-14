<?php
require_once('../config.php');
$username = $_POST['username'];
$password = $_POST['password'];

$queryCekUsername = "SELECT username FROM mahasiswa WHERE username LIKE '$username' AND `password` = '$password'";
$cekUsername = mysqli_query($koneksi, $queryCekUsername);

if (!empty($cekUsername->{'num_rows'})) {
    header('location: ../views/home.php?username=' . $username);
} else {
    header('location: ../views/login.php?status=username_tidak_terdaftar');
}
