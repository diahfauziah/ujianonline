<?php
	session_start();
	if (isset($_POST['username']) && isset($_POST['password'])){
		if ((!empty($_POST['username'])) && (!empty($_POST['password']))){
			include("koneksi.php");
			
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$query = mysqli_query($link, "SELECT * FROM `akun_guru` WHERE `username`='$username' and `password`='$password'");
			$user = mysqli_fetch_array($query);
			
			if ($user != null){
				$_SESSION['nama'] = $user["nama"];
				$_SESSION['userid'] = $user["id_guru"];
				$_SESSION['username'] = $user["username"];
				$_SESSION['kategori_guru'] = $user["kategori_guru"];
				$_SESSION['role'] = "guru";
				$newURL = "index_guru.php";
				header('Location: '.$newURL);
			} else {
				$_SESSION['statuspesan'] = "gagal";
				$_SESSION["pesan"] = " Username/password salah.";
				$newURL = "login.php";
				header('Location: '.$newURL);
			}
		} else {
			$_SESSION['statuspesan'] = "gagal";
			$_SESSION["pesan"] = "Silahkan isi username dan password terlebih dahulu";
			$newURL = "login.php";
			header('Location: '.$newURL);
		}
		
	} else {
		$_SESSION['statuspesan'] = "gagal";
		$_SESSION["pesan"] = "Silahkan isi username dan password terlebih dahulu";
		$newURL = "login.php";
		header('Location: '.$newURL);
	}
?>