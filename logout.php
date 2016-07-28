<?php
	session_start();
	session_unset();
	session_destroy();
	$newURL = "login.php";
	header('Location: '.$newURL);
?>