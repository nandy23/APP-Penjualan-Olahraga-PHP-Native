<?php
$koneksi=mysqli_connect("localhost","root","","futsalphora");

if (mysqli_connect_errno()){
  echo "Koneksi Gagal: ". mysqli_connect_errno();

}

function tambah($data) {
	global $koneksi;

	$nama_produk = htmlspecialchars($data["nama_produk"]);
	$harga = htmlspecialchars($data["harga"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$jumlah = htmlspecialchars($data["jumlah"]);
	$kategori = htmlspecialchars($data["kategori"]);

	// upload gambar
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}

	$query = "INSERT INTO barang
				VALUES
			  ('', '$nama_produk', '$harga', '$deskripsi', '$gambar', '$jumlah', '$kategori')";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}


function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if( $ukuranFile > 1000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;
}

function ubah($data) {
	global $koneksi;

	$id = $data["id"];
	$nama_produk = htmlspecialchars($data["nama_produk"]);
	$harga = htmlspecialchars($data["harga"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$gambarlama = htmlspecialchars($data["gambarlama"]);
	$jumlah = htmlspecialchars($data["jumlah"]);
	$kategori = htmlspecialchars($data["kategori"]);
	
	// cek apakah user pilih gambar baru atau tidak
	if( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarlama;
	} else {
		$gambar = upload();
	}
	

	$query = "UPDATE barang SET
				nama_produk = '$nama_produk',
				harga = '$harga',
				deskripsi = '$deskripsi',
				gambar = '$gambar',
				jumlah = '$jumlah',
				kategori = '$kategori'
			  WHERE id = $id
			";

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);	
}

?>