<?php
require('db_service.php');
$nama = $_GET['nama'];
try {
  $informasi = mysqli_query($conn, "select * from informasis where nama='$nama' limit 1");
  $informasi = mysqli_fetch_array($informasi);
  $nama = $informasi['nama'];
  $harga = $informasi['harga'];
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Informasi gagal di dapatkan');window.location='../index.php'</SCRIPT>";
  return;
}
