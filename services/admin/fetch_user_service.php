<?php
require('./services/db_service.php');
try {
  $users = mysqli_query($conn, "select * from users");
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Users gagal di dapatkan');window.location='./index.php'</SCRIPT>";
  return;
}
