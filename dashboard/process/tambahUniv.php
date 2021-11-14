<?php
require_once('../../config.php');

$username = $_GET['username'];
$NIU = $_GET['NIU'];
$nama_univ = $_GET['nama_univ'];
// $NIU = $_POST[$NIU];
// $nama_univ = $_POST[$nama_univ];

$queryCekId = "SELECT NIU FROM universitas WHERE NIU LIKE '$NIU'";
$cekId = mysqli_query($koneksi, $queryCekId);

echo $username;
if (!empty($cekId->{'num_rows'})) {
    header('location: ../billing.php?username=' . $username . ' &status=univ_sudah_terdaftar');
} else {
    $queryInput = "INSERT INTO universitas ( `NIU`, `nama_univ`) VALUES ( '$NIU', '$nama_univ');";
    $queryInput = mysqli_query($koneksi, $queryInput);
    header('location: ../billing.php?username=' . $username . ' &status=berhasil_menambah_univ');
} 
// else {
//     # code...
//     header('location: ../billing.php?username=' . $username . ' &status=gagal_menambah_univ');
// }
