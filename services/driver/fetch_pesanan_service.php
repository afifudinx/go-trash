<?php
require('./services/db_service.php');
try {
  $transactions = mysqli_query($conn, "SELECT T.id, T.name, T.user_username, T.driver_username, T.nohp, I.nama, T.est, T.address, T.trx_date, T.description, T.status FROM transactions T INNER JOIN informasis I ON T.type = I.id WHERE T.status='pending'");
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Transaksi gagal di dapatkan');window.location='../index.php'</SCRIPT>";
  return;
}
