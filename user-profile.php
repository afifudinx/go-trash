<!-- Disini akan ditampilkan profil dengan bentuk form yang bisa langsung di update -->

<!-- Available actions:
1. Update profil -->

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
        <span class="fs-4">Profil</span>
      </a>
    </div>
  </header>
</body>

<?php
require('./components/footer.php')
?>