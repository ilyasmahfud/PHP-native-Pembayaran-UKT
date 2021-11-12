<?php
require_once('../config.php');

$cekUsername = $_GET['username'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$NIM = $_POST['NIM'];
$email = $_POST['email'];
$tgl_lahir = $_POST['tgl_lahir'];
$username = $_POST['username'];
$password = $_POST['password'];
$sosmed = $_POST['sosmed'];
$id_univ = $_POST['id_univ'];

$foto = $_FILES['foto_profil']['name'];
$tmp = $_FILES['foto_profil']['tmp_name'];

$fotobaru = date('dmYHis').$foto;
$path = "../storage/".$fotobaru;
$link_foto = $path;


$queryInput = "INSERT INTO mahasiswa ( `NIM`, `nama_mahasiswa`, `tgl_lahir`, `username`, `email`, `password`, `sosmed`,`id_univ`,`foto_profil`) 
VALUES ( '$NIM', '$nama_mahasiswa', '$tgl_lahir', '$username', '$email', '$password', '$sosmed','$id_univ','$path');";

$queryCekId = "SELECT NIM FROM mahasiswa WHERE NIM LIKE '$NIM'";
$cekId = mysqli_query($koneksi, $queryCekId);

// print_r ($cekId);
// echo $cekId->{'num_rows'};
// $hasil = $cekId['num_rows'];
//  ($hasil);


if (!empty($cekId->{'num_rows'})) {
    header('location: ../views/register.php?status=NIM_sudah_ada');
} else
    if ($queryInput = mysqli_query($koneksi, $queryInput)) {
    header('location: ../views/login.php?status=success');
} else {
    # code...
    header('location: ../views/register.php?status=error');
}
