<?php
	$username   = $_POST['username'];
	$pass       = md5($_POST['password']);
	 
	include "koneksi.php";
	 
	$user = mysqli_query($koneksi,"select * from tb_kasir where username='$username' and password='$pass'");
	$chek = mysqli_num_rows($user);

	if($chek>0)
	{
	    session_start();
	    $row = mysqli_fetch_array($user);
	    $_SESSION['nama'] = $row['nama'];
	    header("location:admin.php");
	}else
	{
	    header("location:login.php");
	}
?>