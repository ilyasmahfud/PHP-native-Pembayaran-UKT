<?php
require_once('../config.php');
$getParams = $_GET['username'];
$catatan = $_POST['catatan'];

$foto = $_FILES['bukti_pembayaran']['name'];
$tmp = $_FILES['bukti_pembayaran']['tmp_name'];

$fotobaru = date('dmYHis').$foto;
$path = "../storage/bukti_pembayaran/".$fotobaru;
$link_foto = $path;

$queryGetNIM = "SELECT NIM FROM mahasiswa WHERE username LIKE '$getParams'";
$NIM = mysqli_query($koneksi, $queryGetNIM);
$NIM = mysqli_fetch_array($NIM);
$NIM = $NIM['NIM'];

// echo $path;

// $a = mysqli_query($koneksi, $queryGetNIM);
// print_r ($a); 
// $b = mysqli_fetch_array($a);
// echo $b['NIM'];

$queryInput = "UPDATE pembayaran SET status='sudah membayar', bukti_pembayaran='$path',
catatan='$catatan' WHERE NIM LIKE '$NIM';";

mysqli_query($koneksi, $queryInput);
move_uploaded_file($tmp, $link_foto);


// // echo $getParams;
if (!empty($getParams)) {
    header('location: ../views/pembayaran-success.php?username=' . $getParams);
} else {
    header('location: ../views/pembayaran.php?status=pembayaran_gagal &username='. $getParams);
}
?>