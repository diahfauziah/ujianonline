<?php
	session_start();
	if (isset($_GET['name'])){
		include("koneksi.php");
		$namstage = $_GET['name'];
		$idguru = $_SESSION['userid'];
		
		$query = mysqli_query($link, "INSERT INTO materi(nama, dibuat_oleh) VALUES('$namstage','$idguru')");
		
		echo '<option value="">Pilih Materi</option>';
		$querystg = mysqli_query($link, "SELECT * FROM materi WHERE dibuat_oleh='$idguru'");
		while ($stg = mysqli_fetch_array($querystg)){
			echo '<option value="';
			echo $stg['id_materi'];
			echo '"';
			if ($namstage==$stg['nama']) echo 'selected';
			echo '>';
			echo $stg['nama'];
			echo '</option>';
		}
	}
?>