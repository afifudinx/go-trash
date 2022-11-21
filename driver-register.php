<?php
$access = 'unlogged';
require('./components/header.php');
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- boostrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- mycss -->
  <link rel="stylesheet" href="./assets/css/signinDriver.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Sweet alert -->
  <script src="sweetalert2.min.js"></script>
  <link rel="stylesheet" href="sweetalert2.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>Driver Register</title>
</head>

<body class="text-center">
  <main class="form-signin w-100 m-auto">
    <form method="POST" action="./services/driver/driver_registration_service.php">
      <h1 class="h3 mb-3 fw-normal"><b>Go-Trash</b></h1>
      <h1 class="h3 mb-3 fw-normal"><b>Driver Registration</b></h1>
      <div class="form-floating">
        <input type="text" class="form-control" name="username" id="username" placeholder="your username">
        <label for="username">Username</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="password" id="password" placeholder="your password">
        <label for="password">Password</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="your firtname">
        <label for="firstname">First Name</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="your lastname">
        <label for="lastname">Last Name</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" name="email" id="email" placeholder="yourmail@domain.com">
        <label for="email">Email</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="nohp" id="nohp" placeholder="08XX">
        <label for="nohp">No HP</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" id="tombol" name="submit" type="submit">Masuk</button>
      <p class="buatAkun">Sudah Punya Akun? <a href="./login.php">Login</a></p>
    </form>
  </main>
</body>
<?php
require('./components/footer.php')
?>