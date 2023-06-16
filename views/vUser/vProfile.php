<?php 
include '../../koneksi.php'; 
include '../views/header.php'; 
// include '../index.php'; 
ob_start();
session_start();

if(isset($_GET['id_user'])){
    $id_user    =$_GET['id_user'];
}
else {
    die ("Error. No ID Selected!");    
}
$query  = mysqli_query($conn, "SELECT * FROM tbl_user WHERE id_user='$id_user'");
$row    = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Cek Profile</title>
</head>
<body>
    

<div class="container-fluid" style="background-color: white;">
<div class="card" style="width: 20rem; margin-left: 38%; margin-top: 20px; border-color:white;">
  <img style="width: 100px; margin-left: 80px;" src="../assets/img/<?= $row['foto_profil']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <input type="text" value="<?= $row['id_user']; ?>" hidden>
    <h5 class="card-title">Username : <?= $row['username']; ?></h5>
    <p class="card-text">Email : <?= $row['email']; ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
    <form>
        <div class="form-group">
            <input type="email" class="form-control" id="exampleFormControlInput1" value="<?= $row['username']; ?>">
        </div>
    </form>
    </li>
    <li class="list-group-item">
    <form>
        <div class="form-group">
            <input type="password" class="form-control" id="exampleFormControlInput1" value="<?= $row['password']; ?>">
        </div>
    </form>
    </li>
    <li class="list-group-item">
    <form>
        <div class="form-group">
            <input type="file" class="form-control" id="exampleFormControlInput1">
        </div>
    </form>
    </li>
  </ul>
  <div class="card-body">
    <a href="#" class="btn btn-sm btn-primary">Simpan</a>
    <a href="../home.php" class="btn btn-sm btn-danger">Kembali</a>
  </div>
</div>
</div>
<!-- SCRIPT BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<?php include '../views/footer.php';?>
</body>
</html>