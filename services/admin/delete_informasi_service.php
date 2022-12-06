<?php
require('../db_service.php');
$nama = $_GET['nama'];
try {
  $data = mysqli_query($conn, "delete from informasis where nama='$nama'");
  echo "<SCRIPT>alert('Informasi berhasil dihapus');window.location='../../admin-informasi.php'</SCRIPT>";
  return;
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Informasi gagal dihapus');window.location='../../admin-informasi.php'</SCRIPT>";
  return;
}
