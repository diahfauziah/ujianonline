<?php
	session_start();
	include ("koneksi.php");
	$id = $_GET['id'];
	if(isset($_POST)) {
		if(isset($_POST["pertanyaan7"])){
			$pertanyaan = $_POST['pertanyaan7'];
		}
		$id_ujian = $id;
		$stage_id = $_POST['stage7'];

		$query4 = mysqli_query($link, "SELECT COUNT(*) FROM soal where id_ujian='$id' ");
		$arraynomor = mysqli_fetch_array($query4);
        $nomormax = (int)$arraynomor[0];

        $nomor_soal = $nomormax + 1;

		$kategori_pertanyaan = 7;
		$jawaban_benar = $_POST['jawabanbenar7'];
		$poin_benar = $_POST['poinbenar7'];
		$poin_salah = $_POST['poinsalah7'];
		$poin_kosong = $_POST['poinkosong7'];
		
		if (isset($_POST['from7'])){
			$from = $_POST['from7'];
		} else {
			$from = "none";
		}
	}
	
	$insert1 = "INSERT INTO `soal`(`id_ujian`, `stage_id`, `nomor_soal`, `pertanyaan`, `kategori_pertanyaan`, `jawaban_benar`, `poin_benar`, `poin_salah`, `poin_kosong`) VALUES ('$id_ujian', '$stage_id', '$nomor_soal', '$pertanyaan', '$kategori_pertanyaan', '$jawaban_benar', '$poin_benar', '$poin_salah', '$poin_kosong')";
	
	$insert_query = mysqli_query($link, $insert1);
	
	$getnum = "SELECT MAX(`id_soal`) FROM `soal`";
	$getnumquery = mysqli_query($link, $getnum);

	$insert_query1 = mysqli_fetch_array($getnumquery);

	$idsoal = $insert_query1[0];
	
	$query = "INSERT INTO `pilihan_jawaban`(`id_soal`, `opsi_jawaban`) VALUES ('$idsoal', '(1), (2), dan (3) benar')";

	$insert_query2 = mysqli_query($link, $query);
	
	$query = "INSERT INTO `pilihan_jawaban`(`id_soal`, `opsi_jawaban`) VALUES ('$idsoal', '(1) dan (3) benar')";

	$insert_query2 = mysqli_query($link, $query);
	
	$query = "INSERT INTO `pilihan_jawaban`(`id_soal`, `opsi_jawaban`) VALUES ('$idsoal', '(2) dan (4) benar')";

	$insert_query2 = mysqli_query($link, $query);
	
	$query = "INSERT INTO `pilihan_jawaban`(`id_soal`, `opsi_jawaban`) VALUES ('$idsoal', 'Hanya (4) yang benar')";

	$insert_query2 = mysqli_query($link, $query);
	
	$query = "INSERT INTO `pilihan_jawaban`(`id_soal`, `opsi_jawaban`) VALUES ('$idsoal', 'Benar semua')";

	$insert_query2 = mysqli_query($link, $query);

	if($insert_query2){
		$_SESSION['statuspesan'] = "sukses";
		$_SESSION['pesan'] = "Soal baru berhasil dimasukkan";
		if ($from=="tambahsoal"){
			header('location:tambah_soal.php?id='.$id);
		} else if ($from=="viewujian") {
			header('location:view_ujian.php?id='.$id);
		}
	} else {
		$_SESSION['statuspesan'] = "gagal";
		$_SESSION['pesan'] = "Soal baru tidak berhasil dimasukkan";
		if ($from=="tambahsoal"){
			header('location:tambah_soal.php?id='.$id);
		} else if ($from=="viewujian") {
			header('location:view_ujian.php?id='.$id);
		}
	}
?>
