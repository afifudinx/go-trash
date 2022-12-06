<?php
require('db_service.php');
try {
  $informasis = mysqli_query($conn, "select * from informasis");
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Informasi gagal di dapatkan');window.location='../index.php'</SCRIPT>";
  return;
}
