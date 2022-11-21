<?php
require('../db_service.php');
$form = $_POST;
$username = $form['username'];
$password = $form['password'];
$firstname = $form['firstname'];
$lastname = $form['lastname'];
$email = $form['email'];
$nohp = $form['nohp'];
$address = $form['address'];

if (empty($username) || empty($password) || empty($firstname) || empty($lastname) || empty($email) || empty($nohp) || empty($address)) {
  echo "<SCRIPT>alert('Registrasi gagal');window.location='../../user-register.php'</SCRIPT>";
  return;
}
try {
  $data = mysqli_query($conn, "insert into users values('$username', '$password', '$firstname', '$lastname', '$email', '$nohp', '$address', '0');");
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Registrasi gagal');window.location='../../user-register.php'</SCRIPT>";
  return;
}
echo "<SCRIPT>alert('Registrasi sukses');window.location='../../login.php'</SCRIPT>";
