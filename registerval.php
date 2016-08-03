<?php
	session_start();
	
	$nama = $_POST['nama'];
	if ($_POST['kategori']=="1"){
		$kategori = "SMP";
	} else {
		$kategori = "SMA";
	}
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	include("koneksi.php");
	
	$query = mysqli_query($link, "INSERT INTO `akun_guru`(`nama`, `username`, `password`, `kategori_guru`) VALUES('$nama', '$user', '$pass', '$kategori')");
	
	if($query){
		$_SESSION['statuspesan'] = "sukses";
		$_SESSION['pesan'] = "Akun $nama berhasil dibuat. Silahkan login.";
		header('location:login.php');
	} else {
		$_SESSION['statuspesan'] = "gagal";
		$_SESSION['pesan'] = "Akun $nama tidak berhasil dibuat.";
		header('location:login.php');
	}
?>