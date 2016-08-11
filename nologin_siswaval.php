<?php
	ini_set('session.gc_maxlifetime', 23400);
	session_start();
	if (isset($_POST['name']) && isset($_POST['id'])){
		$id = $_POST['id'];
		if (!empty($_POST['name'])){
			include("koneksi.php");
			
			$name = $_POST['name'];
			$username = generateRandomString();
			$password = generateRandomString();
			
			$insert = mysqli_query($link, "INSERT INTO `akun_murid`(`nama`, `username`, `password`, `kategori_murid`) VALUES ('$name','$username','$password','anonymous')");
			
			$query = mysqli_query($link, "SELECT MAX(id_murid) FROM `akun_murid`");
			$user = mysqli_fetch_array($query);
			
			if ($user != null){
				$_SESSION['nama'] = $name;
				$_SESSION['userid'] = $user["MAX(id_murid)"];
				$_SESSION['username'] = $username;
				$_SESSION['kategori_murid'] = "anonymous";
				$_SESSION['role'] = "murid";
				$newURL = "petunjuk.php?id=$id";
				header('Location: '.$newURL);
			} else {
				$_SESSION['statuspesan'] = "gagal";
				$_SESSION["pesan"] = " Terjadi Kesalahan";
				$newURL = "nologin_siswa.php?id=$id";
				header('Location: '.$newURL);
			}
		} else {
			$_SESSION['statuspesan'] = "gagal";
			$_SESSION["pesan"] = "Silahkan isi nama terlebih dahulu";
			$newURL = "nologin_siswa.php?id=$id";
			header('Location: '.$newURL);
		}
		
	} else {
		$_SESSION['statuspesan'] = "gagal";
		$_SESSION["pesan"] = "Silahkan isi nama terlebih dahulu";
		$newURL = "nologin_siswa.php";
		header('Location: '.$newURL);
	}
	
	function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
?>