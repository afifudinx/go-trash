<?php
require('./services/db_service.php');
$username = $_COOKIE['username'];
try {
  $data = mysqli_query($conn, "select * from users where username='$username' limit 1");
  $data = mysqli_fetch_array($data);
  $firstname = $data['firstname'];
  $lastname = $data['lastname'];
  $email = $data['email'];
  $nohp = $data['nohp'];
  $address = $data['address'];
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('User gagal di dapatkan');window.location='./index.php'</SCRIPT>";
  return;
}
