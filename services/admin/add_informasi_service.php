<?php
require('../db_service.php');
$form = $_POST;
$nama = $form['nama'];
$harga = $form['harga'];

if (empty($harga) || empty($nama)) {
  echo "<SCRIPT>alert('Tambah informasi gagal');window.location='../../admin-informasi.php'</SCRIPT>";
  return;
}
try {
  $data = mysqli_query($conn, "insert into informasis values(null,'$nama','$harga');");
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Tambah informasi gagal nih');window.location='../../admin-informasi.php'</SCRIPT>";
  return;
}
echo "<SCRIPT>alert('Tambah informasi sukses');window.location='../../admin-informasi.php'</SCRIPT>";
