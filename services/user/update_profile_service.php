<?php
require('../db_service.php');
$username = $_COOKIE['username'];
$form = $_POST;
$password = $form['password'];
$firstname = $form['firstname'];
$lastname = $form['lastname'];
$email = $form['email'];
$nohp = $form['nohp'];
$address = $form['address'];

if (empty($username) || empty($password) || empty($firstname) || empty($lastname) || empty($email) || empty($nohp) || empty($address)) {
  header('Location: ../../user-profile.php');
  return;
}
try {
  $data = mysqli_query($conn, "update users set password='$password', firstname='$firstname', lastname='$lastname', email='$email', nohp='$nohp', address='$address' where username='$username';");
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Update profile gagal');window.location='../../user-profile.php'</SCRIPT>";
  return;
}
echo "<SCRIPT>alert('Update profile sukses');window.location='../../user-profile.php'</SCRIPT>";
