<?php
	session_start();
	include ("koneksi.php");
	if(isset($_POST)) {
		if(isset($_POST["Judul"])){
			$judul = $_POST['Judul'];
		}
		
		if(isset($_POST["Waktu"])){
			$waktuujian = $_POST['Waktu'];
		}

		if(isset($_POST["JumlahSoal"])){
			$jumlahsoal = 0;
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
	}
	
	$dibuat = $_SESSION['userid'];
	
	$insert1 = "INSERT INTO `info_ujian`(`mata_pelajaran`, `id_kelas`, `lama_ujian`, `judul_ujian`, `total_soal`, `acak_soal`, `petunjuk`, `perlu_login`, `dibuat_oleh`) VALUES ('$kategoriujian', '$kategorikelas', '$waktuujian', '$judul', '0', '$acaksoal', NULL, '$perlulogin', '$dibuat')";
	
	$insert_query = mysqli_query($link, $insert1);
	
	$getlast = mysqli_query($link, "SELECT MAX(id_ujian) FROM info_ujian");
	$getid = mysqli_fetch_array($getlast);
	$idujian = $getid['MAX(id_ujian)'];
	
	$url = "http://localhost/ujianonline/ujian.php?id=$idujian";
	
	$updatequery = mysqli_query($link, "UPDATE info_ujian SET url_ujian='$url' WHERE id_ujian='$idujian'");
	

	if($updatequery){
		$_SESSION['statuspesan'] = "sukses";
		$_SESSION['matapelajaran'] = "0";
		$_SESSION['kelas'] = "0";
		$_SESSION['pesan'] = "Ujian $judul berhasil dibuat <i class='fa fa-check-circle'></i>";
		header('location:tambah_soal.php?id='.$idujian);
	} else {
		$_SESSION['statuspesan'] = "gagal";
		$_SESSION['pesan'] = "Ujian $judul gagal dibuat";
		header('location:new_ujian.php');
	}
?>
