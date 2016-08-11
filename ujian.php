<?php
	session_start();
	if (isset($_GET['id'])){
		// check id ke database, lalu proses sesuai aturan login
		// jika perlu login maka lanjut ke login
		// jika tidak maka lanjut ke halaman masukkan nama
		include("koneksi.php");
		
		$id = $_GET['id'];
		
		$query = mysqli_query($link, "select * from info_ujian where id_ujian=$id");
		
		if ($data = mysqli_fetch_array($query)){
			if ($data['perlu_login']==1){
				header('location:login_siswa.php?id='.$id);
			} else {
				header('location:nologin_siswa.php?id='.$id);
			}
		} else {
			header('location:notfound.php');
		}
	} else {
		header('location:notfound.php');
	}
?>