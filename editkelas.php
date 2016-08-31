<?php
	session_start();
	if (isset($_POST['namaeditkelas'])&&isset($_POST['idkelasedit'])){
		include("koneksi.php");
		$idkelas = $_POST['idkelasedit'];
		$kelas = $_POST['namaeditkelas'];
		$dibuat = $_SESSION['userid'];
		
		$query = mysqli_query($link, "UPDATE `kelas` SET `nama`='$kelas', `dibuat_oleh`='$dibuat' WHERE `id_kelas`='$idkelas'");
		
		if ($query){
			$_SESSION['statuspesan'] = "sukses";
			$_SESSION['pesan'] = "Kelas $kelas berhasil diperbarui <i class='fa fa-check'></i>";
			header('location:kategori.php');
		} else {
			$_SESSION['statuspesan'] = "gagal";
			$_SESSION['pesan'] = "Kelas $kelas tidak berhasil diperbarui";
			header('location:kategori.php');
		}
	}
?>