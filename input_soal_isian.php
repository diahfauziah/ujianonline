<?php
	session_start();
	include ("koneksi.php");
	$id = $_GET['id'];
	if(isset($_POST)) {
		if(isset($_POST["pertanyaan2"])){
			$pertanyaan = $_POST['pertanyaan2'];
		}
		$id_ujian = $id;
		$stage_id = $_POST['stage2'];

		$query4 = mysqli_query($link, "SELECT COUNT(*) FROM soal where id_ujian='$id' ");
		$arraynomor = mysqli_fetch_array($query4);
        $nomormax = (int)$arraynomor[0];

        $nomor_soal = $nomormax + 1;

		$kategori_pertanyaan = 2;
		$jawaban_benar = $_POST['jawaban2'];
		$poin_benar = $_POST['poinbenar2'];
		$poin_salah = $_POST['poinsalah2'];
		$poin_kosong = $_POST['poinkosong2'];
		
		if (isset($_POST['from2'])){
			$from = $_POST['from2'];
		} else {
			$from = "none";
		}
	}
	
	$insert1 = "INSERT INTO `soal`(`id_ujian`, `stage_id`, `nomor_soal`, `pertanyaan`, `kategori_pertanyaan`, `jawaban_benar`, `poin_benar`, `poin_salah`, `poin_kosong`) VALUES ('$id_ujian', '$stage_id', '$nomor_soal', '$pertanyaan', '$kategori_pertanyaan', '$jawaban_benar', '$poin_benar', '$poin_salah', '$poin_kosong')";
	
	$insert_query = mysqli_query($link, $insert1);
	
	$updatetotalsoal = mysqli_query($link, "UPDATE info_ujian SET total_soal='$nomor_soal', modified_date=NOW() WHERE id_ujian='$id_ujian'");
	
	if($insert_query){
		$_SESSION['statuspesan'] = "sukses";
		$_SESSION['pesan'] = "Soal baru berhasil dimasukkan";
		header('location:tambah_soal.php?tab=1&id='.$id);
	} else {
		$_SESSION['statuspesan'] = "gagal";
		$_SESSION['pesan'] = "Soal baru tidak berhasil dimasukkan";
		header('location:tambah_soal.php?tab=1&id='.$id);
	}
?>
