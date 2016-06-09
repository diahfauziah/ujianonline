<?php
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

		if(isset($_POST["PerluLogin"])){
			$perlulogin = $_POST['PerluLogin'];
		}

		$url = "http://ujianonline.com/"+ $_POST['Judul'];

	}
	$insert1 = "INSERT INTO `info_ujian`(`kategori_ujian`, `lama_ujian`, `url_ujian`, `judul_ujian`, `total_soal`, `acak_soal`, `create_date`, `modified_date`, `perlu_login`) VALUES ('$kategoriujian', '$waktuujian', '$url', '$judul', '0' , '0', '2016/05/05', '2016/05/05', '0')";
	
	$insert_query = mysqli_query($link, $insert1);
	

	if($insert_query){
		header('location:index_guru.php');
	} 
?>
