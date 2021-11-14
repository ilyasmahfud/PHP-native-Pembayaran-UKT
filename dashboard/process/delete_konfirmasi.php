<?php
require_once('../../config.php');

$username = $_GET['username'];
$id_pembayaran = $_GET['id_pembayaran'];

$queryInput = "UPDATE pembayaran SET status='belum dibayar', confirmed_by='$username' ,bukti_pembayaran='', catatan='bukti pembayaran tidak valid' WHERE id='$id_pembayaran';";

print_r($queryInput);
if ($queryInput = mysqli_query($koneksi, $queryInput)) {
    header('location: ../billing.php?username=' . $username . ' &status=bukti_pembayaran_tidak_valid');
} else {
    # code...
    header('location: ../billing.php?username=' . $username . ' &status=error');
}
