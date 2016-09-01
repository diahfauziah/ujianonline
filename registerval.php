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
	
	$check = mysqli_query($link, "SELECT MAX(id_guru) FROM akun_guru");
	$data = mysqli_fetch_array($check);
	$idguru = $data[0];
	
	$query = mysqli_query($link, "INSERT INTO stage(dibuat_oleh, nama_stage) VALUES('$idguru', 'Pilihan Ganda')");
	$query = mysqli_query($link, "INSERT INTO stage(dibuat_oleh, nama_stage) VALUES('$idguru', 'Isian')");
	$query = mysqli_query($link, "INSERT INTO stage(dibuat_oleh, nama_stage) VALUES('$idguru', 'Essay')");
	$query = mysqli_query($link, "INSERT INTO stage(dibuat_oleh, nama_stage) VALUES('$idguru', 'Benar/Salah')");
	$query = mysqli_query($link, "INSERT INTO stage(dibuat_oleh, nama_stage) VALUES('$idguru', 'Checkbox')");
	$query = mysqli_query($link, "INSERT INTO stage(dibuat_oleh, nama_stage) VALUES('$idguru', 'Sebab - Akibat')");
	$query = mysqli_query($link, "INSERT INTO stage(dibuat_oleh, nama_stage) VALUES('$idguru', 'Pilihan 1,2,3,4')");
	
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