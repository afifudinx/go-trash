<?php
include "koneksi.php";

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$nohp = $_POST['no'];
$address = $_POST['alamat'];

$sql = "UPDATE users set username='$username', password='$password', firstname='$firstname', lastname='$lastname', email='$email', nohp='$nohp', address='$address' where id_user='$id'";
$hasil = mysqli_query($koneksi,$sql);
if(!$hasil){
	echo "<script>
			alert('Edit Data Gagal!');
			document.location.href = 'formEditDataUser.php';
		</script>";
} else {
	echo "<script>
			alert('Edit Data Berhasil!');
			document.location.href = 'dataUser.php';
		</script>";
}
?>