<?php 
include 'koneksi.php';
$data = mysqli_query($koneksi,"select * from pembayaran");
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
				<a href="produk.php">
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
		Pembayaran 
		</h2>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div id="produk">
        <div class="body table-responsive">
            <br>
            <!-- <a href="tambahproduk.php">tambah produk</a> -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Nomor Telpon</th>
                                        <th>Email</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Pembayaran</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach($data as $row) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $row['nama']; ?></td>
                                        <td><?= $row['alamat']; ?></td>
                                        <td><?= $row['nomor_telp']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
                                        <td><?= $row['metode_pembayaran']; ?></td>
                                        <td>
                                            <!-- <a href="edit.php?id=<?= $row['id']; ?>">edit</a> | -->
                                            <a href="hapus.php?id=<?= $row['id']; ?>">Selsai</a>
                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach; ?>
                                    <!-- <tr>
                                        <th scope="row">2</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="edit.php">edit</a> |
                                            <a href="hapus.php">hapus</a>
                                    </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a href="edit.php">edit</a> |
                                            <a href="hapus.php">hapus</a>
                                    </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a href="edit.php">edit</a> |
                                            <a href="hapus.php">hapus</a>
                                    </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a href="edit.php">edit</a> |
                                            <a href="hapus.php">hapus</a>
                                    </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a href="edit.php">edit</a> |
                                            <a href="hapus.php">hapus</a>
                                    </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
		</div>
</div>
</body>
</html>