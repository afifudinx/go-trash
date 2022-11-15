<?php
$access = 'admin';
require('./components/header.php');
require('./services/admin/fetch_user_by_username_service.php');
?>

<style>
  .form-signin {
    max-width: 330px;
    padding: 15px;
  }

  .form-signin .form-floating:focus-within {
    z-index: 2;
  }

  .form-signin #username {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }

  .form-signin input:not(#username):not(#nohp) {
    border-radius: 0;
    margin-bottom: -1px;
  }

  .form-signin #nohp {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
</style>

<body>
  <?php
  require('./components/navigation.php');
  ?>
  <header class="py-3 mb-4 border-bottom">
    <div class="container">
      <a class="px-2 text-dark text-decoration-none">
        <span class="fs-4">Detail Data User</span>
      </a>
    </div>
  </header>
  <main class="form-signin w-100 m-auto d-flex justify-items-center align-items-center">
    <form method="POST" action="./services/admin/update_user_service.php?username=<?php echo "$user_username" ?>">
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
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="nohp" id="nohp" placeholder="08XX" value="<?php echo "$nohp" ?>">
        <label for="nohp">No HP</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary mb-2" type="submit">Update</button>
      <a href="./services/admin/delete_user_service.php?username=<?php echo "$user_username" ?>" class='btn btn-secondary btn-lg w-100'>Delete</a>

    </form>
  </main>
</body>

<?php
require('./components/footer.php');
?>