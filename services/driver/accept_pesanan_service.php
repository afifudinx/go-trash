<?php
$access = 'drivers';
require('../db_service.php');
$id = $_GET['id'];
$username = $_COOKIE['username'];

try {
  $check = mysqli_query($conn, "select * from drivers where username='$username';");
  $check = mysqli_fetch_array($check);
  if ($check['is_service'] == '1') {
    echo "<SCRIPT>alert('Transaksi gagal di terima, anda masih mempunyai pesanan yang perlu diproses');window.location='../../driver-pesanan.php'</SCRIPT>";
    return;
  } else {
    $transactions = mysqli_query($conn, "update transactions set driver_username='$username', status='process' where id='$id';");
    mysqli_query($conn, "update drivers set is_service=true where username='$username'");
    echo "<SCRIPT>alert('Transaksi berhasil di terima');window.location='../../driver-riwayat.php'</SCRIPT>";
    return;
  }
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Transaksi gagal di terima');window.location='../../driver-pesanan.php'</SCRIPT>";
  return;
}
