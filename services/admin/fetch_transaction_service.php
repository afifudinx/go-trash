<?php
require('./services/db_service.php');
$username = $_COOKIE['username'];
try {
  $transactions = mysqli_query($conn, "select * from transactions");
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('History gagal di dapatkan');window.location='./index.php'</SCRIPT>";
  return;
}
