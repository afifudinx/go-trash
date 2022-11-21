<?php
$access = 'drivers';
require('./services/driver/fetch_transaction_history_by_id_service.php');
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
  <div class="container px-3">
    <form action="./services/driver/input_detail_pesanan_service.php?id=<?php echo $_GET['id'] ?>" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $transaction['name'] ?>" aria-describedby="nameHelp" disabled>
        <div id="nameHelp" class="form-text">Nama dari pemesan</div>
      </div>
      <div class="mb-3">
        <label for="nohp" class="form-label">No HP</label>
        <input type="text" class="form-control" id="nohp" name="nohp" aria-describedby="nohpHelp" value="<?php echo $transaction['nohp'] ?>" disabled>
        <div id="nohpHelp" class="form-text">No HP Penerima yang bisa dihubungi</div>
      </div>
      <label for="type" class="form-label">Tipe barang</label>
      <div class="form-floating mb-3">
        <select class="form-select" id="type" name="type" aria-label="type" aria-describedby="typeHelp" value="<?php echo $transaction['type'] ?>" disabled>
          <option value="plastik" selected>Plastik</option>
          <option value="kertas">Kertas</option>
          <option value="besi">Besi</option>
        </select>
        <label for="type">Tipe barang</label>
      </div>
      <div class="mb-3">
        <label for="est" class="form-label">Estimasi Berat (kg)</label>
        <input type="text" class="form-control" id="est" name="est" aria-describedby="nohpHelp" value="<?php echo $transaction['est'] ?>" <?php echo $transaction['status'] == 'done' ? "disabled" : '' ?>>
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Detail Alamat</label>
        <input type="text" class="form-control" id="address" name="address" aria-describedby="addressHelp" value="<?php echo $transaction['address'] ?>" disabled>
        <div id="addressHelp" class="form-text">Detail alamat dari pemesan</div>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea class="form-control" name="description" id="description" name="description" cols="30" rows="10" aria-describedby="descriptionHelp" disabled><?php echo $transaction['description'] ?></textarea>
        <div id="descriptionHelp" class="form-text">Catatan singkat untuk driver</div>
      </div>
      <?php echo $transaction['status'] == 'done' ? "" : '<button type="submit" class="btn btn-primary">Submit</button>' ?>
    </form>
  </div>
</body>

<?php
require('./components/footer.php')
?>