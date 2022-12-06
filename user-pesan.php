<?php
$access = 'users';
require('./components/header.php');
require('./services/get_informasi.php');
?>

<body>
  <?php
  require('./components/navigation.php');
  ?>
  <header style="background-color : #F4E3D6" class="py-3 mb-4 border-bottom">
    <div class="container">
      <a class="px-2 text-dark text-decoration-none">
        <span><b>Masukkan Pesanan Anda</b></span>
      </a>
    </div>
  </header>
  <div class="container px-5">
    <form action="./services/user/pesan_service.php" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
        <div id="nameHelp" class="form-text">Nama dari pemesan</div>
      </div>
      <div class="mb-3">
        <label for="nohp" class="form-label">No HP</label>
        <input type="text" class="form-control" id="nohp" name="nohp" aria-describedby="nohpHelp">
        <div id="nohpHelp" class="form-text">No HP Penerima yang bisa dihubungi</div>
      </div>
      <label for="type" class="form-label">Tipe barang</label>
      <div class="form-floating mb-3">
        <select class="form-select" id="type" name="type" aria-label="type" aria-describedby="typeHelp">
          <?php foreach ($informasis as $informasi) {
            $nama = $informasi['nama'];
            $id = $informasi['id'];
            echo "<option value='$id' selected>$nama</option>";
          } ?>
        </select>
        <label for="type">Tipe barang</label>
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Detail Alamat</label>
        <input type="text" class="form-control" id="address" name="address" aria-describedby="addressHelp">
        <div id="addressHelp" class="form-text">Detail alamat dari pemesan</div>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea class="form-control" name="description" id="description" name="description" cols="30" rows="3" aria-describedby="descriptionHelp"></textarea>
        <div id="descriptionHelp" class="form-text">Catatan singkat untuk driver</div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

<?php
require('./components/footer.php')
?>