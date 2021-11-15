<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    My Profile
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
</head>

<body class="blog-author bg-gray-100">

  <?php
  $cek = count($_GET);
  $status = $_GET['username'];
  if ($cek > 0) {
    $status = $_GET['username'];
    # code...
    if (!(empty($status))) {
      if (!(empty($status))) {
        if (!(empty($status))) {
        }
      }
    }
  } else {
    header('location: landing-page.php');
  }
  ?>

  <!-- Navbar Light -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container">
      <a class="navbar-brand" href='home.php?username=<?php echo $_GET['username'] ?>' rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
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

              <div class="row d-lg-none">

              </div>
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
          <li class="nav-item my-auto ms-3 ms-lg-0">
            <a href='login.php?' class="btn btn-sm  bg-gradient-danger  btn-round mb-0 me-1 mt-2 mt-md-0"> Keluar </a>
          </li>
          </li>
          <li class="nav-item my-auto ms-3 ms-lg-0">
            <a href='pembayaran.php?username=<?php echo $_GET["username"] ?>' class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0"> Bayar </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!-- START Testimonials w/ user image & text & info -->
  <section class="py-sm-7 position-relative">
    <?php
    require_once('../config.php');

    $username = $_GET['username'];

    $queryCekUsername = "SELECT * FROM mahasiswa JOIN universitas ON universitas.NIU = mahasiswa.id_univ AND username = '$username'";

    $hasilQuery = mysqli_query($koneksi, $queryCekUsername);
    $data = mysqli_fetch_array($hasilQuery);
    // echo (mysqli_fetch_array($hasilQuery));

    // print_r($queryCekUsername);
    // echo"<br>";
    // print_r($hasilQuery);
    // echo"<br>";
    // print_r($data);
    // echo $data['NIM'];    
    // echo $data['foto_profil'];
    ?>
    <div class="container">
      <div class="row">
        <div class="col-12 mx-auto">
          <div class="row py-lg-7 py-5">
            <div class="col-lg-3 col-md-5 position-relative my-auto">
              <img class="img border-radius-lg max-width-200 w-100 position-relative z-index-2" src="<?php echo $data['foto_profil'] ?>" alt="foto <?php echo $data['nama_mahasiswa'] ?> belum diupdate">
            </div>
            <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h4 class="mb-0"><?php echo $data['nama_mahasiswa'] ?></h4>
                <div class="d-block">
                  <a href="edit-profile.php?username=<?php echo $data['username'] ?>">
                    <button type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0">Edit Profile</button>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-auto">
                  <span class="h6">Username : </span>
                  <span><?php echo $data['username'] ?></span>
                </div>
              </div>
              <div class="row">
                <div class="col-auto">
                  <span class="h6">NIM : </span>
                  <span><?php echo $data['NIM'] ?></span>
                </div>
                <!-- <div class="col-auto">
                  <span class="h6">3.5k</span>
                  <span>Followers</span>
                </div>
                <div class="col-auto">
                  <span class="h6">260</span>
                  <span>Following</span>
                </div> -->
              </div>
              <div class="row">
                <div class="col-auto">
                  <span class="h6">Perguruan Tinggi : </span>
                  <span><?php echo $data['nama_univ'] ?></span>
                </div>
              </div>
              <div class="row">
                <div class="col-auto">
                  <span class="h6">E-mail : </span>
                  <span><?php echo $data['email'] ?></span>
                </div>
              </div>
              <div class="row">
                <div class="col-auto">
                  <span class="h6">Tanggal Lahir : </span>
                  <span><?php echo $data['tgl_lahir'] ?></span>
                </div>
              </div>
              <div class="row">
                <div class="col-auto">
                  <span class="h6">Instagram : </span>
                  <span><?php echo $data['sosmed'] ?></span>
                </div>
              </div>
              <p class="text-lg mb-0">

              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END Testimonials w/ user image & text & info -->
  <!-- START Blogs w/ 4 cards w/ image & text & link -->
  <section class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="">Riwayat Pembayaran</h3>
        </div>
      </div>

    </div>
  </section>
  <!-- END Blogs w/ 4 cards w/ image & text & link -->
  <section class="py-lg-7">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card overflow-hidden mb-1">
            <div class="row">
              <div class="col-lg-7">
                <form class="p-3" id="contact-form" method="post">

                  <table class="table">
                    <!-- <caption>List of users</caption> -->
                    <tr>
                      <th>Perubahan Terakhir</th>
                      <th>Catatan</th>
                      <th>Nominal</th>
                      <th>Status</th>
                    </tr>
                    <?php
                    $NIM = $data['NIM'];
                    $queryGetHistory = "SELECT * FROM pembayaran WHERE NIM LIKE '$NIM'";
                    $cek = mysqli_query($koneksi, $queryGetHistory);

                    if ($query = mysqli_query($koneksi, $queryGetHistory)) {
                      while ($data = mysqli_fetch_array($query)) {
                        if ($data['status'] === "belum dibayar") {
                          # code...
                          echo "
                                  <tr>
                                      <td>" . $data['updated_at'] . "</td>
                                      <td>" . $data['catatan'] . "</td>
                                      <td>" . $data['nominal'] . "</td>
                                      <td><span class='badge bg-gradient-danger p-2'>" . $data['status'] . "</span></td>
                                  </tr>
                                  ";
                        } elseif ($data['status'] === "sudah membayar") {
                          # code...
                          echo "
                                  <tr>
                                      <td>" . $data['updated_at'] . "</td>
                                      <td>" . $data['catatan'] . "</td>
                                      <td>" . $data['nominal'] . "</td>
                                      <td><span class='badge bg-gradient-warning p-2'>" . $data['status'] . "</span></td>
                                  </tr>";
                          echo "
                                  <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td><span class='badge bg-gradient-info p-2'>belum dikonfirmasi</span></td>
                                  </tr>
                                  ";
                        } elseif ($data['status'] === "sudah membayar") {
                          # code...
                          echo "
                                  <tr>
                                      <td>" . $data['updated_at'] . "</td>
                                      <td>" . $data['catatan'] . "</td>
                                      <td>" . $data['nominal'] . "</td>
                                      <td><span class='badge bg-gradient-succes p-2'>sudah dikonfirmasi</span></td>
                                  </tr>";
                        }
                      }
                    } else {
                      echo "
                              <tr>
                                  <td colspan=8>Data tidak ditemukan</td>
                              </tr>
                              ";
                    }
                    ?>
                  </table>

                </form>
              </div>
              <div class="col-lg-5 position-relative bg-cover px-0" style="background-image: url('assets/img/curved-images/curved5.jpg')">
                <div class="position-absolute z-index-2 w-100 h-100 top-0 start-0 d-lg-block d-none">
                  <img src="assets/img/wave-1.svg" class="h-100 ms-n2" alt="vertical-wave">
                </div>
                <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                  <div class="mask bg-gradient-info opacity-9"></div>
                  <div class="p-5 ps-sm-8 position-relative text-start my-auto z-index-2">
                    <h3 class="text-white">Contact Information</h3>
                    <p class="text-white opacity-8 mb-4">
                      Lets contact us!
                    </p>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-phone text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">(+40) 772 100 200</span>
                      </div>
                    </div>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-envelope text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">hello@creative-tim.com</span>
                      </div>
                    </div>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-map-marker-alt text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">Dyonisie Wolf Bucharest, RO 010458</span>
                      </div>
                    </div>
                    <div class="mt-4">
                      <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Facebook">
                        <i class="fab fa-facebook"></i>
                      </button>
                      <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Twitter">
                        <i class="fab fa-twitter"></i>
                      </button>
                      <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Dribbble">
                        <i class="fab fa-dribbble"></i>
                      </button>
                      <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Instagram">
                        <i class="fab fa-instagram"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- -------- END FOOTER 5 w/ DARK BACKGROUND ------- -->
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/parallax.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="assets/js/soft-design-system.min.js?v=1.0.5" type="text/javascript"></script>
</body>

</html>