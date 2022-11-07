<?php
	include 'koneksi.php';
	$id=$_GET['id'];

	$sql = "DELETE from drivers where id_driver=$id";
	$hasil = mysqli_query($koneksi,$sql);
	if(!$hasil){
        echo "<script>
                alert('Delete Data Gagal!');
                document.location.href = 'dataDriver.php';
            </script>";
    } else {
        echo "<script>
                alert('Delete Data Berhasil!');
                document.location.href = 'dataDriver.php';
            </script>";
    }
	
?>