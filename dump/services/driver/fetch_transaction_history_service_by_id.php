<?php
require('../services/db_service.php');
$username = $_COOKIE['username'];
$id = $_GET['id'];
try {
  $transaction = mysqli_query($conn, "select * from transactions where driver_username='$username' AND id='$id'");
  $transaction = mysqli_fetch_array($transaction);
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('History gagal di dapatkan');window.location='./index.php'</SCRIPT>";
  return;
}
