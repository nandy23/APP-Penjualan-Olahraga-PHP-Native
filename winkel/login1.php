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
      if ($row['kelas'] == 'admin') {
        header("Location: admin2.php");
      }else {
        header("Location: index2.php");
      }
		}
	}
	$error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login FUTSALPHORA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <h2>Login</h2>

  <form action="" class="was-validated" method="post">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="username" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name="login">Login </button>
    <center>
      belum punya Akun? <a href="daftar.php">Daftar</a>
      </center>
  </form>
</div>
</body>
</html>
