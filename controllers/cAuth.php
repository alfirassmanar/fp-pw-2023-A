<?php
//Include file koneksi ke database
include "../koneksi.php";

//menerima nilai dari kiriman form input-barang 
$username   = $_POST["username"];
$email      = $_POST["email"];
$password   = $_POST["password"];
$upload     = $_POST["foto_profil"];
$level      = $_POST["level"];


$users = mysqli_query($conn, "INSERT INTO tbl_user (username , email , password , foto_profil , level) 
VALUES ('$username','$email','$password','$upload','$level')");

//Mengeksekusi/menjalankan query diatas	
  $query = mysqli_query($conn, $users);

//Kondisi apakah berhasil atau tidak
  if ($query) {
	echo "Data Gagal di Daftarkan";
	exit;
  }
else {
    echo "Data Berhasil di Daftarkan, aktifikasi akun akan di informasikan melalui email <a href='../views/login/login.php'>Login</a>";
    // header("location:../views/login/login.php");
}  

?>