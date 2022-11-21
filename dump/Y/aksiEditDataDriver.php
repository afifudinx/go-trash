<?php
include "koneksi.php";

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$nohp = $_POST['no'];

$sql = "UPDATE drivers set username='$username', password='$password', firstname='$firstname', lastname='$lastname', email='$email', nohp='$nohp' where id_driver='$id'";
$hasil = mysqli_query($koneksi,$sql);
if(!$hasil){
	echo "<script>
			alert('Edit Data Gagal!');
			document.location.href = 'formEditDataDriver.php';
		</script>";
} else {
	echo "<script>
			alert('Edit Data Berhasil!');
			document.location.href = 'dataDriver.php';
		</script>";
}
?>