<?php
require 'koneksi.php';

// // function upload() {

//     $namaFile = $_FILES['gambar']['name'];
//     $ukuranFile = $_FILES['gambar']['size'];
//     $error = $_FILES['gambar']['error'];
//     $tmpName = $_FILES['gambar']['tmp_name'];

//     // cek apakah tidak ada gambar yang diupload
//     if( $error === 4 ) {
//         echo "<script>
//                 alert('pilih gambar terlebih dahulu!');
//               </script>";
//         return false;
//     }

//     // cek apakah yang diupload adalah gambar
//     $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
//     $ekstensiGambar = explode('.', $namaFile);
//     $ekstensiGambar = strtolower(end($ekstensiGambar));
//     if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
//         echo "<script>
//                 alert('yang anda upload bukan gambar!');
//               </script>";
//         return false;
//     }

    // cek jika ukurannya terlalu besar
//     if( $ukuranFile > 1000000 ) {
//         echo "<script>
//                 alert('ukuran gambar terlalu besar!');
//               </script>";
//         return false;
//     }

//     // lolos pengecekan, gambar siap diupload
//     // generate nama gambar baru
//     $namaFileBaru = uniqid();
//     $namaFileBaru .= '.';
//     $namaFileBaru .= $ekstensiGambar;

//     move_uploaded_file($tmpName, 'img/bukti_bayar/' . $namaFileBaru);

//     return $namaFileBaru;
// }

if( isset($_POST["submit"]) ) {
    $nama = $_POST["nama"];
    $cek = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE nama = '$nama'");
    $cek_nama = mysqli_fetch_assoc($cek);
    $id = $cek_nama['id'];
    // var_dump($cek_nama);die;
    $gambar = upload();
	if( !$gambar ) {
		return false;
    }
    
	$query = "UPDATE pembayaran SET
				gambar = '$gambar'
			  WHERE id = $id ";

	// mysqli_query($koneksi, $query);
    $result = mysqli_query($koneksi, $query);
    // var_dump($result);die;
    // var_dump($_POST);
    // var_dump($_FILES);die;

	if( $result ) {
		echo "
		    <script>
				alert('Terima Kasih, Sudah Membeli Barang di Toko kami');
				document.location.href = 'cod.php';
			</script>";
	} else {
		echo "
			<script>
				alert('Silahkan upload bukti pembayaran kembali');
				document.location.href = 'transfer.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Futsalphora</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-black">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Futsalphora</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

		  <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index2.php" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php?kategori=jersey">jersey</a>
				<a class="dropdown-item" href="sepatu.php?kategori=sepatu">sepatu</a>
				<a class="dropdown-item" href="bola.php?kategori=bola">bola</a>
                <a class="dropdown-item" href="checkout.php">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <ul class="nav justify-content-end">
            <form class="form-inline my-2 my-lg-0">
              <button class="btn btn-outline-success my-2 my-sm-0 "  type="submit"><a href="index.php">logout </a></button>
              </form>
	        </ul>
	      </div>
	    </div>
      </nav>
      
      <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Transfer</a></span>& upload bukti <span></span></p>
            <h1 class="mb-0 bread">Pembayaran</h1>
          </div>
        </div>
      </div>
    </div>
    <center>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 ftco-animate">
						<!-- <form action="#" class="billing-form"> -->
							<h3 class="mb-4 billing-heading">silahkan transfer di rekening <h4>(BCA)4260523452</h4> dan jika sudah trasfer silahkan upload bukti transfer di bawah ini :</h3>
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    <div class="col-md-6">
        <br>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="cart-detail bg-light p-3 p-md-4">
							<h3 class="billing-heading mb-4">Nama :</h3>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        NB : Masukan Nama yang sudah dimasukan pada form Pembayaran, untuk memudahkan konfirmasi pembayaran
                        </div>
						<div class="cart-detail bg-light p-3 p-md-4">
							<h3 class="billing-heading mb-4">upload bukti transfer :</h3>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" name="gambar" class="form-control" placeholder="Jumlah" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary py-3 px-4" name="submit">Simpan</button>
                        </form>
                            </center>
        
                                </div>
					        </div>
				        </div>
			         
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>