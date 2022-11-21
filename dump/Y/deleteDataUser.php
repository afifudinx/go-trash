<?php
	include 'koneksi.php';
	$id=$_GET['id'];

	$sql = "DELETE from users where id_user=$id";
	$hasil = mysqli_query($koneksi,$sql);
	if(!$hasil){
        echo "<script>
                alert('Delete Data Gagal!');
                document.location.href = 'dataUser.php';
            </script>";
    } else {
        echo "<script>
                alert('Delete Data Berhasil!');
                document.location.href = 'dataUser.php';
            </script>";
    }
	
?>