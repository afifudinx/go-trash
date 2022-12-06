<?php
$access = 'all';
require('./components/header.php');
require('./services/get_informasi.php');
?>

<body>
  <?php
  require('./components/navigation.php');
  ?>
  <header class="py-3 mb-4 border-bottom">
    <div class="container">
      <a class="px-2 text-dark text-decoration-none">
        <span class="fs-4">GoTrash</span>
      </a>
    </div>
  </header>
  <div class="container">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Harga</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($informasis as $informasi) {
          $id = $informasi['id'];
          $nama = $informasi['nama'];
          $harga = $informasi['harga'];
          echo "
        <tr>
        <td>$nama</td>
        <td>$harga</td>
        </tr>
        ";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
<?php
require('./components/footer.php')
?>