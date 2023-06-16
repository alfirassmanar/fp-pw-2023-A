<?php include '../../koneksi.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Fakultas</title>

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
                <li class="breadcrumb-item active">Faklutas</li>
              </ul>
            </nav>
            <h1 class="text-center">Fakultas Universitasku</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
          <form action="#" class="form-search-blog">
            <div class="input-group">
              <div class="input-group-prepend">
                <select id="categories" class="custom-select bg-light">
                  <option>All Fakultas</option>
                  <?php $fakultas = mysqli_query($conn, "SELECT * FROM tbl_fakultas");
                    foreach ($fakultas as $row) {
                    echo "
                    <option>".$row['nama_fakultas']."</option>
                    ";
                    }
                  ?>
                </select>
              </div>
              <input type="text" class="form-control" placeholder="Enter keyword..">
            </div>
          </form>
        </div>
    
      </div>
      <div class="row my-5">
      <?php $fakultas = mysqli_query($conn, "SELECT * FROM tbl_fakultas");
        foreach ($fakultas as $row) {
          echo "
          <div class='col-lg-4 py-3'>
            <div class='card-blog'>
              <div class='header'>
                <div class='post-thumb'>
                  <img src='../assets/img/blog/$row[img_fakultas]' alt=''>
                </div>
              </div>
              <div class='body'>
                <h5 class='post-title'><a href='blog-details.html'>".$row['nama_fakultas']."</a></h5>
                <div class='post-date'>Posted on <a href='#'>27 Jan 2020</a></div>
              </div>
            </div>
          </div>
        
          ";
        }
      
      ?>
      </div>

       


      <nav aria-label="Page Navigation">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>

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