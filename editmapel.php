<?php
	session_start();
	if (isset($_POST['namaeditmapel'])&&isset($_POST['idmapel'])){
		include("koneksi.php");
		$idmapel = $_POST['idmapel'];
		$mapel = $_POST['namaeditmapel'];
		$dibuat = $_SESSION['userid'];
		
		$query = mysqli_query($link, "UPDATE `materi` SET `nama`='$mapel', `dibuat_oleh`='$dibuat' WHERE `id_materi`='$idmapel'");
		
		if ($query){
			$_SESSION['statuspesan'] = "sukses";
			$_SESSION['pesan'] = " Materi $mapel berhasil diperbarui <i class='fa fa-check'></i>";
			header('location:kategori.php');
		} else {
			$_SESSION['statuspesan'] = "gagal";
			$_SESSION['pesan'] = " Materi $mapel tidak berhasil dibuat";
			header('location:kategori.php');
		}
	}
?>