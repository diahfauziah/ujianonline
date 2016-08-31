<?php
	session_start();
	if (isset($_POST['idkelashapus'])){
		include("koneksi.php");
		$id = $_POST['idkelashapus'];
		
		$delete = mysqli_query($link, "DELETE FROM `kelas` WHERE `id_kelas`=$id");
		
		if ($delete){
			$_SESSION['statuspesan'] = "sukses";
			$_SESSION['pesan'] = "Kelas berhasil dihapus <i class='fa fa-trash-o'></i>";
			header('location:kategori.php');
		} else {
			$_SESSION['statuspesan'] = "gagal";
			$_SESSION['pesan'] = "Kelas tidak berhasil dihapus";
			header('location:kategori.php');
		}
	}
?>