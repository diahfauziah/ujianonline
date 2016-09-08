<?php
	session_start();
	if (isset($_GET['name'])){
		include("koneksi.php");
		$namstage = $_GET['name'];
		$idguru = $_SESSION['userid'];
		
		$query = mysqli_query($link, "INSERT INTO stage(dibuat_oleh, nama_stage) VALUES('$idguru', '$namstage')");
		
		echo '<option value="1">Tanpa Kelompok Soal</option>';
		$querystg = mysqli_query($link, "SELECT * FROM stage WHERE dibuat_oleh='$idguru'");
		while ($stg = mysqli_fetch_array($querystg)){
			echo '<option value="';
			echo $stg['id_stage'];
			echo '"';
			if ($namstage==$stg['nama_stage']) echo 'selected';
			echo '>';
			echo $stg['nama_stage'];
			echo '</option>';
		}
	}
?>