<?php
require('../db_service.php');
$username = $_COOKIE['username'];
$form = $_POST;
$name = $form['name'];
$nohp = $form['nohp'];
$type = $form['type'];
$address = $form['address'];
$description = $form['description'];
if (empty($name) || empty($nohp) || empty($type) || empty($address) || empty($description)) {
  header('Location: ../../user-register.php');
  return;
}
try {
  $data = mysqli_query($conn, "insert into transactions (name, user_username, nohp, type, address, description) values ('$name', '$username', '$nohp', '$type', '$address', '$description');");
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Transaksi gagal');window.location='../../pesan.php'</SCRIPT>";
  return;
}
echo "<SCRIPT>alert('Transaksi sukses');window.location='../../user-riwayat.php'</SCRIPT>";
