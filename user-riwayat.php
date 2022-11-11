<!-- Disini akan ditampilkan riwayat pemesanan yang sudah dilakukan oleh user
tidak termasuk pesanan yang sedang diproses -->

<!-- Tidak ada aksi sama sekali karena bentuknya langsung semua di read
tanpa harus ada halaman lain untuk detail pesanan -->

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
        <span class="fs-4">Riwayat Pemesanan</span>
      </a>
    </div>
  </header>
</body>

<?php
require('./components/footer.php')
?>