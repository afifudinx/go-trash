<?php
$access = 'admin';
require('./components/header.php');
require('./services/get_informasi_by_id.php');
?>

<style>
  .form-signin {
    max-width: 330px;
    padding: 15px;
  }

  .form-signin .form-floating:focus-within {
    z-index: 2;
  }

  .form-signin #nama {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }

  .form-signin input:not(#nama):not(#harga) {
    border-radius: 0;
    margin-bottom: -1px;
  }

  .form-signin #harga {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
</style>

<body>
  <?php
  require('./components/navigation.php');
  ?>
  <header class="py-3 mb-4 border-bottom">
    <div class="container">
      <a class="px-2 text-dark text-decoration-none">
        <span class="fs-4">Detail Informasi</span>
      </a>
    </div>
  </header>
  <main class="form-signin w-100 m-auto d-flex justify-items-center align-items-center">
    <form method="POST" action="./services/admin/update_informasi_service.php?nama=<?php echo "$nama" ?>">
      <div class="form-floating">
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo "$nama" ?>">
        <label for="nama">Nama</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?php echo "$harga" ?>">
        <label for="harga">Harga</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary mb-2" type="submit">Update</button>
      <a href="./services/admin/delete_informasi_service.php?nama=<?php echo "$nama" ?>" class='btn btn-secondary btn-lg w-100'>Delete</a>
    </form>
  </main>
</body>

<?php
require('./components/footer.php');
?>