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
	  			<form method="post" action="input.php">
		  			<div class="mb-3">
					  <label class="form-label">Nama</label>
					  <input type="text" name="nama" class="form-control">
					</div>

		  			<div class="mb-3">
					  <label class="form-label">Telepon</label>
					  <input type="text" name="telepon" class="form-control">
					</div>

					<div class="mb-3">
					  <label class="form-label">Alamat</label>
					  <textarea name="alamat" class="form-control" rows="3"></textarea>
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
