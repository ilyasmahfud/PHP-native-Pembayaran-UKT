<?php
require_once('../../config.php');
$username = $_POST['username'];
$password = $_POST['password'];

$queryCekUsername = "SELECT username FROM `admin` WHERE username LIKE '$username' AND `password` = '$password'";
$cekUsername = mysqli_query($koneksi, $queryCekUsername);

print_r($cekUsername);

if (!empty($cekUsername->{'num_rows'})) {
    header('location: ../dashboard.php?username=' . $username);
}
// elseif ($queryInput = mysqli_query($koneksi, $queryUsername)) {
//     header('location: ../index.php?status=success' . $usernam);
// } 
else {
    # code...
    header('location: ../sign-in.php?status=username_tidak_terdaftar');
}
