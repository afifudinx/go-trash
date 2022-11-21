<?php
require('./services/db_service.php');
try {
  $drivers = mysqli_query($conn, "select * from drivers");
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Drivers gagal di dapatkan');window.location='./index.php'</SCRIPT>";
  return;
}
