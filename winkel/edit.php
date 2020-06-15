<?php 
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from barang where id = $id ");
$d = mysqli_fetch_assoc($data);


if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'produk.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'produk.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>

	<link rel="stylesheet" type="text/css" href="dist/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/admin.css">
	<link rel="stylesheet" type="text/css" href="dist/font-awesome/css/fontawesome-all.min.css">
</head>
<body>
<div class="side-container float-left">
	<div class="logo">
		<h2><a href="#">FUTSALPHORA</a></h2>
	</div>
	<div class="menu">
		<ul class="list-unstyled">
			<li>
				<a href="#">
					<i class="fa fa-angle-right "></i>
					Beranda
				</a>
			</li>
			<li>
				<a href="#produk">
					<i class="fa fa-angle-right "></i>
					Produk
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-angle-right "></i>
					penjualan 
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-angle-right "></i>
					Konfirmasi Pembayaran
				</a>
			</li>
			<li>
				<a href="login1.php">
					<i class="fa fa-angle-right "></i>
					Keluar
				</a>
			</li>
		</ul>
	</div>
</div>
<div class="content-container float-left">
	<div class="content-title">
		<h2>
		Produk 
		</h2>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div id="produk">
            <div class="block-header">
                <center><h2>Tambah Produk</h2></center>
                <br>
                <br>
            </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        </div>
                                                        <!-- enctype="multipart/form-data" -->
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="body">
                            <input type="hidden" name="id" value="<?= $d['id']; ?>">
                            <input type="hidden" name="gambarlama" value="<?= $d['gambar']; ?>">
                            <h2 class="card-inside-title">Nama Produk</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama_produk" class="form-control" placeholder="NamaProduk" value="<?= $d['nama_produk']; ?>"/>
                                        </div>
                                    </div>
                                    <h2 class="card-inside-title">Harga</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="harga" class="form-control" placeholder="Harga" value="<?= $d['harga']; ?>" />
                                        </div>
                                    </div>
                                    <h2 class="card-inside-title">Deskripsi</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsibarang" value="<?= $d['deskripsi']; ?>" />
                                        </div>
                                    </div>
                                    <h2 class="card-inside-title">Jumlah</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" value="<?= $d['jumlah']; ?>" />
                                        </div>
                                    </div>
                                    <h2 class="card-inside-title">Kategori</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="kategori" class="form-control" placeholder="kategori" value="<?= $d['kategori']; ?>" />
                                        </div>
                                    </div>
                                    <h2 class="card-inside-title">Gambar</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <img src="img/<?= $d['gambar']; ?>" width="40">
                                            <input type="file" name="gambar" class="form-control" id="gambar" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <center>
                                    <button type="submit" class="btn btn-primary" name="submit">Ubah Produk </button>      
                                </center>	
			                </form>
		                </div>
		                </div>
                            </div>
                            </div>
                            </div>		
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
	</div>
</div>
</body>
</html>