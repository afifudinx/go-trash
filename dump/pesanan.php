<?php
$access = 'drivers';
require('./services/driver/fetch_pesanan_service.php');
require('./components/header.php');
?>

<body>
  <?php
  require('./components/navigation.php');
  ?>
  <header class="py-3 mb-4 border-bottom">
    <div class="container">
      <a class="px-2 text-dark text-decoration-none">
        <span class="fs-4">Pesanan</span>
      </a>

    </div>
  </header>
  <div class="container px-3">
    <?php
    foreach ($transactions as $transaction) {
      $id = $transaction['id'];
      $name = $transaction['name'];
      $user_username = $transaction['user_username'];
      $nohp = $transaction['nohp'];
      $type = $transaction['type'];
      $address = $transaction['address'];
      $trx_date = $transaction['trx_date'];
      $description = $transaction['description'];
      echo "
          <div class='card mb-3'>
            <div class='card-header'>
              $user_username
            </div>
            <div class='card-body'>
              <h5 class='card-title'>$name | $nohp | $type</h5>
              <p class='card-text'>$address</p>
              <blockquote class='blockquote mb-3 mt-3'>
                <footer class='blockquote-footer'>$description</footer>
              </blockquote>
              <form>
                <a href='./services/driver/accept_pesanan_service.php?id=$id' class='btn btn-primary'>Terima pesanan</a>
              </form>
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