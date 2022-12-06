<?php
require('./services/db_service.php');
$username = $_COOKIE['username'];
$id = $_GET['id'];
try {
  $transaction = mysqli_query($conn, "SELECT T.id, T.name, T.user_username, T.driver_username, T.nohp, I.nama, T.est, T.address, T.trx_date, T.description, T.status FROM transactions T INNER JOIN informasis I ON T.type = I.id WHERE T.driver_username='$username' AND T.id='$id'");
  $transaction = mysqli_fetch_array($transaction);
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('History gagal di dapatkan');window.location='./index.php'</SCRIPT>";
  return;
}
