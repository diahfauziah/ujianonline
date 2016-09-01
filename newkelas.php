<?php
	session_start();
	if (isset($_POST['namakelas'])){
		include("koneksi.php");
		$mapel = $_POST['namakelas'];
		
		$dibuat = $_SESSION['userid'];
		
		$query = mysqli_query($link, "INSERT INTO `kelas`(`nama`, `dibuat_oleh`) VALUES ('$mapel', '$dibuat')");
		
		if ($query){
			$_SESSION['statuspesan'] = "sukses";
			$_SESSION['pesan'] = " Kelas $mapel berhasil dibuat";
			header('location:kategori.php');
		} else {
			$_SESSION['statuspesan'] = "gagal";
			$_SESSION['pesan'] = " Kelas $mapel tidak berhasil dibuat";
			header('location:kategori.php');
		}
	}
?>