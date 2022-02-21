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
	  			<a href="add.php" class="btn btn-primary mb-4">Insert Data</a>
	  			<table class="table">
				  <thead>
				    <tr>
				      <th>No</th>
				      <th>Nama</th>
				      <th>Telepon</th>
				      <th>Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  		include "koneksi.php" ;
				  		$no = 1 ;
				  		$data = mysqli_query($koneksi, 
				  							  "SELECT * FROM user ORDER BY id_user DESC"
				  							) ;
				  		while($row = mysqli_fetch_array($data))
				  		{
				  	?>
				    <tr>
				      <td><?php echo $no++ ; ?></td>
				      <td><?php echo $row['nama'] ; ?></td>
				      <td><?php echo $row['telepon'] ; ?></td>
				      <td>
				      	<a href="detail.php?id=<?php echo $row['id_user'] ; ?>" class="btn btn-primary btn-sm">Detail</a> 
				      	<a href="edit.php?id=<?php echo $row['id_user'] ; ?>" class="btn btn-success btn-sm">Edit</a> 
				      	<a href="delete.php?id=<?php echo $row['id_user'] ; ?>"  class="btn btn-danger btn-sm">Delete</a>
				      </td>
				    </tr>
				    <?php } ?>
				  </tbody>
				</table>
	  		</div>
	  	</div>
	  </div>
	</div>
</body>
</html>
