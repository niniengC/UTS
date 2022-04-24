<?php
	include("config.php");

	$id_ninieng=$_POST['id_ninieng'];
	$nama_ninieng=$_POST['nama_ninieng'];
	$email_ninieng=$_POST['email_ninieng'];
	$alamat_ninieng=$_POST['alamat_ninieng'];
	
	$sql="UPDATE tbl_ninieng set nama_ninieng='$nama_ninieng',email_ninieng='$email_ninieng',alamat_ninieng='$alamat_ninieng' WHERE id_ninieng=$id_ninieng";
	$hasil= mysqli_query($db,$sql);

	if (!$hasil) {
		header('Location: index.php?status=gagal');
	} else {
		header('Location: index.php?status=sukses');
	}
?>