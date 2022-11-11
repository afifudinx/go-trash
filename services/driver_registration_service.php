<?php
require('./db_service.php');
$form = $_POST;
$username = $form['username'];
$password = $form['password'];
$firstname = $form['firstname'];
$lastname = $form['lastname'];
$email = $form['email'];
$nohp = $form['nohp'];

if (empty($username) || empty($password) || empty($firstname) || empty($lastname) || empty($email) || empty($nohp)) {
  header('Location: ../driver-register.php');
  return;
}
try {
  $data = mysqli_query($conn, "insert into drivers values('$username', '$password', '$firstname', '$lastname', '$email', '$nohp');");
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Registrasi gagal');window.location='../driver-register.php'</SCRIPT>";
  return;
}
echo "<SCRIPT>alert('Registrasi sukses');window.location='../login.php'</SCRIPT>";
