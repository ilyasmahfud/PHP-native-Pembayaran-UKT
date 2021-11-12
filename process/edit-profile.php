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

// $queryCekId = "SELECT id FROM mahasiswa WHERE usern LIKE '$NIM'";
// $cekId = mysqli_query($koneksi , $queryCekId);

$queryInput = "UPDATE mahasiswa SET NIM='$NIM', nama_mahasiswa='$nama_mahasiswa', tgl_lahir='$tgl_lahir', username='$username', email='$email', password='$password', sosmed='$sosmed', id_univ='$id_univ', foto_profil='$path'
WHERE username LIKE '$username';";

mysqli_query($koneksi, $queryInput);

move_uploaded_file($tmp, $link_foto);


// $cekFoto = "SELECT * FROM mahasiswa WHERE username=$username";
// $cekId1 = mysqli_query($koneksi, $cekFoto);
// $data = mysqli_fetch_array($cekId1);
// echo ($cekId1);

// echo $data['foto_profil'];

// print_r ($queryInput);
// echo $cekId->{'num_rows'};
// $hasil = $cekId['num_rows'];
//  ($hasil);


// if (!empty($cekId->{'num_rows'})) {
//     header('location: ../views/register.php?status=NIM_sudah_ada');
// } else
// } elseif (!move_uploaded_file($tmp, $link_foto)) {
    //     echo "Upload foto gagal";
    // } 
    if ($queryInput = mysqli_query($koneksi, $queryInput)) {
        header('location: ../views/user-profile.php?username='.$username);
    }else {
    # code...
    header('location: ../views/user-profile.php?username='.$cekUsername);
    }
?>