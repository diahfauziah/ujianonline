<?php
	session_start();
	if (isset($_GET['idsoal'])&&isset($_SESSION['idujiani'])){
		
	} else {
		$_SESSION['statuspesan'] = "gagal";
		$_SESSION['pesan'] = "Soal tidak berhasil dihapus";
		//header('location:tambah_soal.php?')
	}
?>