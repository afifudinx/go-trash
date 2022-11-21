<?php
require('../db_service.php');
$username = $_COOKIE['username'];
$form = $_POST;
$password = $form['password'];
$firstname = $form['firstname'];
$lastname = $form['lastname'];
$email = $form['email'];
$nohp = $form['nohp'];

if (empty($username) || empty($password) || empty($firstname) || empty($lastname) || empty($email) || empty($nohp)) {
  header('Location: ../../driver-profile.php');
  return;
}
try {
  $data = mysqli_query($conn, "update drivers set password='$password', firstname='$firstname', lastname='$lastname', email='$email', nohp='$nohp' where username='$username';");
  setcookie("password", $password, time() + (10 * 365 * 24 * 60 * 60), "/");
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Update profile gagal');window.location='../../driver-profile.php'</SCRIPT>";
  return;
}
echo "<SCRIPT>alert('Update profile sukses');window.location='../../driver-profile.php'</SCRIPT>";
