
<?php
	session_start();
	include ("koneksi.php"); 
	$id = $_GET['id'];
	
	$query = "SELECT * FROM `info_ujian` WHERE `id_ujian`='$id'";
	$check = mysqli_query($link, $query);
	$there = mysqli_fetch_array($check);
	
	if ($there!=null){
		$judul = $there['judul_ujian'];
		
		$delete = "DELETE FROM `info_ujian` WHERE `id_ujian`='$id' ";
		$delete_query = mysqli_query($link, $delete);
		
		$delete = "DELETE FROM `soal` WHERE `id_ujian`='$id' ";
		$delete_query = mysqli_query($link, $delete);

		if($delete_query){
			$_SESSION['statuspesan'] = "sukses";
			$_SESSION['pesan'] = "Ujian $judul berhasil dihapus";
			header('location:index_guru.php');
		} else {
			$_SESSION['statuspesan'] = "gagal";
			$_SESSION['pesan'] = "Ujian $judul gagal dihapus";
			header('location:index_guru.php');
		}
	}
	
?>



