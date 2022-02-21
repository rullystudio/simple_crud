<?php 
	include "koneksi.php" ;
	$nama = $_POST['nama'];
	$telepon = $_POST['telepon'];
	$alamat = $_POST['alamat'];
	$query = "INSERT INTO user set 
									nama = '$nama',
									telepon = '$telepon',
									alamat = '$alamat'
			 ";
	if(mysqli_query($koneksi, $query)){
		header('location:index.php');
	}
	else
	{
		echo "input data failed <br>";
		mysqli_error() ;
	}

?>