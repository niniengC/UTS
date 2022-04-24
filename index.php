<!DOCTYPE html>
<html>
	<head>
		<title>halaman index</title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body>
		<div class="container-sm">
			<header><h3 class="text-center">DATA</h3></header>
			<nav><a href=" formTambahData.php" class="btn btn-dark">Tambah Data</a></nav>
			
			<br>
			<table class="table table-dark table-hover">
				<thead>
					<tr>
						<th>id_ninieng</th>
						<th>nama_ninieng</th>
						<th>email_ninieng</th>
						<th>alamat_ninieng</th>
						<th>opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						include "config.php";
						$sql= "SELECT * FROM tbl_ninieng";
						$hasil = mysqli_query($db, $sql);

						while ($data = mysqli_fetch_array($hasil)) {
							echo "<tr>";
							echo "<td>".$data['id_ninieng']."</td>";
							echo "<td>".$data['nama_ninieng']."</td>";
							echo "<td>".$data['email_ninieng']."</td>";
							echo "<td>".$data['alamat_ninieng']."</td>";
							echo "<td>";
							echo "<a href='formUpdateData.php?id=".$data['id_ninieng']."' >";
		            ?>
		            		<button type="button" class="btn btn-light">Update</button>
		            <?php
		            		echo "</a>";
		            		echo "<a href='hapusData.php?id=".$data['id_ninieng']."'>";
		            ?>
		            		<button type="button" class="btn btn-light">Delete</button>
		            <?php
		            		echo "</a>";
							echo "</td>";
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>