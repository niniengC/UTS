<!DOCTYPE html>
<html>
	<head>
		<title>Form Tambah Data</title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body>
		<div>
			<header>
				<h3> Tambah Data Baru </h3>
			</header>
			<br>
			<?php
						include("config.php");
						$id_ninieng = $_GET['id'];
			        	$sql = "SELECT * FROM tbl_ninieng WHERE id_ninieng=$id_ninieng";
			        	$hasil = mysqli_query($db, $sql);

				        // apakah query update berhasil?
				        if (!$hasil ) {
				            echo "Query salah";
				            } 
				        while($data= mysqli_fetch_array($hasil)){

					?>

	        <form action="updateData.php" method="POST">
	        	<input type="hidden" name="id_ninieng" value="<?php echo $data['id_ninieng'] ?>" />
	            <div class="form-floating mb-3 mt-3">
	                <input type="text" name="nama_ninieng" value="<?php echo $data['nama_ninieng'] ?>" class="form-control" />
	                <label for="nama_ninieng" ><b>nama_ninieng : </b></label>
	            </div>
	            <div class="form-floating mb-3 mt-3">
	                <input type="email" name="email_ninieng" value="<?php echo $data['email_ninieng'] ?>" class="form-control"/>
	                <label for="email_ninieng" ><b>email_ninieng : </b></label>
	            </div>
	            <div class="form-floating mb-3 mt-3">
	                <input type="text"  name="alamat_ninieng" value="<?php echo $data['alamat_ninieng'] ?>" class="form-control"/>
	                <label for="alamat_ninieng" ><b>alamat_ninieng : </b></label>
	            </div>
	           
	            <div class="text-center">
	                <button type="submit" class="btn btn-dark">Update</button>
	            </div>
	        </form>
	        <?php } ?>
		</div>
	</body>
</html>