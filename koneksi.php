<?php
	$server="localhost";
	$username="root";
	$password="";
	$database="ujianonlinedb";
	$link = mysqli_connect($server,$username,$password,$database);
	/* check connection */
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
?>
 
