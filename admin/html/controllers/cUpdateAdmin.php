<?php
include '../../koneksi.php';
// menyimpan data kedalam variabel
$id_admin       = $_POST['id_admin'];
$username       = $_POST['username'];
$email          = $_POST['email'];
$password       = $_POST['password'];
$status_admin   = $_POST['status_admin'];
// query SQL untuk insert data
$query="UPDATE tbl_admin SET username='$username',email='$email',password='$password', status_admin='$status_admin' WHERE id_admin='$id_admin'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location: ../vAkunAdmin.php");
?>