
<?php
	 include ("koneksi.php"); 
	$id = $_GET['id'];
	
	
	$delete = "DELETE FROM `info_ujian` WHERE `id_ujian`='$id' ";
	$delete_query = mysqli_query($link, $delete);

	$delete = "DELETE FROM `ujian_dibuat_guru` WHERE `id_ujian`='$id' ";
	$delete_query = mysqli_query($link, $delete);

	if($delete_query){
		header('location:index_guru.php');
	} 
?>



