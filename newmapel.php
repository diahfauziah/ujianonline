<?php
	session_start();
	if (isset($_POST['namamapel'])){
		include("koneksi.php");
		$mapel = $_POST['namamapel'];
		
		$dibuat = $_SESSION['userid'];
		
		$query = mysqli_query($link, "INSERT INTO `materi`(`nama`, `dibuat_oleh`) VALUES ('$mapel', '$dibuat')");
		
		if ($query){
			$_SESSION['statuspesan'] = "sukses";
			$_SESSION['pesan'] = " Materi $mapel berhasil dibuat";
			header('location:kategori.php');
		} else {
			$_SESSION['statuspesan'] = "gagal";
			$_SESSION['pesan'] = " Materi $mapel tidak berhasil dibuat";
			header('location:kategori.php');
		}
	}
?>