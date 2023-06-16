<?php include '../../koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Fasilitas - Home</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>
  
  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="300">
      <div class="container">
        <a href="#" class="navbar-brand">Universitas<span class="text-primary">ku.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
              <a class="nav-link" href="../home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./views/vUser/vAkademik.php">Akademik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./views/vUser/vFasilitas.php">Fasilitas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./views/vUser/vPengumuman.php">Pengumuman</a>
            </li>
            <li class="nav-item">
            <a class='btn btn-primary ml-lg-2' href='./views/Login/daftar.php'>Registrasi</a>
            <a class='btn btn-success ml-lg-2' href='./views/Login/login.php'>Masuk</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item active">Fasilitas</li>
              </ul>
            </nav>
            <h1 class="text-center">Fasilitas Universitasku</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service">
            <div class="header">
              <img src="../assets/img/services/service-1.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Online Learning</h5>
              <p>Untuk informasi lebih lanjut klik tombol di bawah ini</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service">
            <div class="header">
              <img src="../assets/img/services/service-2.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Pusat Perbantuan</h5>
              <p>Untuk informasi lebih lanjut klik tombol di bawah ini</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service">
            <div class="header">
              <img src="../assets/img/services/service-3.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Luring Learning</h5>
              <p>Untuk informasi lebih lanjut klik tombol di bawah ini</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <?php include '../views/footer.php'; ?>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>