<?php
unset($_COOKIE['username']);
setcookie('username', null, -1, '/');
unset($_COOKIE['password']);
setcookie('password', null, -1, '/');
unset($_COOKIE['role']);
setcookie('role', null, -1, '/');
header('Location: ../index.php');
return;
