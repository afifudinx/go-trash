<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- mycss -->
    <link rel="stylesheet" href="../asset/css/signinDriver.css">
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
  include '../koneksi.php';

  if (isset($_POST['submit'])) {
    $userName = strtolower(stripslashes($_POST['userName']));
    $password = md5($_POST['password']);
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $noHp = $_POST['noHp'];
    $usersama = mysqli_query($koneksi, "SELECT username FROM drivers where username = '$userName'");

    if(mysqli_fetch_assoc($usersama)){
      echo "<script>swal.fire('Gagal', 'Username Sudah Digunakan', 'error'), location.href='register.php'</script>";
      return false;
    }
    $sql = "INSERT INTO drivers VALUES ('$userName', '$password', '$firstName','$lastName','$email','$noHp')";
    $hasil = mysqli_query($koneksi, $sql);

    if(!$hasil){
      echo "<script>swal.fire('Gagal', 'Gagal Membuat Akun', 'error')</script>";
    }else{
      echo "<script>swal.fire('Yuhuuu', 'Berhasil Membuat Akun', 'success')</script>";
    }
  }

?>
  <form method="POST">
    <h1 class="h3 mb-3 fw-normal"><b>Buat Akun</b></h1>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="userName">
      <label for="floatingInput">User Name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="firstname">
      <label for="floatingInput">Nama Depan</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="lastname">
      <label for="floatingInput">Nama Belakang</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" id="floatingPassword" placeholder="Nomor Telephone" name="noHp">
      <label for="floatingPassword">Nomor Telephone</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" id="tombol" name="submit" type="submit">Masuk</button>
    <p class="buatAkun">Sudah Punya Akun? <a href="login.php">Masuk</a></p>
  </form>
</main>
</body>
</html>