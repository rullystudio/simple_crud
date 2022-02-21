<?php 
	include "koneksi.php" ;
	$data = mysqli_query ($koneksi, "SELECT * from user where id_user = '$_GET[id]' " );
	$row = mysqli_fetch_array($data) ;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	  <div class="col-md-12 row justify-content-center">
	  	<div class="col-md-8 mt-5">
	  		<div class="col-md-12 text-center">
	  			<h1>Simple Crud PHP MySQL</h1>
	  			By : <a href="https://www.rullystudio.com">Rully Studio</a>
	  		</div>
	  		<div class="col-md-12 mt-5">
	  			<form method="post" action="update.php">
	  				<input type="hidden" name="id_user" value="<?php echo $row['id_user'] ; ?>">
		  			<div class="mb-3">
					  <label class="form-label">Nama</label>
					  <input type="text" name="nama" class="form-control" value="<?php echo $row['nama'] ; ?>">
					</div>

		  			<div class="mb-3">
					  <label class="form-label">Telepon</label>
					  <input type="text" name="telepon" class="form-control" value="<?php echo $row['telepon'] ; ?>">
					</div>

					<div class="mb-3">
					  <label class="form-label">Alamat</label>
					  <textarea name="alamat" class="form-control" rows="3"><?php echo $row['alamat'] ; ?></textarea>
					</div>

					<div class="mb-3 text-end">
					  <a href="index.php" class="btn btn-success">Back to home</a>
					  <button type="submit" class="btn btn-primary ml-2">Simpan</button>
					</div>
				</form>
	  		</div>
	  	</div>
	  </div>
	</div>
</body>
</html>
