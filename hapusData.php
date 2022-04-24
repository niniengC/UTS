<?php
	include("config.php");

	$id_ninieng=$_GET['id'];

	$sql="DELETE FROM tbl_ninieng WHERE id_ninieng=$id_ninieng";
	$hasil=mysqli_query($db,$sql);

	if (!$hasil) {
		header('Location: index.php?status=gagal');
	} else {
		header('Location: index.php?status=sukses');
	}
?>