<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include '../koneksi.php';
 
// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];
$id_admin = $_POST['id_admin'];
 
 
// menyeleksi data user dengan email dan password yang sesuai
$login = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['status_admin']=="admin"){
 
		// buat session login dan username
		$_SESSION['email'] = $data['email'];
		$_SESSION['username']    = $data['username'];
		$_SESSION['status_admin'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location: ../admin/html/admin/vAdmin.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['status_admin']=="staff"){
		// buat session login dan username
		$_SESSION['username'] = $data['username'];
		$_SESSION['email']    = $data['email'];
		$_SESSION['status_admin'] = "staff";
		// alihkan ke halaman dashboard pegawai
		header("location: ../admin/html/staff/vStaff.php");
		// include '../admin/html/admin/vAdmin.php'
 
	// cek jika user login sebagai pengurus
	}else if($data['status_admin']=="dba"){
		// buat session login dan username
		$_SESSION['username'] = $data['username'];
		$_SESSION['email']    = $data['email'];
		$_SESSION['status_admin'] = "dba";
		// alihkan ke halaman dashboard pengurus
		header("location: ../admin/html/dba/vDba.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>