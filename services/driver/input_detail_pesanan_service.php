<?php
require('../db_service.php');
$username = $_COOKIE['username'];
$id = $_GET['id'];
$form = $_POST;
$est = $form['est'];
if (empty($est)) {
  header('Location: ../../driver-riwayat.php');
  return;
}
try {
  $data = mysqli_query($conn, "update transactions set est='$est', status='done' where id='$id';");
  $data = mysqli_query($conn, "update drivers set is_service='0' where username='$username';");
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Transaksi gagal');window.location='../../driver-riwayat.php'</SCRIPT>";
  return;
}
echo "<SCRIPT>alert('Transaksi sukses');window.location='../../driver-riwayat.php'</SCRIPT>";
