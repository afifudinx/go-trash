<?php
  session_start();

  include '../koneksi.php';
?>

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
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Sweet alert -->
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <title>Login</title>
</head>
<body>
<main class="form-signin">
  <?php
  if (isset($_POST['submit'])) {
      $userName = $_POST['userName'];
      $password = md5($_POST['password']);
      
      $sql = "SELECT * FROM users WHERE username='$userName' AND password='$password'";
      $hasil = mysqli_query($koneksi, $sql);
      $cek = mysqli_num_rows($hasil);
      echo($cek);die;
      if ($cek > 0) {
          $row = mysqli_fetch_assoc($hasil);
          $_SESSION['userName'] = $row['username'];
          header("Location: ../index.php");
      } else {
          echo "<script>swal.fire('Gagal', 'Username atau password Anda salah. Silahkan coba lagi!', 'error')</script>";
      }
  }
  ?>
  <form method="POST">
    <h1 class="h3 mb-3 fw-normal"><b>Login</b></h1>
    <div class="form-floating">
      <input type="text" class="form-control" name="userName" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput"  required>User Name</label>
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