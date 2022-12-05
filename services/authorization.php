<?php
require('./services/db_service.php');
$username = $_COOKIE['username'];
$password = $_COOKIE['password'];
$role = $_COOKIE['role'];

if (empty($username) || empty($password) || empty($role)) {
  unset($_COOKIE['username']);
  setcookie('username', null, -1, '/');
  unset($_COOKIE['password']);
  setcookie('password', null, -1, '/');
  unset($_COOKIE['role']);
  setcookie('role', null, -1, '/');
  $username = '';
  $password = '';
  $role = '';
} else {
  $data = mysqli_query($conn, "select * from $role where username='$username' ");
  $data = mysqli_fetch_array($data);
  if (empty($data)) {
    unset($_COOKIE['username']);
    setcookie('username', null, -1, '/');
    unset($_COOKIE['password']);
    setcookie('password', null, -1, '/');
    unset($_COOKIE['role']);
    setcookie('role', null, -1, '/');
    $username = '';
    $password = '';
    $role = '';
  } else if ($password != $data['password']) {
    unset($_COOKIE['username']);
    setcookie('username', null, -1, '/');
    unset($_COOKIE['password']);
    setcookie('password', null, -1, '/');
    unset($_COOKIE['role']);
    setcookie('role', null, -1, '/');
    $username = '';
    $password = '';
    $role = '';
  }
}
if ($role === 'users' && !in_array($access, ['all', 'users'])) {
  header('Location: ./index.php');
  return;
} else if ($role === 'drivers' && !in_array($access, ['all', 'drivers'])) {
  header('Location: ./index.php');
  return;
} else if ($role === 'admin' && !in_array($access, ['all', 'admin'])) {
  header('Location: ./index.php');
  return;
} else if ($role === '' && in_array($access, ['users', 'drivers', 'admin'])) {
  header('Location: ./index.php');
  return;
} else if ($role !== '' && in_array($access, ['unlogged'])) {
  header('Location: ./index.php');
  return;
}
