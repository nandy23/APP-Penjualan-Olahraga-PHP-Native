<?php
include 'koneksi.php';
if( isset($_POST["bayar"]) ) {
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$nomor = $_POST["nomor"];
	$email = $_POST["email"];
	$pembayaran = $_POST["optradio"];

	$query = "INSERT INTO pembayaran
				VALUES
			  ('', '$nama', '$alamat', '$nomor', '$email', '', '', '$pembayaran', '')";
	$result = mysqli_query($koneksi, $query);
	// var_dump($_POST);die;

	if( $result ) {
		if ($pembayaran == 'transfer') {
			echo "
			<script>
				alert('Terima Kasih, Silahkan Lanjutkan Pembayaran');
				document.location.href = 'transfer.php';
			</script>";
		}else {
			echo "
			<script>
				alert('Terima Kasih, Silahkan Lanjutkan Pembayaran');
				document.location.href = 'cod.php';
			</script>";
		}
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'produk.php';
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
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Pembayaran</span></p>
            <h1 class="mb-0 bread">Pembayaran</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 ftco-animate">
						<!-- <form action="#" class="billing-form"> -->
							<h3 class="mb-4 billing-heading">FORMULIR PEMBAYARAN</h3>
				<form action="" method="post">
					<div class="row align-items-end">
						<div class="w-100"></div>
						<div class="col-md-12">
						<div class="form-group">
						<label for="streetaddress">Nama lengkap</label>
						<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
						</div>
					</div>
					<div class="w-100"></div>
						<div class="col-md-12">
							<div class="form-group">
							<label for="streetaddress">Alamat Rumah</label>
						<input type="text" class="form-control" placeholder="alamat rumah" name="alamat">
						</div>
							</div>
						<div class="w-100"></div>
						<div class="col-md-12">
							<div class="form-group">
							<label for="streetaddress">No Telpon</label>
						<input type="text" class="form-control" placeholder="nomor telpon" name="nomor">
						</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-12">
							<div class="form-group">
							<label for="towncity">Email</label>
						<input type="text" class="form-control" placeholder="Email" name="email">
						</div>
						</div>
						</div>
						</div>
						</div>
					</div>
				<!-- </form>END -->



				<div class="row mt-5 pt-3 d-flex">
					<div class="col-md-6 d-flex">
						<div class="cart-detail cart-total bg-light p-3 p-md-4">
							<h3 class="billing-heading mb-4">Total Belanja</h3>
							<p class="d-flex">
										<span>Harga</span>
										<span>80000</span>
									</p>
									<p class="d-flex">
										<span>Pengiriman</span>
										<span>18000</span>
									</p>
									<!-- <p class="d-flex">
										<span>Discount</span>
										<span>$3.00</span>
									</p> -->
									<hr>
									<p class="d-flex total-price">
										<span>Total</span>
										<span>98000</span>
									</p>
									</div>
					</div>
					<div class="col-md-6">
						<div class="cart-detail bg-light p-3 p-md-4">
							<h3 class="billing-heading mb-4">Pembayaran</h3>
										<div class="form-group">
											<div class="col-md-12">
												<div class="radio">
												<label><input type="radio" name="optradio" class="mr-2" value="transfer"> Transfer Bank</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<div class="radio">
												<label><input type="radio" name="optradio" class="mr-2" value="cod"> COD</label>
												</div>
											</div>
										</div>
										<!-- <div class="form-group">
											<div class="col-md-12">
												<div class="radio">
												<label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
												</div>
											</div>
										</div> -->
										<!-- <div class="form-group">
											<div class="col-md-12">
												<div class="checkbox">
												<label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
												</div>
											</div>
										</div> -->
										<button type="submit" class="btn btn-primary py-3 px-4" name="bayar">Bayar</button>
									</div>
					</div>
				</div>
			  </form>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

    <footer class="ftco-footer bg-light ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Winkel</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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