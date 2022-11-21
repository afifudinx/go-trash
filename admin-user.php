<?php
$access = 'admin';
require('./components/header.php');
require('./services/admin/fetch_user_service.php');
?>

<body>
  <?php
  require('./components/navigation.php');
  ?>
  <header class="py-3 mb-4 border-bottom">
    <div class="container">
      <a class="px-2 text-dark text-decoration-none">
        <span class="fs-4">Data User</span>
      </a>
    </div>
  </header>
  <div class="container px-4">
    <?php
    foreach ($users as $user) {
      $username = $user['username'];
      $email = $user['email'];
      $address = $user['address'];
      echo "
      <div class='card mb-2'>
        <div class='card-header'>
          $username
        </div>
        <div class='card-body'>
          <h5 class='card-title'>$email</h5>
          <p class='card-text'>$address</p>
          <a href='./admin-user-edit.php?username=$username' class='btn btn-primary'>Edit</a>
        </div>
      </div>
      ";
    }
    ?>
  </div>
</body>
<?php
require('./components/footer.php');
?>