<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$username = $_POST['username'];
$password = $_POST['password'];
$kelas = $_POST['kelas'];
// query SQL untuk insert data
// "INSERT INTO login VALUES('', '$username', '', '$password')"
$query="INSERT INTO user VALUES ('','$username','$password','$kelas')";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:login1.html");
?>