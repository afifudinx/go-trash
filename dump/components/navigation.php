<?php
require('./services/authorization.php');
?>
<nav class="py-2 bg-light border-bottom">
  <div class="container d-flex flex-wrap">
    <ul class="nav me-auto">
      <?php
      if ($role === 'users') {
        echo '
        <li class="nav-item">
            <a href="./" class="nav-link link-dark px-2 active">Home</a>
        </li>
        <li class="nav-item">
            <a href="./pesan.php" class="nav-link link-dark px-2">Pesan</a>
        </li>
        <li class="nav-item">
            <a href="./user-riwayat.php" class="nav-link link-dark px-2">Riwayat</a>
        </li>
        ';
      } else if ($role === 'drivers') {
        echo '
        <li class="nav-item">
            <a href="./" class="nav-link link-dark px-2 active">Home</a>
        </li>
        <li class="nav-item">
            <a href="./pesanan.php" class="nav-link link-dark px-2">Pesanan</a>
        </li>
        <li class="nav-item">
            <a href="./driver-riwayat.php" class="nav-link link-dark px-2">Riwayat</a>
        </li>
        ';
      } else if ($role === 'admin') {
        echo '
        <li class="nav-item">
            <a href="./" class="nav-link link-dark px-2 active">Home</a>
        </li>
        <li class="nav-item">
            <a href="./data-user.php" class="nav-link link-dark px-2">Data User</a>
        </li>
        <li class="nav-item">
            <a href="./data-driver.php" class="nav-link link-dark px-2">Data Driver</a>
        </li>
        <li class="nav-item">
            <a href="./data-transaksi.php" class="nav-link link-dark px-2">Data Transaksi</a>
        </li>
        ';
      } else {
        echo '
        <li class="nav-item">
            <a href="#" class="nav-link link-dark px-2 active">Home</a>
        </li>
        ';
      }
      ?>
    </ul>
    <ul class="nav">
      <?php
      if (!in_array($role, ['users', 'drivers', 'admin'])) {
        echo '
        <li class="nav-item">
            <a href="./login.php" class="nav-link link-dark px-2">Login</a>
        </li>
        <li class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Sign Up
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./user-register.php">User</a></li>
                <li><a class="dropdown-item" href="./driver-register.php">Driver</a></li>
            </ul>
        </li>
        ';
      } else if ($role === 'admin') {
        echo '
        <li class="nav-item">
            <a href="./services/logout_service.php" class="nav-link link-dark px-2">Logout</a>
        </li>
        ';
      } else if ($role === 'users') {
        echo '
        <li class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Akun
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./user-profile.php">Profil</a></li>
                <li><a class="dropdown-item" href="./services/logout_service.php">Logout</a></li>
            </ul>
        </li>
        ';
      } else {
        echo '
        <li class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Akun
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./driver-profile.php">Profil</a></li>
                <li><a class="dropdown-item" href="./services/logout_service.php">Logout</a></li>
            </ul>
        </li>
        ';
      }
      ?>
    </ul>
  </div>
</nav>