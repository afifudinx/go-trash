<?php
$access = 'users';
require('./services/user/fetch_transaction_history_service.php');
require('./components/header.php');
?>

<body>
  <?php
  require('./components/navigation.php');
  ?>
  <header style="background-color : #F4E3D6" class="py-3 mb-4 border-bottom">
    <div class="container">
      <a class="px-2 text-dark text-decoration-none">
        <span><b>Riwayat Pemesanan</b></span>
      </a>
    </div>
  </header>
  <div class="container px-3">

    <?php
    foreach ($transactions as $transaction) {
      $id = $transaction['id'];
      $name = $transaction['name'];
      $driver_username = $transaction['driver_username'];
      $nohp = $transaction['nohp'];
      $type = $transaction['nama'];
      $address = $transaction['address'];
      $trx_date = $transaction['trx_date'];
      $est = $transaction['est'];
      $description = $transaction['description'];
      $status = $transaction['status'];
      echo "
      <div class='card mb-3'>
        <div class='card-header'>
        $driver_username
        </div>
        <div class='card-body'>
          <h5 class='card-title'>$name | $nohp | $type</h5>
          <p class='card-text'>$address</p>
          <p class='card-text'>Estimasi $est kg</p>
          <blockquote class='blockquote mb-3 mt-3'>
            <footer class='blockquote-footer'>$description</footer>
          </blockquote>
          <span class='btn btn-primary'>Status: $status</a>
        </div>
        <div class='card-footer text-muted'>
          $trx_date
        </div>
      </div>
      ";
    }
    ?>
  </div>
</body>

<?php
require('./components/footer.php')
?>