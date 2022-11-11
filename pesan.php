<!-- Disini akan ada bagian pemesanan nah nanti hanya bisa sekali pesan
jadi setelahnya jika masih proses pesan maka akan ada tulisan seperti
"Pesananmu sedang di proses"
kek kurir" gitu -->

<!-- Available actions:
1. Pesan
2. Batalkan pesanan -->

<?php
$access = 'users';
require('./components/header.php');
?>

<body>
  <?php
  require('./components/navigation.php');
  ?>
  <header class="py-3 mb-4 border-bottom">
    <div class="container">
      <a class="px-2 text-dark text-decoration-none">
        <span class="fs-4">Pesan</span>
      </a>
    </div>
  </header>
</body>

<?php
require('./components/footer.php')
?>