<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Edit Profil
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-design-system.css?v=1.0.5" rel="stylesheet" />

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body class="sign-in-illustration">
  <?php
  $cek = count($_GET);
  $status = $_GET['username'];
  if ($cek > 0) {
    $status = $_GET['username'];
    # code...
    if (!(empty($status))) {
    }
  } else {
    header('location: landing-page.php');
  }
  ?>
  <!-- Navbar Light -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container">
      <a class="navbar-brand" href="home.html" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
        Home
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
        <ul class="navbar-nav navbar-nav-hover w-100">
          <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-5">
            <!-- <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages5" data-bs-toggle="dropdown" aria-expanded="false">
              Pages
              <img src="assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1">
            </a> -->
            <div class="dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages5">

            </div>
          </li>
          <li class="nav-item dropdown dropdown-hover mx-2">
            <!-- <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
              Blocks
              <img src="assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1">
            </a> -->
            <ul class="dropdown-menu dropdown-menu-animation dropdown-lg dropdown-lg-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">

            </ul>
          </li>
          <li class="nav-item dropdown dropdown-hover mx-2">
            <!-- <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
              Docs
              <img src="assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1">
            </a> -->
            <ul class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">

            </ul>
          </li>
          <li class="nav-item ms-lg-auto">
            <!-- <a class="nav-link nav-link-icon me-2" href="https://github.com/creativetimofficial/soft-ui-design-system" target="_blank">
              <i class="fa fa-github me-1"></i>
              <p class="d-inline text-sm z-index-1 font-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Star us on Github">Github</p>
            </a> -->
          </li>
          <!-- <li class="nav-item my-auto ms-3 ms-lg-0">
            <a href="login.html" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0"> Masuk </a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>

  <section>
    <section>
      <div class="container py-4">
        <div class="row">
          <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
            <div class="card d-flex justify-content-center p-4 shadow-lg">
              <div class="text-center">
                <h3 class="text-gradient text-primary">Edit Profile</h3>
                <!-- <p class="mb-0">
                    Dapatkan kemudahan dalam melakukan pembayaran ke kampus anda
                  </p> -->
                <?php
                require_once('../config.php');

                $username = $_GET['username'];

                $queryCekUsername = "SELECT `NIM`, `nama_mahasiswa`, `tgl_lahir`, `username`, `email`, `password`, `sosmed`, `id_univ`,`foto_profil` 
                    FROM mahasiswa WHERE username='$username'";

                $cekId1 = mysqli_query($koneksi, $queryCekUsername);
                $data = mysqli_fetch_array($cekId1);
                ?>
              </div>
              <div class="card card-plain">
                <form role="form" id="contact-form" method="post" action="../process/edit-profile.php?username=<?php echo $data['username'] ?>" enctype="multipart/form-data" autocomplete="off">
                  <div class="card-body pb-2">
                    <div class="row">
                      <div class="form-group mb-4 mt-md-0" align="center">
                        <label for="Nama">Foto Profil</label>
                        <div class="custom-file">
                          <input name="foto_profil" value="<?php echo $data['foto_profil'] ?> " type="file" class="btn btn-primary" id="customFile">
                          <!-- <label class="custom-file-label" for="customFile">Choose image</label> -->
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label>Nama Lengkap</label>
                        <div class="input-group mb-4">
                          <input name="nama_mahasiswa" value="<?php echo $data['nama_mahasiswa'] ?>" class="form-control" placeholder="Full Name" aria-label="Full Name" type="text">
                        </div>
                      </div>
                      <div class="col-md-6 ps-md-2">
                        <label>NIM</label>
                        <input name="NIM" value="<?php echo $data['NIM'] ?>" type="text" class="form-control" placeholder="Nomor Induk Mahasiswa">
                      </div>
                    </div>
                    <div class="form-group mb-4 mt-md-0">
                      <label>Email</label>
                      <div class="input-group">
                        <input name="email" value="<?php echo $data['email'] ?>" type="email" class="form-control" placeholder="hello@creative-tim.com">
                      </div>
                    </div>
                    <div class="form-group mb-4 mt-md-0">
                      <label>Tanggal Lahir</label>
                      <input name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>" class="form-control" type="date" id="datePicker" name="tgl_lahir" placeholder="">
                    </div>
                    <div class="form-group mb-4 mt-md-0">
                      <label>Nama Pengguna</label>
                      <input name="username" value="<?php echo $data['username'] ?>" type="text" class="form-control" placeholder="Username" aria-label="Last Name...">
                    </div>
                    <div class="form-group mb-4 mt-md-0">
                      <label>Kata Sandi</label>
                      <input name="password" value="<?php echo $data['password'] ?>" type="password" class="form-control" placeholder="Password" aria-label="Last Name...">
                    </div>
                    <div class="form-group mb-4 mt-md-0">
                      <label>Instagram</label><br>
                      <small>Dengan mengisi sosial media,berarti anda siap untuk memberitahu dunia sosial media anda. cie terkenal!</small>
                      <input name="sosmed" value="<?php echo $data['sosmed'] ?>" type="text" class="form-control" placeholder="Sosial Media" aria-label="Last Name...">
                    </div>
                    <div class="form-group mb-4 mt-md-0">
                      <label for="exampleFormControlSelect1">Universitas</label>
                      <select class="form-control" value="<?php echo $data['id_univ'] ?>" id="exampleFormControlSelect1" name="id_univ">
                        <?php
                        require_once('../config.php');

                        $username = $_GET['username'];

                        $queryCekUsername = "SELECT universitas.NIU AS NIU, universitas.nama_univ AS univ FROM mahasiswa JOIN universitas ON universitas.NIU = mahasiswa.id_univ AND username = '$username'";

                        $hasilQuery = mysqli_query($koneksi, $queryCekUsername);
                        $data = mysqli_fetch_array($hasilQuery);

                        echo "<option value='" . $data['NIU'] . "' name='id_univ' selected>" . $data['univ'] . "</option>";
                        ?>
                        <?php
                        $query = "SELECT NIU, nama_univ FROM universitas ORDER BY NIU ASC";

                        if ($query = mysqli_query($koneksi, $query)) {
                          while ($data = mysqli_fetch_array($query)) {
                            echo "<option value='" . $data['NIU'] . "' name='id_univ'>" . $data['nama_univ'] . "</option>";
                          }
                        } else {
                          echo "<option value='' name='id_univ'>Error</option>";
                        }
                        ?>
                      </select>
                    </div>

                    <div class="row">
                      <div class="col-md-12 text-center">
                        <button type="submit" class="btn bg-gradient-primary mt-3 mb-0">Simpan Perubahan</button>
                      </div>
                      <div class="card-footer text-center pt-0 px-lg-2 px-1 mt-2">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="assets/js/soft-design-system.min.js?v=1.0.5" type="text/javascript"></script>
</body>

</html>