<?php
	session_start();
	if (isset($_GET['idsoal'])&&isset($_GET['idujian'])){
		include("koneksi.php");
		$idsoal = $_GET['idsoal'];
		$idujian = $_GET['idujian'];
		
		$query = "SELECT * FROM `soal` WHERE `id_soal`='$idsoal'";
		$check = mysqli_query($link, $query);
		$there = mysqli_fetch_array($check);
		
		$query1 = "SELECT * FROM `info_ujian` WHERE `id_ujian`='$idujian'";
		$check1 = mysqli_query($link, $query1);
		$there1 = mysqli_fetch_array($check1);
		
		if ($there != null && $there1 != null){
			// periksa pilihan_jawaban
			$cekdulu = mysqli_query($link, "SELECT * FROM pilihan_jawaban WHERE id_soal='$idsoal'");
			if ($cekdulu){
				$delete = "DELETE FROM `pilihan_jawaban` WHERE `id_soal`='$idsoal' ";
				$delete_query = mysqli_query($link, $delete);
			}
			
			$delete = "DELETE FROM `soal` WHERE `id_soal`='$idsoal'";
			$delete_query = mysqli_query($link, $delete);
			
			$update = mysqli_query($link, "SELECT * FROM soal WHERE id_ujian='$idujian' ORDER BY nomor_soal ASC");
			$nomormax = mysqli_query($link, "SELECT COUNT(*) FROM soal WHERE id_ujian='$idujian'");
			$maxno = mysqli_fetch_array($nomormax);
			$no = $maxno['COUNT(*)'];
			
			$i = 1;
			
			while ($data = mysqli_fetch_array($update)){
				$idsoalup = $data['id_soal'];
				$updatedata = mysqli_query($link, "UPDATE soal SET nomor_soal='$i' WHERE id_soal='$idsoalup'");
				$i++;
			}
			
			$updateinfo = mysqli_query($link, "UPDATE info_ujian SET total_soal='$no', modified_date=NOW() WHERE id_ujian='$idujian'");
			
			$_SESSION['statuspesan'] = "sukses";
			$_SESSION['pesan'] = "Soal berhasil dihapus <i class='fa fa-trash-o'></i>";
			header('location:tambah_soal.php?tab=1&id='.$idujian);	
			
		} else {
			$id = $_GET['idujian'];
			$_SESSION['statuspesan'] = "gagal";
			$_SESSION['pesan'] = "Soal tidak berhasil dihapus";
			//header('location:tambah_soal.php?id='.$idujian);
		}
		
	} else if (isset($_GET['idujian'])) {
		$id = $_GET['idujian'];
		$_SESSION['statuspesan'] = "gagal";
		$_SESSION['pesan'] = "Soal tidak berhasil dihapus ";
		//header('location:tambah_soal.php?id='.$id);
	}
?>