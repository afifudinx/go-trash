<?php
include "koneksi.php";

$id = $_POST['id'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];

$sql = "UPDATE informasis set name='$jenis', content='$harga' where id='$id'";
$hasil = mysqli_query($koneksi,$sql);
if(!$hasil){
	echo "<script>
			alert('Edit Data Gagal!');
			document.location.href = 'formEditInformasi.php';
		</script>";
} else {
	echo "<script>
			alert('Edit Data Berhasil!');
			document.location.href = 'indexAdmin.php';
		</script>";
}
?>