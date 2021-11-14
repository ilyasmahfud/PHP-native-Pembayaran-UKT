<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Pembayaran
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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body class="forms-sections">

  <?php require_once('../config.php');
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
      <a class="navbar-brand" href='home.php?username=<?php echo $_GET['username']; ?>' rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
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
          <li class="nav-item my-auto ms-3 ms-lg-0">
            <a href='user-profile.php?username=<?php echo $_GET['username'] ?>' class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0"> My Profile </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <div class="page-header">
    <div class="position-absolute fixed-top ms-auto w-50 h-100 rounded-3 z-index-0 d-none d-sm-none d-md-block me-n4" style="background-image: url(assets/img/ivancik.jpg); background-size: cover;">
    </div>
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-7 d-flex justify-content-center flex-column">
          <div class="card card-body d-flex justify-content-center shadow-lg p-5 blur align-items-center">
            <h3 class="text-center">Form Pembayaran</h3>
            <form enctype="multipart/form-data" role="form" id="contact-form" method="post" action='../process/pembayaran.php?username=<?php echo $_GET["username"]; ?>' autocomplete="off">
              <?php
              $username = $_GET["username"];
              $queryCekUsername = "SELECT mahasiswa.NIM AS NIM, mahasiswa.nama_mahasiswa AS nama, pembayaran.nominal AS nominal, pembayaran.status AS status_pembayaran FROM mahasiswa JOIN pembayaran 
                ON pembayaran.NIM = mahasiswa.NIM AND username = '$username'";

              $hasilQuery = mysqli_query($koneksi, $queryCekUsername);
              $data = mysqli_fetch_array($hasilQuery);

              // echo $hasilQuery->{'num_rows'};
              if ($hasilQuery->{'num_rows'} === 0) {
                $queryCekUsername = "SELECT NIM, nama_mahasiswa AS nama
                FROM mahasiswa WHERE username LIKE '$username'";

                $hasilQueri = mysqli_query($koneksi, $queryCekUsername);
                $data = mysqli_fetch_array($hasilQueri);
                // $data['nominal'] == "univ_belum_pembukaan";
              }
              // print_r($hasilQuery);
              ?>

              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <label>NIM</label>
                    <div class="input-group mb-4">
                      <input value='<?php echo $data['NIM'] ?>' disabled class="form-control" placeholder="" aria-label="First Name..." type="text">
                    </div>
                  </div>
                  <div class="col-md-6 ps-2">
                    <label>Nama Mahasiswa</label>
                    <div class="input-group">
                      <input value='<?php echo $data['nama'] ?>' disabled type="text" class="form-control" placeholder="" aria-label="Last Name...">
                    </div>
                  </div>
                </div>

                <div class="mb-4">
                  <label>Nominal</label>
                  <div class="input-group">
                    <?php
                    if ($hasilQuery->{'num_rows'} === 0) {
                      echo "<input disabled value='Belum waktunya pembayaran' type='number' class='form-control' placeholder='Hubungi universitasmu'>";
                    }
                    ?>
                    <input disabled value='<?php echo $data['nominal'] ?>' type="number" class="form-control" placeholder="">
                  </div>
                </div>

                <!-- <div class="card-body"> -->
                <div class="row">
                  <div class="col-md-6">
                    <label>Status</label>
                    <div class="input-group mb-4">
                      <!-- echo "<input value='". $status."' disabled class='form-control bg-gradient-danger' aria-label='First Name...' type='text'>"; -->
                      <?php
                      if ($hasilQuery->{'num_rows'} === 0) {
                        $status = "belum waktunya membayar";
                        echo "<span class='badge bg-gradient-info p-2'>" . $status . "</span>";
                      } else {
                        if ($data['status_pembayaran'] === "belum dibayar") {
                          $status = "Belum dibayar";
                          echo "<span class='badge bg-gradient-danger p-2'>" . $status . "</span>";
                        } elseif ($data['status_pembayaran'] === "sudah membayar") {
                          $status = "sudah dibayar";
                          echo "<span class='badge bg-gradient-warning p-2'>" . $status . "</span>" . "<hr>";
                          echo "<span class='badge bg-gradient-info p-2'>Belum dikonfirmasi</span>";
                        } elseif ($data['status_pembayaran'] === "sudah terkonfirmasi") {
                          $status = "sudah terkonfirmasi";
                          echo "<span class='badge bg-gradient-success p-2'>" . $status . "</span>";
                        }
                      }
                      ?>
                    </div>

                  </div>
                  <div class="col-md-6 ps-2">
                    <label for="Nama">Bukti Pembayaran</label>
                    <div class="custom-file">
                      <?php
                      if ($hasilQuery->{'num_rows'} === 0) {
                        echo "<input disabled name='bukti_pembayaran' type='file' class='btn btn-light' id='customFile'>
                        <style>
                          #customFile {
                            
                            font-size: 11px;
                          }
                        </style>
                        ";
                      } else {
                        echo "<input name='bukti_pembayaran' type='file' class='btn btn-light' id='customFile'>
                        <style>
                          #customFile {
                            
                            font-size: 11px;
                          }
                        </style>
                        ";
                      }
                      ?>
                      <!-- <input style="font-size:12px" name="bukti_pembayaran" type="file" class="btn btn-light" id="customFile"> -->
                      <!-- <label class="custom-file-label" for="customFile">Choose image</label> -->
                    </div>
                  </div>
                </div>

                <div class="form-group mb-4">
                  <label>Catatan</label>
                  <?php
                  if ($hasilQuery->{'num_rows'} === 0) {
                    echo "<textarea disabled name='catatan' class='form-control' id='message' rows='4'></textarea>";
                  } else {
                    echo "<textarea name='catatan' class='form-control' id='message' rows='4'></textarea>";
                  }
                  ?>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <!-- <div class="form-check form-switch mb-4">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="">
                      <label class="form-check-label" for="flexSwitchCheckDefault">I agree to the <a href="javascript:;" class="text-dark"><u>Terms and Conditions</u></a>.</label>
                    </div> -->
                  </div>
                  <div class="col-md-12">
                    <?php
                    if ($hasilQuery->{'num_rows'} === 0) {
                      echo "<button disabled type='submit' class='btn bg-gradient-primary w-100'>Lakukan Pembayaran</button>";
                    } else {
                      echo "<button type='submit' class='btn bg-gradient-primary w-100'>Lakukan Pembayaran</button>";
                    }
                    ?>
                    <!-- <button type="submit" class="btn bg-gradient-primary w-100">Lakukan Pembayaran</button> -->
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">

      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Soft by Creative Tim.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/prism.min.js"></script>
  <script src="assets/js/plugins/highlight.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="assets/js/soft-design-system.min.js?v=1.0.5" type="text/javascript"></script>
</body>

</html>