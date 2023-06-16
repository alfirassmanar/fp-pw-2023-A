<?php
include '../../koneksi.php';
// menyimpan data kedalam variabel
$id_mahasiswa   = $_POST['id_mahasiswa'];
$status_registrasi            = $_POST['status_registrasi'];
// query SQL untuk insert data
$query="UPDATE vHasilPendaftaran SET status_registrasi='$status_registrasi' where id_mahasiswa='$id_mahasiswa'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location: ../vStatusReg.php");
?>