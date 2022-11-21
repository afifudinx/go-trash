<?php
$access = 'admin';
require('./components/header.php');
require('./services/admin/fetch_driver_service.php');
?>

<body>
  <?php
  require('./components/navigation.php');
  ?>
  <header class="py-3 mb-4 border-bottom">
    <div class="container">
      <a class="px-2 text-dark text-decoration-none">
        <span class="fs-4">Data Driver</span>
      </a>
    </div>
  </header>
  <div class="container px-4">
    <?php
    foreach ($drivers as $driver) {
      $username = $driver['username'];
      $email = $driver['email'];
      $nohp = $driver['nohp'];
      echo "
      <div class='card mb-2'>
        <div class='card-header'>
          $username
        </div>
        <div class='card-body'>
          <h5 class='card-title'>$email</h5>
          <p class='card-text'>$nohp</p>
          <a href='./admin-driver-edit.php?username=$username' class='btn btn-primary'>Edit</a>
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