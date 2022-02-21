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
	  			<div class="card">
	  				<div class="card-body">
	  					<div class="col-md-12">
	  						<div class="col-md-12 row">	  							
		  						<div class="col-md-2 mb-3">
		  							Nama
		  						</div>
		  						<div class="col-md-10">
		  							: <?php echo $row['nama'] ; ?>
		  						</div>
	  						</div>

	  						<div class="col-md-12 row">	  							
		  						<div class="col-md-2 mb-3">
		  							Telepon
		  						</div>
		  						<div class="col-md-10">
		  							: <?php echo $row['telepon'] ; ?>
		  						</div>
	  						</div>

	  						<div class="col-md-12 row">	  							
		  						<div class="col-md-2 mb-3">
		  							Nama
		  						</div>
		  						<div class="col-md-10">
		  							: <?php echo $row['alamat'] ; ?>
		  						</div>
	  						</div>

	  						<div class="col-md-12 mt-3 mb-3">
	  							<a href="index.php" class="btn btn-primary float-end">Back to home</a>
	  						</div>
	  					</div>
	  				</div>	  				
	  			</div>
	  		</div>
	  	</div>
	  </div>
	</div>
</body>
</html>
