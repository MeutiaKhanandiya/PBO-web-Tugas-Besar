<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
require 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from logins where username='$username' and password='$password'");
$loginadmin = mysqli_query($conn,"select Hak_Akses from logins where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
$cekadmin = mysqli_num_rows($loginadmin);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['username']== $data['password']){
		// buat session login dan username
		if ($cek > 0) {
			$username = $_SESSION['username'];
		$_SESSION['Hak_akses'] = "Mahasiswa";
		// alihkan ke halaman dashboard admin
		header("location:index.php");
		}
	// cek jika user login sebagai pegawai
	}else if($data['username']== $data['password']){
		// buat session login dan username
		if ($cek > 0) {
			$username = $_SESSION['username'];
		$_SESSION['Hak_akses'] = "Mahasiswa";
		// alihkan ke halaman dashboard pegawai
		header("location:about.php");
		}
    }else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>