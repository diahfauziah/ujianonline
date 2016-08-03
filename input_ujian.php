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

		$url = "http://ujianonline.com/ujian.php?judul="+ $_POST['Judul'];

	}
	$insert1 = "INSERT INTO `info_ujian`(`mata_pelajaran`, `id_kelas`, `lama_ujian`, `url_ujian`, `judul_ujian`, `total_soal`, `acak_soal`, `petunjuk`, `perlu_login`, `dibuat_oleh`) VALUES ('$kategoriujian', '$kategorikelas', '$waktu', 'http://localhost', '$judul', '0', '$acaksoal', NULL, '$perlulogin', 2)";
	
	$insert_query = mysqli_query($link, $insert1);
	

	if($insert_query){
		$_SESSION['statuspesan'] = "sukses";
		$_SESSION['pesan'] = "Ujian $judul berhasil dibuat";
		header('location:index_guru.php');
	} else {
		$_SESSION['statuspesan'] = "gagal";
		$_SESSION['pesan'] = "Ujian $judul gagal dibuat";
		header('location:index_guru.php');
	}
?>
