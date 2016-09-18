<?php
	session_start();
	if (isset($_POST['idkelashapus'])){
		include("koneksi.php");
		$id = $_POST['idkelashapus'];
		
		$check = mysqli_query($link, "SELECT * FROM info_ujian WHERE id_kelas='$id'");
		$numrow = mysqli_num_rows($check);
		
		if ($numrow == 0){
			$delete = mysqli_query($link, "DELETE FROM `kelas` WHERE `id_kelas`=$id");
		
			if ($delete){
				$_SESSION['statuspesan'] = "sukses";
				$_SESSION['pesan'] = " Kelas berhasil dihapus <i class='fa fa-trash-o'></i>";
				header('location:kategori.php?tab=1');
			} else {
				$_SESSION['statuspesan'] = "gagal";
				$_SESSION['pesan'] = " Kelas tidak berhasil dihapus";
				header('location:kategori.php?tab=1');
			}
		} else {
			$_SESSION['statuspesan'] = "gagal";
			$_SESSION['pesan'] = " Kelas tidak berhasil dihapus karena terkait ujian tertentu";
			header('location:kategori.php?tab=1');
		}		
	}
?>