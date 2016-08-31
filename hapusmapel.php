<?php
	session_start();
	if (isset($_POST['idmapelhapus'])){
		include("koneksi.php");
		$id = $_POST['idmapelhapus'];
		
		$delete = mysqli_query($link, "DELETE FROM `mata_pelajaran` WHERE `id_kategori`=$id");
		
		if ($delete){
			$_SESSION['statuspesan'] = "sukses";
			$_SESSION['pesan'] = "Mata Pelajaran berhasil dihapus <i class='fa fa-trash-o'></i>";
			header('location:kategori.php');
		} else {
			$_SESSION['statuspesan'] = "gagal";
			$_SESSION['pesan'] = "Mata Pelajaran tidak berhasil dihapus";
			header('location:kategori.php');
		}
	}
?>