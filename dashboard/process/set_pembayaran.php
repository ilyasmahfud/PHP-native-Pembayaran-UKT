<?php
require_once('../../config.php');

$username = $_GET['username'];
$nominal = $_POST['nominal'];
$nama_univ = $_POST['id_univ'];
$NIM = $_POST['NIM_user'];

echo $NIM;
$queryCekId = "SELECT NIM FROM pembayaran WHERE NIM LIKE '$NIM'";
$cekId = mysqli_query($koneksi, $queryCekId);

echo $username;
if (!empty($cekId->{'num_rows'})) {
    header('location: ../billing.php?username=' . $username . ' &status=mahasiswa_sudah_ter_set');
} else {
    $queryInput = "INSERT INTO pembayaran ( `NIM`, `nama_univ`, `nominal`,`status`) VALUES ( '$NIM', '$nama_univ', '$nominal','belum dibayar');";
    $queryInput = mysqli_query($koneksi, $queryInput);
    header('location: ../billing.php?username=' . $username . ' &status=berhasil_membuat');
} 
// else {
//     # code...
//     header('location: ../billing.php?username=' . $username . ' &status=gagal_menambah_univ');
// }
