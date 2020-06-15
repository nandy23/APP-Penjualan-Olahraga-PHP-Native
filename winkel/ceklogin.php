<?php
session_start();

include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];

$login=mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

$cek=mysqli_num_rows($login);

if ($cek >0){

	$data =mysqli_fetch_assoc($login);


	if ($data['kelas']=="admin"){

	$_SESSION['username'] = $username;
	$_SESSION['kelas'] = "admin";

	header("location:admin.php");
    }else if($data['kelas']=="user"){
    $_SESSION['username'] = $username;
	$_SESSION['kelas'] = "user";

	header("location:user.php");

    } else {
	header("location:login.php?pesan=gagal");
}
}
?>