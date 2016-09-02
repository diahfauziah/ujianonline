<?php
	session_start();
	if (isset($_GET['name'])){
		include("koneksi.php");
		$namstage = $_GET['name'];
		$idguru = $_SESSION['userid'];
		
		$query = mysqli_query($link, "INSERT INTO mata_pelajaran(nama, dibuat_oleh) VALUES('$namstage','$idguru')");
		
		echo '<option value="">Pilih Materi</option>';
		$querystg = mysqli_query($link, "SELECT * FROM mata_pelajaran WHERE dibuat_oleh='$idguru'");
		while ($stg = mysqli_fetch_array($querystg)){
			echo '<option value="';
			echo $stg['id_kategori'];
			echo '">';
			echo $stg['nama'];
			echo '</option>';
		}
	}
?>