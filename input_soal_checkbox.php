<?php
	session_start();
	include ("koneksi.php");
	$id = $_GET['id'];
	if(isset($_POST)) {
		if(isset($_POST["pertanyaan5"])){
			$pertanyaan = $_POST['pertanyaan5'];
		}
		$id_ujian = $id;
		$stage_id = $_POST['stage5'];

		$query4 = mysqli_query($link, "SELECT COUNT(*) FROM soal where id_ujian='$id' ");
		$arraynomor = mysqli_fetch_array($query4);
        $nomormax = (int)$arraynomor[0];

        $nomor_soal = $nomormax + 1;

		$kategori_pertanyaan = 5;
		$jawaban_benar = "";
		$first = 1;
		
		for ($i = 1; $i < 6; $i++){
			$check = "checkbox".$i;
			$val = "checkval".$i;
			
			if (isset($_POST[$check])&&isset($_POST[$val])){
				if ($first){
					$jawaban_benar = $_POST[$val];
					$first = 0;
				} else {
					$jawaban_benar = $jawaban_benar ."|".$_POST[$val];
				}
			}
		}
		
		$poin_benar = $_POST['poinbenar5'];
		$poin_salah = $_POST['poinsalah5'];
		$poin_kosong = $_POST['poinkosong5'];
		
		if (isset($_POST['from5'])){
			$from = $_POST['from5'];
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

	for ($i = 1; $i < 6; $i++){
		$val = "checkval".$i;
		
		if (isset($_POST[$val])){
			if (!empty($_POST[$val])){
				$pil = $_POST[$val];
				$query = "INSERT INTO `pilihan_jawaban`(`id_soal`, `opsi_jawaban`) VALUES ('$idsoal', '$pil')";

				$insert_query2 = mysqli_query($link, $query);
			}
		}
	}

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
