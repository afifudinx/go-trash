<?php
include "koneksi.php";

$jenis = $_POST['jenis'];
$harga = $_POST['harga'];

$sql = "INSERT into informasis values (null,'$jenis','$harga')";
$hasil = mysqli_query($koneksi,$sql);
if(!$hasil){
	echo "<script>
			alert('Input Gagal!');
			document.location.href = 'formInputInformasi.php';
		</script>";
} else {
	echo "<script>
			alert('Input Berhasil!');
			document.location.href = 'indexAdmin.php';
		</script>";
}
?>
