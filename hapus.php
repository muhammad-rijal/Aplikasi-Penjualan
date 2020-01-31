<?php 
	include "koneksi.php";
	$id = $_GET['id_barang'];
	mysqli_query($koneksi,"DELETE FROM tb_barang WHERE id_barang='$id'");
	header('location:barang.php');
 ?>