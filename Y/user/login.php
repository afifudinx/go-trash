<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- mycss -->
    <link rel="stylesheet" href="../asset/css/signin.css">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Sweet alert -->
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <title>Login</title>
</head>
<body>
<main class="form-signin">
  <form method="POST">
    <h1 class="h3 mb-3 fw-normal"><b>Login</b></h1>
    <div class="form-floating">
      <input type="text" class="form-control" name="username" id="floatingInput" placeholder="Username">
      <label for="floatingInput"  required>Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword"  required>Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" id="tombol" name="submit" type="submit">Masuk</button>
    <p class="buatAkun">Belum punya akun? <a href="register.php">Buat Akun</a></p>
  </form>
</main>
</body>
</html>
<?php
    include "koneksi.php";
    
    if (isset($_POST['submit'])){
      $pesan =''; $redirect='';
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data = mysqli_query($koneksi, "select * from users where username='$username' ");

        $cek = mysqli_fetch_array($data); 
        if (empty($cek)){
          // $pesan = 'Username Belum Terdaftar' ;
          echo "<SCRIPT> alert('Login gagal. Username Belum Terdaftar');window.location='Y/user/login.php'</SCRIPT>";
        } else {
          if ($password != $cek['password']){
            echo "<SCRIPT> alert('Login gagal. Kata Sandi Salah');window.location='Y/user/login.php'</SCRIPT>";
          } else {
            session_start();
            $_SESSION['id_user'] = $cek['id_user'];
            $_SESSION['username'] = $username;
            echo "<SCRIPT> alert('Login Sukses');window.location='Y/indexUser.php'</SCRIPT>";
          }
        }
      }
    ?>