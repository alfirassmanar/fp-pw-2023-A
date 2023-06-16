<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Pengumuman - Home</title>

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
              <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../views/vAkademik.php">Akademik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../views/vFasilitas.php">Fasilitas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../views/vPengumuman.php">Pengumuman</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="../views/vInformasi.php">Informasi</a>
            </li> -->
            <li class="nav-item">
            <a class='btn btn-primary ml-lg-2' href='./views/Login/daftar.php'>Registrasi</a>
            <a class='btn btn-success ml-lg-2' href='./views/Login/login.php'>Masuk</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </header>

  <div class="page-section pt-5">
    <div class="container">
      <nav aria-label="Breadcrumb">
        <ul class="breadcrumb p-0 mb-0 bg-transparent">
          <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="../views/vAkademik.php">Akademik</a></li>
          <li class="breadcrumb-item active">Pengumuman</li>
        </ul>
      </nav>
      
      <div class="row">
        <div class="col-lg-8">
          <div class="blog-single-wrap">
            <div class="header">
              <div class="post-thumb">
                <img src="../assets/img/blog/pengumuman.jpg" alt="">
              </div>
              <div class="meta-header">
                <div class="post-author">
                  <div class="avatar">
                    <img src="../assets/img/person/rektor.jpeg" alt="">
                  </div>
                  Rekor 2023 : <a href="#">Dr. Ir. Akhmad Fauzi, MMT.,IPU</a>
                </div>

                <div class="post-sharer">
                  <a href="#" class="btn social-facebook"><span class="mai-logo-facebook-f"></span></a>
                  <a href="#" class="btn social-twitter"><span class="mai-logo-twitter"></span></a>
                  <a href="#" class="btn social-linkedin"><span class="mai-logo-linkedin"></span></a>
                  <a href="#" class="btn"><span class="mai-mail"></span></a>
                </div>
              </div>
            </div>
            <h1 class="post-title">Second divided from form fish beastr</h1>
            <div class="post-meta">
              <div class="post-date">
                <span class="icon">
                  <span class="mai-person-outline"></span>
                </span> <a href="#">
                  <?php 
                  date_default_timezone_set('Asia/Jakarta');
                  echo date('l, d-m-Y');
                  ?>
                </a>
              </div>
              <div class="post-comment-count ml-2">
                <span class="icon">
                  <span class="mai-time-outline"></span>
                </span> <a href="#">
                  <?php
                    date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
                    echo date('h:i:s a'); // menampilkan jam sekarang
                  ?>
                </a>
              </div>
            </div>
            <div class="post-content">
              <b><h4 class="mai-time-outline"> PEMBERITAHUAN KONVERSI MBKM SEMESTER GENAP TA.2022/2023</h4></b>
              <a href="https://siamik.upnjatim.ac.id/html/siamik/umum/PEMBERITAHUAN_EDIT_KONVERSI_GENAP_2022_2023.pdf"><p><div class="btn btn-sm btn-primary">View Pengumuman</div></p></a>
              <b><p><span style="color: red;">Mahasiswa dapat melihat hasil konversi lewat akun siamik, menggunakan</span><a href="#"> server 01</a></p></b>

              <blockquote class="quote">SELAMAT DATANG!
              <p>Home Kampusku (Sistem Informasi Akademik) Adalah suatu sistem informasi untuk memberikan informasi kepada mahasiswa baru dan informasi umum terkait universitasku.
              PERTOR BIDANG 1
              PERTOR NO.9 Tahun 2020</p>
              <span class="author">― Universitasku 2023</span></blockquote>

              <b><h4 class="mai-time-outline"> PENGUMUMAN LIBUR DAN CUTI BERSAMA MAHASISWA</h4></b>
              <a href="https://siamik.upnjatim.ac.id/html/siamik/umum/PENGUMUMAN_LIBUR_DAN_CUTI_BERSAMA_MAHASISWA.pdf"><p><div class="btn btn-sm btn-primary">View</div></p></a>
              <p></p>
            </div>
          </div>

          <a href="#" style="color: orange;">More</a>

          <div class="comment-form-wrap pt-5">
            <h2 class="mb-5">Leave a comment</h2>
            <form action="#" class="">
              <div class="form-row form-group">
                <div class="col-md-6">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="col-md-6">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website">
              </div>
  
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Post Comment" class="btn btn-primary">
              </div>
  
            </form>
          </div>

        </div>
        <div class="col-lg-4">
          <div class="widget">
            <!-- Widget search -->
            <div class="widget-box">
              <form action="#" class="search-widget">
                <input type="text" class="form-control" placeholder="Enter keyword..">
                <button type="submit" class="btn btn-primary btn-block">Search</button>
              </form>
            </div>

            <!-- Widget Categories -->
            <div class="widget-box">
              <h4 class="widget-title">Fakultas</h4>
              <div class="divider"></div>
              <?php $fPengumuman = mysqli_query($conn, "SELECT * FROM tbl_fakultas") ?>
              <?php foreach ($fPengumuman as $row) {
                echo "
                <ul class='categories'>
                   <li><a href='#'>".$row['nama_fakultas']."</a></li>
                </ul>
                ";
              }?>
              </div>
             

            <!-- Widget recent post -->
            <div class="widget-box">
              <h4 class="widget-title">Recent Post</h4>
              <div class="divider"></div>
              <?php foreach ($fPengumuman as $row) {
                echo "
                <div class='blog-item'>
                <a class='post-thumb' href=''>
                    <img src='../assets/img/blog/$row[img_fakultas]' alt=''>
                  </a>
                  <div class='content'>
                    <h6 class='post-title'><a href='#'>".$row['nama_fakultas']."</a></h6>
                    <div class='meta'>
                      <a href='#'><span class='mai-calendar'>".
                      date_default_timezone_set('Asia/Jakarta');
                      echo date(' l, d-m-Y')."</span></a>
                      <a href='#'><span class='mai-person'></span> Admin</a>
                      <a href='#'><span class='mai-chatbubbles'>".
                      date_default_timezone_set('Asia/Jakarta');
                      echo date(' h:i:s a')
                      ."</span></a>
                    </div>
                  </div>
                  </div>
                ";
              }?>

            </div>

            <!-- Widget Tag Cloud -->
            <div class="widget-box">
              <h4 class="widget-title">Prodi</h4>
              <div class="divider"></div>
              <div class="tag-clouds">
              <?php $pPengumuman = mysqli_query($conn, "SELECT * FROM tbl_prodi") ?>
               <?php foreach ($pPengumuman as $row) {
                echo "
                <a href='#' class='tag-cloud-link'>".$row['program_studi']."</a>
                ";
               } ?> 
               
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>

  <?php include '../views/footer.php'; ?>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>