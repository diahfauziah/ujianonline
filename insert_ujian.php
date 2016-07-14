<?php
	include "koneksi.php";
	if(isset($_POST)) {
		if(isset($_POST["Judul"])){
			$judul = $_POST['Judul'];
		}
		if(isset($_POST["KategoriUjian"])){
			$kategoriujian = $_POST['KategoriUjian'];
		}
		if(isset($_POST["KategoriKelas"])){
			$kategorikelas = $_POST['KategoriKelas'];
		}
		if(isset($_POST["Waktu"])){
			$waktu = $_POST['Waktu'];
		}
		if(isset(($_POST["AcakSoal"]))){
			$acaksoal = $_POST["AcakSoal"];
		}
		if(isset(($_POST["PerluLogin"]))){
			$perlulogin = $_POST["PerluLogin"];
		}
		echo $judul;
		echo $kategorikelas;
		echo $kategoriujian
		echo $waktu;
		echo $acaksoal;
		echo $perlulogin;
	}
	//$insert = "INSERT INTO tblblog (judul, tanggal, konten) VALUES ('$judul', '$tanggal', '$konten')";
	$insert = "INSERT INTO `info_ujian`(`mata_pelajaran`, `id_kelas`, `lama_ujian`, `url_ujian`, `judul_ujian`, `total_soal`, `acak_soal`, `petunjuk`, `perlu_login`) VALUES ('$kategoriujian', '$kategorikelas', '$waktu', 'http://localhost', '$judul', '0', '$acaksoal', NULL, '$perlulogin')";
	$insert_query = mysql_query($insert);
	if($insert_query){
		header('location:index.php');
	} 
?>
