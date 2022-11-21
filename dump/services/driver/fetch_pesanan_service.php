<?php
require('./services/db_service.php');
try {
  $transactions = mysqli_query($conn, "select * from transactions where status='pending'");
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Transaksi gagal di dapatkan');window.location='./index.php'</SCRIPT>";
  return;
}
