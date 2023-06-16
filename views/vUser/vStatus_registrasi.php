<?php 
include '../../koneksi.php'; 
// include '../index.php'; 
ob_start();
session_start();

if(isset($_GET['id_user'])){
    $id_user    =$_GET['id_user'];
}
else {
    die ("Error. No ID Selected!");    
}
$queryUser  = mysqli_query($conn, "SELECT * FROM tbl_user WHERE id_user='$id_user'");
$rowUser    = mysqli_fetch_array($queryUser);

$queryMhs   = mysqli_query($conn, "SELECT * FROM vHome");
$rowMhs     = mysqli_fetch_array($queryMhs);

$queryMhs2   = mysqli_query($conn, "SELECT * FROM tbl_registrasi");
$rowMhs2     = mysqli_fetch_array($queryMhs2);

$queryMhs3   = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa");
$rowMhs3     = mysqli_fetch_array($queryMhs3);

$percobaan = $rowUser['id_user'] == $rowMhs['id_user'];
$hasilPerbandingan = $rowMhs['status_registrasi'] == $percobaan;

// $query = mysqli_query($conn, "SELECT max(id_registrasi) as kodeUrut FROM tbl_mahasiswa");
// $data = mysqli_fetch_array($query);
// $kodeTerbesar = $data['kodeUrut'];
// // ==============================
// $urutan = (int) substr($kodeTerbesar, 3, 3);
// $urutan++;

// $huruf = 21082010;
// $kodeTerbesar = $huruf . sprintf("%03s", $urutan);


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Status - Registrasi</title>
  </head>
  <body>
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel">Hai, <?= $rowUser['username']; ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Silahkan Membuka, Pengumuman Status Registrasi Anda. Semoga Beruntung :)
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Buka</button>
        </div>
        </div>
    </div>
    </div>

    <!-- <p><?= $kodeTerbesar; ?></p> -->

    <?php if ($hasilPerbandingan != 1) {
        echo "

        <div class='modal fade' id='exampleModalToggle2' aria-hidden='true' aria-labelledby='exampleModalToggleLabel2' tabindex='-1'>
        <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalToggleLabel2'>Informasi Pendaftaran belum dapat diakses</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                Silahkan Kembali, untuk beberapa saat lagi.
            </div>
            <div class='modal-footer'>
                <button class='btn btn-danger' data-bs-target='#exampleModalToggle' data-bs-toggle='modal' data-bs-dismiss='modal'>Kembali</button>
            </div>
            </div>
        </div>
        </div>
        
        ";
    } else {
        echo "
        <div class='modal fade' id='exampleModalToggle2' aria-hidden='true' aria-labelledby='exampleModalToggleLabel2' tabindex='-1' style='background-color: rgb(100, 149, 237);'>
        <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalToggleLabel2'>Selamat <b>".$rowUser['username']."</b>, anda dinyatakan Lulus pada Program Studi</h5>
                <span>🥳🥳🥳🥳🥳🥳</span> 
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
            ".$rowMhs2['pilihan_prodi_1']." 
            </div>
            <div class='modal-footer'>
                <button class='btn btn-danger' data-bs-target='#exampleModalToggle' data-bs-toggle='modal' data-bs-dismiss='modal'>Kembali</button>
            </div>
            </div>
        </div>
        </div>
        ";
    }
    ?>

    
    <a class="btn btn-secondary" data-bs-toggle="modal" href="#exampleModalToggle" role="button" style="margin-top: 10px; margin-left: 10px;">Show Status Registrasi</a>
    <br>
    <a href="../../home.php" style="margin-top: 10px; margin-left: 10px;">Kembali</a>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>