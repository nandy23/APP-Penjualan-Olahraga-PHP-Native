<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
   // $kelas = $_POST['kelas'];
    // query SQL untuk insert data
    // "INSERT INTO login VALUES('', '$username', '', '$password')"
    // var_dump($_POST);
    
    $query="INSERT INTO user VALUES('','$username','$password','')";
    mysqli_query($koneksi, $query);
    // mengalihkan ke halaman index.php
    // die;
    header("location:login1.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar FUTSALPHORA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <center>
  <h2>Daftar</h2>
  bergabung dengan toko kami untuk mendapatkan diskon Menarik dari toko kami<br>
  <br>
  <br>
</center>

  <form action="" class="was-validated" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
<!-- //<div class="form-group">
      <label for="kelas">kelas:</label>
      <input type="text" class="form-control" id="kelas" placeholder="Enter kelas" name="kelas" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div> -->
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name ="submit">Daftar </button>
  </form>
</div>

</body>
</html>
