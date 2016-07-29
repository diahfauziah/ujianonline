<?php
	session_start();
	if (isset($_GET['id'])){
		// check id ke database, lalu proses sesuai aturan login
		// jika perlu login maka lanjut ke login
		// jika tidak maka lanjut ke halaman masukkan nama
	} else {
		header('location:notfound.php');
	}
?>