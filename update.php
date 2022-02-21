<?php 
	include "koneksi.php" ;

	$id = $_POST['id_user'] ;
	$nama = $_POST['nama'] ;
	$telepon = $_POST['telepon'] ;
	$alamat = $_POST['alamat'] ;

	$query = "UPDATE user SET 
							  nama = '$nama',
							  telepon = '$telepon',
							  alamat = '$alamat'
							  Where 
							  id_user = '$id'
			 " ;
	if(mysqli_query($koneksi, $query))
	{
		header('location:index.php');
	}
	else 
	{
		echo "Update Data Failed";
		mysql_error() ;
	}
?>