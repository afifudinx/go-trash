<?php
$access = 'drivers';
require('./components/header.php');
require('./services/driver/profile_service.php');
?>

<body>
  <?php
  require('./components/navigation.php');
  ?>
  <header class="py-3 mb-4 border-bottom">
    <div class="container">
      <a class="px-2 text-dark text-decoration-none">
        <span class="fs-4">Profil</span>
      </a>
    </div>
  </header>
  <main class="container">

    <form method="POST" action="./services/driver/update_profile_service.php">
      <div class="form-floating">
        <input type="password" class="form-control" name="password" id="password" placeholder="your password">
        <label for="password">Password</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="your firtname" value="<?php echo "$firstname" ?>">
        <label for="firstname">First Name</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="your lastname" value="<?php echo "$lastname" ?>">
        <label for="lastname">Last Name</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" name="email" id="email" placeholder="yourmail@domain.com" value="<?php echo "$email" ?>">
        <label for="email">Email</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" name="nohp" id="nohp" placeholder="08XX" value="<?php echo "$nohp" ?>">
        <label for="nohp">No HP</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Update Profile</button>

    </form>
  </main>
</body>

<?php
require('./components/footer.php')
?>