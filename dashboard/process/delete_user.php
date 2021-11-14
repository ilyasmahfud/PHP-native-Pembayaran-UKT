<?php
require_once('../../config.php');

// tangkap input user
$username = $_GET['username'];
$id = $_GET['NIM'];

echo $id;
echo $username;

$queryCekUsername = "SELECT mahasiswa.nama_mahasiswa FROM mahasiswa WHERE NIM LIKE '$id'";

$hasilQuery = mysqli_query($koneksi, $queryCekUsername);

$data = mysqli_fetch_array($hasilQuery);
$data = $data['nama_mahasiswa'];

$queryDelete = "DELETE FROM mahasiswa WHERE NIM='$id'";

if ($queryDelete = mysqli_query($koneksi, $queryDelete)) {
    header('location: ../tables.php?username=' . $username . ' &status=' . $data . '_dihapus');
} else {
    header('location: ../index.php?status=deleteError');
}
