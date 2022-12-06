<?php
$access = 'admin';
require('./services/get_informasi.php');
require('./components/header.php');
?>

<body>
  <?php
  require('./components/navigation.php');
  ?>
  <header class="py-3 mb-4 border-bottom">
    <div class="container">
      <a class="px-2 text-dark text-decoration-none">
        <span class="fs-4">Informasi Harga</span>
      </a>
    </div>
  </header>
  <div class="container px-3">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Harga</th>
          <th scope="col">Aksi</th>
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
          <th>$nama</th>
          <th>$harga</th>
          <th><a class='btn btn-info' href='./admin-informasi-detail.php?nama=$nama'>Lihat detail</a></th>
        </th>
      </tr>
      ";
        }
        ?>
      </tbody>
    </table>
    <a class="btn btn-success" href='./admin-informasi-add.php'>Tambah Informasi</a>
  </div>
</body>

<?php
require('./components/footer.php')
?>