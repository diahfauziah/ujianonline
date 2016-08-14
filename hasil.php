<?php
	session_start();
	if (isset($_POST['IDujian'])){
		include("koneksi.php");
				
		$id = $_POST['IDujian'];
		$userid = $_SESSION['userid'];
		$nama = $_SESSION['nama'];
		$totalwaktu = $_POST['waktu'];
		$jam = intval($totalwaktu / 3600, 10);
		$menit = intval(($totalwaktu % 3600) / 60, 10);
		$detik = intval($totalwaktu % 60, 10);
		$tampilwaktu = "$jam jam: $menit menit: $detik detik";
		$soalterjawab = 0;
		$totalnilai = 0;
		
		$query = mysqli_query($link, "SELECT * FROM `soal` WHERE `id_ujian`='$id' ORDER BY nomor_soal");
		
		while ($soal = mysqli_fetch_array($query)){
			$ids = $soal['id_soal'];
			$get = "jawaban-$ids";
			if (isset($_POST[$get])){
				if (!empty($_POST[$get])){
					$soalterjawab = $soalterjawab + 1;
					$status = 0;
					$poin = 0;
					
					$jawab = $_POST[$get];
					if ($jawab==$soal['jawaban_benar']){
						$totalnilai = $totalnilai + $soal['poin_benar'];
						$status = 1;
						$poin = $soal['poin_benar'];
					} else {
						$totalnilai = $totalnilai + $soal['poin_salah'];
						$poin = $soal['poin_salah'];
					}
					
					if ($_SESSION['role']=="murid"){
						$insertjwb = mysqli_query($link, "INSERT INTO jawaban_user(id_murid, id_soal, id_ujian, jawaban, status, poin) VALUES ('$userid', '$ids', '$id', '$jawab', '$status', '$poin')");
					}
				} else {
					$totalnilai = $totalnilai + $soal['poin_kosong'];
				}
				
			} else {
				$totalnilai = $totalnilai + $soal['poin_kosong'];
			}
		}
		
		if ($_SESSION['role']=="murid"){
			$insertlap = mysqli_query($link, "INSERT INTO laporan_ujian_guru(id_ujian, id_murid, nama_peserta, total_waktu, nilai, soal_terjawab) VALUES ('$id', '$userid', '$nama', '$totalwaktu', '$totalnilai', '$soalterjawab')");
		}
		
		$query4 = mysqli_query($link, "SELECT COUNT(*) FROM soal where id_ujian='$id' ");
		$arraynomor = mysqli_fetch_array($query4);
		$totalsoal = (int)$arraynomor[0];
		
		$_SESSION['TotalWaktu'] = $tampilwaktu;
		$_SESSION['SoalTerjawab'] = $soalterjawab;
		$_SESSION['SoalTotal'] = $totalsoal;
		$_SESSION['Nilai'] = $totalnilai;
		
		header('location:hasilujian.php?id='.$id);
	} else {
		header('location:notfound.php');
	}
?>