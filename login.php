<?php
$access = 'unlogged';
require('./components/header.php')
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- boostrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- mycss -->
  <link rel="stylesheet" href="assets/css/signin.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Sweet alert -->
  <script src="sweetalert2.min.js"></script>
  <link rel="stylesheet" href="sweetalert2.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>Login</title>

</head>

<body class="text-center">
  <main class="form-signin w-100 m-auto">
    <form method="POST" action="./services/login_service.php">
      <h1 class="h3 mb-3 fw-normal"><b>GoTrash</b></h1>
      <h1 class="h3 mb-3 fw-normal"><b>Please Sign In</b></h1>
      <div class="form-floating">
        <input type="text" class="form-control" name="username" id="username" placeholder="your username">
        <label for="username">Username</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        <label for="password">Password</label>
      </div>
      <div class="form-floating">
        <select class="form-select mb-3 py-3" id="role" name="role">
          <option selected>Login sebagai</option>
          <option value="user">User</option>
          <option value="driver">Driver</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      <button class="w-100 btn btn-lg btn-primary" id="tombol" name="submit">Masuk</button>
      <p class="buatAkun">Belum punya akun? <a href="./index.php">Buat Akun</a></p>
    </form>
  </main>
</body>
<?php
require('./components/footer.php')
?>