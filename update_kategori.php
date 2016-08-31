<?php
	session_start();
	$idujian = $_GET['id'];
	if (isset($_POST['namaeditmapel'])){
		include("koneksi.php");
		$mapel = $_POST['namaeditmapel'];
		$dibuat = $_SESSION['userid'];
		
		$query = mysqli_query($link, "UPDATE `mata_pelajaran` SET `nama`='$mapel', `dibuat_oleh`='$dibuat' WHERE `id_kategori`='$idujian'");
		
		if ($query){
			$_SESSION['statuspesan'] = "sukses";
			$_SESSION['pesan'] = "Mata Pelajaran $mapel berhasil diperbarui <i class='fa fa-check'></i>";
			header('location:kategori.php');
		} else {
			$_SESSION['statuspesan'] = "gagal";
			$_SESSION['pesan'] = "Mata Pelajaran $mapel tidak berhasil dibuat";
			header('location:kategori.php');
		}
	}
?>