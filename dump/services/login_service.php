<?php
require('./db_service.php');
$form = $_POST;
$username = $form['username'];
$password = $form['password'];
$role = $form['role'];


if (empty($username) || empty($password) || empty($role)) {
  header('Location: ../login.php');
  return;
} else if (!in_array($role, ['user', 'driver', 'admin'])) {
  header('Location: ../login.php');
  return;
}
if ($role != 'admin') {
  $role = $role . 's';
}
$data = mysqli_query($conn, "select * from $role where username='$username' ");
$data = mysqli_fetch_array($data);
if (empty($data)) {
  header('Location: ../login.php');
  return;
}
if ($password != $data['password']) {
  header('Location: ../login.php');
  return;
}
setcookie("username", $username, time() + (10 * 365 * 24 * 60 * 60), "/");
setcookie("password", $password, time() + (10 * 365 * 24 * 60 * 60), "/");
setcookie("role", $role, time() + (10 * 365 * 24 * 60 * 60), "/");
echo "<SCRIPT> alert('Login sukses');window.location='../index.php'</SCRIPT>";
