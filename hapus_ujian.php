
<?php
	session_start();
	include ("koneksi.php"); 
	$id = $_GET['id'];
	
	$query = "SELECT * FROM `info_ujian` WHERE `id_ujian`='$id'";
	$check = mysqli_query($link, $query);
	$there = mysqli_fetch_array($check);
	
	if ($there!=null){
		$judul = $there['judul_ujian'];
		
		$ini = "SELECT * FROM `soal` WHERE `id_ujian`='$id'";
		$iniquery = mysqli_query($link, $ini);
		
		while ($data = mysqli_fetch_array($iniquery)){
			$idsoal = $data['id_soal'];
			
			// periksa pilihan_jawaban
			$cekdulu = mysqli_query($link, "SELECT * FROM pilihan_jawaban WHERE id_soal='$idsoal'");
			if ($cekdulu){
				$delete = "DELETE FROM `pilihan_jawaban` WHERE `id_soal`='$idsoal' ";
				$delete_query = mysqli_query($link, $delete);
			}
		}
		
		// periksa jawaban_user
		$cekdulu = mysqli_query($link, "SELECT * FROM jawaban_user WHERE id_ujian='$id'");
		if ($cekdulu){
			$delete = "DELETE FROM `jawaban_user` WHERE `id_ujian`='$id' ";
			$delete_query = mysqli_query($link, $delete);
		}
		
		// periksa laporan_ujian_guru
		$cekdulu = mysqli_query($link, "SELECT * FROM laporan_ujian_guru WHERE id_ujian='$id'");
		if ($cekdulu){
			$delete = "DELETE FROM `laporan_ujian_guru` WHERE `id_ujian`='$id' ";
			$delete_query = mysqli_query($link, $delete);
		}
		
		// periksa materi_ujian
		$cekdulu = mysqli_query($link, "SELECT * FROM materi_ujian WHERE id_ujian='$id'");
		if ($cekdulu){
			$delete = "DELETE FROM materi_ujian WHERE id_ujian='$id' ";
			$delete_query = mysqli_query($link, $delete);
		}
		
		$delete = "DELETE FROM `soal` WHERE `id_ujian`='$id' ";
		$delete_query = mysqli_query($link, $delete);
		
		$delete = "DELETE FROM `info_ujian` WHERE `id_ujian`='$id' ";
		$delete_query = mysqli_query($link, $delete);

		if($delete_query){
			$_SESSION['statuspesan'] = "sukses";
			$_SESSION['pesan'] = "Ujian $judul berhasil dihapus <i class='fa fa-trash-o'></i>";
			header('location:index_guru.php');
		} else {
			$_SESSION['statuspesan'] = "gagal";
			$_SESSION['pesan'] = "Ujian $judul gagal dihapus";
			header('location:index_guru.php');
		}
	}
	
?>



