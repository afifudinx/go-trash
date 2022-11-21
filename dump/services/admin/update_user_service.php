<?php
require('../db_service.php');
$username = $_GET['username'];
$form = $_POST;
$firstname = $form['firstname'];
$lastname = $form['lastname'];
$email = $form['email'];
$nohp = $form['nohp'];

if (empty($username) || empty($firstname) || empty($lastname) || empty($email) || empty($nohp)) {
  echo "<SCRIPT>alert('Update profile gagal');window.location='../../data-user.php'</SCRIPT>";
  return;
}
try {
  $data = mysqli_query($conn, "update users set firstname='$firstname', lastname='$lastname', email='$email', nohp='$nohp' where username='$username';");
} catch (\Throwable $th) {
  echo "<SCRIPT>alert('Update profile gagal');window.location='../../data-user.php'</SCRIPT>";
  return;
}
echo "<SCRIPT>alert('Update profile sukses');window.location='../../data-user.php'</SCRIPT>";
