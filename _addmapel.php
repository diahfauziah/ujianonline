<?php
	session_start();
	if (isset($_GET['name'])&&(!empty($_GET['name']))){
		include("koneksi.php");
		$namstage = $_GET['name'];
		$idguru = $_SESSION['userid'];
		
		$query = mysqli_query($link, "INSERT INTO materi(nama, dibuat_oleh) VALUES('$namstage','$idguru')");
		
		$get = mysqli_query($link, "SELECT MAX(id_materi) FROM materi");
		$getid = mysqli_fetch_array($get);
		$idmateri = $getid['MAX(id_materi)'];
		
		$data = mysqli_query($link, "SELECT * FROM materi WHERE id_materi='$idmateri'");
		$dtmat = mysqli_fetch_array($data);
		
		echo '{"value":';
		echo $dtmat['id_materi'];
		echo ', "text":"';
		echo $dtmat['nama'];
		echo '"}';
	}
?>