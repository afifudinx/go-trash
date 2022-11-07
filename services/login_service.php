<?php
require('./db_service.php');
$form = $_POST;
$username = $form['username'];
$password = $form['password'];
$role = $form['role'];


if (empty($username) || empty($password) || empty($role)) {
    header('Location: ../login.php');
    return;
} else if (!in_array($role, ['user', 'kurir', 'admin'])) {
    header('Location: ../login.php');
    return;
}

$role = $role . 's';
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
echo "<SCRIPT> alert('Login sukses');window.location='../index.php'</SCRIPT>";
