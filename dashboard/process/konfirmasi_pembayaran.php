<?php
require_once('../../config.php');

$username = $_GET['username'];
$id_pembayaran = $_GET['id_pembayaran'];
$mahasiswa = $_GET['mahasiswa'];

$queryInput = "UPDATE pembayaran SET status='sudah terkonfirmasi', confirmed_by='$username' WHERE id='$id_pembayaran'";

print_r($queryInput);
if ($queryInput = mysqli_query($koneksi, $queryInput)) {
    header('location: ../billing.php?username=' . $username . ' &status=' . $mahasiswa . '_terkonfirmasi');
} else {
    # code...
    header(
        'location: ../billing.php?username=' . $username . ' &status=' . $mahasiswa . '_gagal_terkonfirmasi'
    );
}
