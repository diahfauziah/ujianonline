<?php
	session_start();
	include("koneksi.php");
	$idbuat = $_SESSION['userid'];
	$query = mysqli_query($link, "SELECT * FROM materi WHERE dibuat_oleh='$idbuat'");
	
	echo '[';
	$numrow = mysqli_num_rows($query);
	for ($i=0; $i < $numrow; $i++){
		$data = mysqli_fetch_array($query);
		echo '{';
		echo '"value":';
		echo $data['id_materi'];
		echo ', "text":"';
		echo $data['nama'];
		echo '"}';
		if ($i+1 < $numrow){
			echo ',';
		}
	}
	echo ']';
?>