<?php
	include("config.php");

	$nama_ninieng=$_POST['nama_ninieng'];
	$email_ninieng=$_POST['email_ninieng'];
	$alamat_ninieng=$_POST['alamat_ninieng'];
	
	$sql="INSERT INTO tbl_ninieng (nama_ninieng,email_ninieng,alamat_ninieng) VALUES ('$nama_ninieng', '$email_ninieng', '$alamat_ninieng')";
	$hasil= mysqli_query($db,$sql);

	if (!$hasil) {
		header('Location: index.php?status=gagal');
	} else {
		header('Location: index.php?status=sukses');
	}
?>