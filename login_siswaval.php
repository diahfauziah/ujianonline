<?php
	ini_set('session.gc_maxlifetime', 23400);
	session_start();
	if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['id'])){
		$id = $_POST['id'];
		if ((!empty($_POST['username'])) && (!empty($_POST['password']))){
			include("koneksi.php");
			
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$query = mysqli_query($link, "SELECT * FROM `akun_murid` WHERE `username`='$username' and `password`='$password'");
			$user = mysqli_fetch_array($query);
			
			if ($user != null){
				$_SESSION['nama'] = $user["nama"];
				$_SESSION['userid'] = $user["id_murid"];
				$_SESSION['username'] = $user["username"];
				$_SESSION['kategori_murid'] = $user["kategori_murid"];
				$_SESSION['role'] = "murid";
				$newURL = "petunjuk.php?id=$id";
				header('Location: '.$newURL);
			} else {
				$_SESSION['statuspesan'] = "gagal";
				$_SESSION["pesan"] = " Username/password salah.";
				$newURL = "login_siswa.php?id=$id";
				header('Location: '.$newURL);
			}
		} else {
			$_SESSION['statuspesan'] = "gagal";
			$_SESSION["pesan"] = "Silahkan isi username dan password terlebih dahulu";
			$newURL = "login_siswa.php?id=$id";
			header('Location: '.$newURL);
		}
		
	} else {
		$_SESSION['statuspesan'] = "gagal";
		$_SESSION["pesan"] = "Silahkan isi username dan password terlebih dahulu";
		$newURL = "login_siswa.php";
		header('Location: '.$newURL);
	}
?>