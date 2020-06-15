<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"DELETE From barang WHERE id='$id'") or die (mysqli_error());
if ($sql) {
    echo "
			<script>
				alert('data berhasil dihapus!');
				document.location.href = 'produk.php';
			</script>
		";
} else {
    echo "
			<script>
				alert('data gagal dihapus!');
				document.location.href = 'produk.php';
			</script>
		";
}

?>