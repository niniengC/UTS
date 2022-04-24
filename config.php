<?php
	$dbServer ="localhost";
	$dbUser = "root";
	$dbPassword="";
	$dbName="db_094";

	$db=mysqli_connect($dbServer,$dbUser,$dbPassword,$dbName);

	if (!$db) {
		echo "koneksi gagal";
	}
?>