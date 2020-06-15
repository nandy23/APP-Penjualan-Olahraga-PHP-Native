<?php
include 'koneksi.php';
if( isset($_POST["login"]) ) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
	// cek username
	if( mysqli_num_rows($result) === 1 ) {
		// cek password
		$row = mysqli_fetch_assoc($result);
		if( $password ===  $row["password"])  {
			header("Location: index.html");
			exit;
		}
	}
	$error = true;
}
?>