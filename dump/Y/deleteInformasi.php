<?php
	include 'koneksi.php';
	$id=$_GET['id'];

	$sql = "DELETE from informasis where id=$id";
	$hasil = mysqli_query($koneksi,$sql);
	if(!$hasil){
        echo "<script>
                alert('Delete Data Gagal!');
                document.location.href = 'indexAdmin.php';
            </script>";
    } else {
        echo "<script>
                alert('Delete Data Berhasil!');
                document.location.href = 'indexAdmin.php';
            </script>";
    }
	
?>