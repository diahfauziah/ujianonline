<?php
	session_start();
	if (isset($_POST['namamapel'])){
		include("koneksi.php");
		$mapel = $_POST['namamapel'];
		
		$dibuat = $_SESSION['userid'];
		
		$query = mysqli_query($link, "INSERT INTO `mata_pelajaran`(`nama`, `dibuat_oleh`) VALUES ('$mapel', '$dibuat')");
		
		if ($query){
			$_SESSION['statuspesan'] = "sukses";
			$_SESSION['pesan'] = " Mata Pelajaran $mapel berhasil dibuat";
			header('location:kategori.php');
		} else {
			$_SESSION['statuspesan'] = "gagal";
			$_SESSION['pesan'] = " Mata Pelajaran $mapel tidak berhasil dibuat";
			header('location:kategori.php');
		}
	}
?>