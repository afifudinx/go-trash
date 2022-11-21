<?php
require('../db_service.php');
$username = $_GET['username'];
try {
  $data = mysqli_query($conn, "delete from users where username='$username'");
  echo "<SCRIPT>alert('User berhasil dihapus');window.location='../../admin-user.php'</SCRIPT>";
  return;
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('User gagal dihapus');window.location='../../admin-user.php'</SCRIPT>";
  return;
}
