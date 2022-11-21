<?php
require('../db_service.php');
$username = $_GET['username'];
try {
  $data = mysqli_query($conn, "delete from drivers where username='$username'");
  echo "<SCRIPT>alert('Driver berhasil dihapus');window.location='../../admin-driver.php'</SCRIPT>";
  return;
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Driver gagal dihapus');window.location='../../admin-driver.php'</SCRIPT>";
  return;
}
