<?php
require('../db_service.php');
$nama = $_GET['nama'];
$form = $_POST;
$newNama = $form['nama'];
$harga = $form['harga'];

if (empty($nama) || empty($harga) || empty($newNama)) {
  echo "<SCRIPT>alert('Update informasi gagal');window.location='../../admin-informasi.php'</SCRIPT>";
  return;
}
try {
  $data = mysqli_query($conn, "update informasis set nama='$newNama', harga='$harga' where nama='$nama';");
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Update informasi gagal');window.location='../../admin-informasi.php'</SCRIPT>";
  return;
}
echo "<SCRIPT>alert('Update informasi sukses');window.location='../../admin-informasi.php'</SCRIPT>";
