<?php
	if (isset($_GET['id'])){
		if (!empty($_GET['id'])){
			if(isset($_POST)) {
				session_start();
				include("koneksi.php");
				if(isset($_POST["Judul"])){
					$judul = $_POST['Judul'];
				}
				
				if(isset($_POST["URL"])){
					$url = $_POST['URL'];
				}
				
				if(isset($_POST["Waktu"])){
					$waktuujian = $_POST['Waktu'];
				}

				if(isset($_POST["AcakSoal"])){
					$acaksoal = $_POST['AcakSoal'];
				}

				if(isset($_POST["KategoriUjian"])){
					$kategoriujian = $_POST['KategoriUjian'];
				}

				if(isset($_POST["KategoriKelas"])){
					$kategorikelas = $_POST['KategoriKelas'];
				}

				if(isset($_POST["PerluLogin"])){
					$perlulogin = $_POST['PerluLogin'];
				}
				
				if(isset($_POST["Petunjuk"])){
					$petunjuk = $_POST['Petunjuk'];
				}
				
				$idujian = $_GET['id'];
				
				$update = "UPDATE info_ujian SET judul_ujian='$judul', lama_ujian='$waktuujian', acak_soal='$acaksoal', id_kelas='$kategorikelas', perlu_login='$perlulogin', petunjuk='$petunjuk', modified_date=NOW() WHERE id_ujian='$idujian'";
				
				$update_query = mysqli_query($link, $update);
				
				$katujian = explode(',', $kategoriujian);
	
				echo $kategoriujian;
				
				$totalmateri = count($katujian);
					
				$delmateri = mysqli_query($link, "DELETE FROM materi_ujian WHERE id_ujian='$idujian'");
				
				for ($i = 0; $i < $totalmateri; $i++){
					$idmateri = $katujian[$i];
					
					$saveujianmateri = mysqli_query($link, "INSERT INTO materi_ujian(id_ujian, id_materi) VALUES ('$idujian', '$idmateri')");
				}
				
				if ($saveujianmateri){
					$_SESSION['statuspesan'] = "sukses";
					$_SESSION['pesan'] = " Ujian $judul berhasil diperbaharui <i class='fa fa-check-circle'></i>";
					header('location:index_guru.php');
				} else {
					$_SESSION['statuspesan'] = "gagal";
					$_SESSION['pesan'] = " Ujian $judul tidak berhasil diperbaharui";
					header('location:edit_ujian.php?id='.$idujian);
				}
			}
		} else {
			$_SESSION['statuspesan'] = "gagal";
			$_SESSION['pesan'] = " Tidak ada ujian yang dipilih untuk diedit";
			header('location:index_guru.php');
		}
	} else {
		$_SESSION['statuspesan'] = "gagal";
		$_SESSION['pesan'] = " Tidak ada ujian yang dipilih untuk diedit";
		header('location:index_guru.php');
	}
?>