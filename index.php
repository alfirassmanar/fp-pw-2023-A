<?php 
include 'koneksi.php'; 
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Universitasku</title>

  <link rel="stylesheet" href="./assets/css/maicons.css">

  <link rel="stylesheet" href="./assets/css/bootstrap.css">

  <link rel="stylesheet" href="./assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="./assets/css/theme.css">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <a href="#" class="navbar-brand">Universitas<span class="text-primary">ku.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./views/vAkademik.php">Akademik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./views/vFasilitas.php">Fasilitas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./views/vPengumuman.php">Pengumuman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./admin/">Admin</a>
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
      <div class="page-banner home-banner" style="background-image: url(./assets/img/carousel-2.png);">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4">Selamat Datang di Universitasku</h1>
            <p class="text-lg text-black mb-5">Memiliki 5 Fakultas Terakreditasi A di Indonesia</p>
            <a href="https://www.upnjatim.ac.id/vtour/" class="btn btn-primary btn-split">Campus tour <div class="fab"><span class="mai-play"></span></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="../assets/img/banner_image_1.svg" alt="">
            </div>
          </div>
        </div>
        <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
      </div>
    </div>
  </header>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="../assets/img/services/service-1.svg" alt="">
            </div>
            <div class="body" style="margin-top: -50px;">
              <h5 class="text-secondary">Cara Pendaftaran</h5>
              <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias necessitatibus fuga pariatur.</p> -->
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="../assets/img/services/service-2.svg" alt="">
            </div>
            <div class="body" style="margin-top: -50px;">
              <h5 class="text-secondary">Persyaratan Pendaftaran</h5>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ipsum fuga expedita.</p> -->
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4" style="margin-top: -50px;">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="../assets/img/services/service-3.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Informasi Biaya</h5>
              <!-- <p>Lorem ipsum dolor sit, amet consectestur adipisicing elit. Ratione dolore esse debitis facilis saepe.</p> -->
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <span class="subhead">Tentang Universitas</span>
          <h2 class="title-section">Universitasku, Calon Penerus Bangsa Indonesia.</h2>
          <div class="divider"></div>

          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
          <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
          <a href="about.html" class="btn btn-primary mt-3">Read More</a>
        </div>
        <div class="col-lg-6 py-3 wow fadeInRight">
          <div class="img-fluid py-3 text-center">
            <img src="../assets/img/about_frame.png" alt="">
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Fakultas</div>
        <h2 class="title-section">Daftar Fakultas Universitasku</h2>
        <div class="divider mx-auto"></div>
      </div>

    
      <div class='row'>
      <?php
        $fakultas = mysqli_query($conn, "SELECT * FROM tbl_fakultas");
     
        foreach ($fakultas as $row){
        echo "<div class='col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn'>
                <div class='features'>
                  <div class='header mb-3'>
                    <span class='mai-business'></span>
                  </div>
                  <h5>".$row['nama_fakultas']."</h5>
                  <p>We analyse your website's structure, internal architecture & other key</p>
                </div>
              </div>";
        }
        ?>
         

    </div> <!-- .container -->
  </div> <!-- .page-section -->


  <footer class="page-footer bg-image" style="background-color:aliceblue;">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-5 py-3">
          <h3 style="color: gray;">Universitasku</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero amet, repellendus eius blanditiis in iusto eligendi iure.</p>

          <div class="social-media-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#"><span class="mai-logo-instagram"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
          </div>
        </div>
    
      </div>
    </div>
  </footer>

<script src="./assets/js/jquery-3.5.1.min.js"></script>

<script src="./assets/js/bootstrap.bundle.min.js"></script>

<script src="./assets/js/google-maps.js"></script>

<script src="./assets/vendor/wow/wow.min.js"></script>

<script src="./assets/js/theme.js"></script>
  
</body>
</html>