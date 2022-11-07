<?php
session_start();
include "koneksi.php";
$id_user = $_SESSION['id_user'];
?>
<!DOCTYPE html>
<html>
   <head>
   <title>GoTrash</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/gojek1.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/data.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <style>
    .pp {
        background-color: whitesmoke;
        background-image: url("assets/img/bg.png");
    }
   </style>
<body class="pp">
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
            <div class="container text-light">
                <div class="w-100 d-flex justify-content-between">
                    <div>
                        <i class="fa fa-envelope mx-2"></i>
                        <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">GoTrash@gmail.com</a>
                        <i class="fa fa-phone mx-2"></i>
                        <a class="navbar-sm-brand text-light text-decoration-none" href="tel:0855-4694-56xx">0855-4694-56xx</a>
                    </div>
                </div>
            </div>
        </nav>
    <form method="POST" action="">
        <div class="container">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Form Order Pesanan
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama" id="name" required>
                        </div>
                        <div class="form-group">
                            <label>Nomor Kontak / WhatsApp</label>
                            <input type="text" name="phone" class="form-control" placeholder="Nomor Kontak / WhatsApp" id="phone" required>
                        </div>
                        <div class="form-group">
                            <label>Pilih Jenis Sampah</label>
                            <select name="jenis" class="form-control" id="jenis" required>
                                <option value="">-- Pilih Jenis --</option>
                                <option value="plastik">Plastik</option>
                                <option value="kertas">Kertas</option>
                                <option value="besi">Besi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Estimasi Berat (kg)</label>
                            <input type="text" name="estimasi" class="form-control" placeholder="Estimasi Berat Sampah" id="estimasi" required>
                        </div>
                        <div class="form-group">
                            <label>Detail Alamat</label>
                            <textarea name="alamat" class="form-control" rows="2" placeholder="Isikan Detail Alamat (Seperti : Nomor rumah, Blok, RT , RW)" id="alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Catatan</label>
                            <textarea name="description" class="form-control" rows="2" id="description"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success send" name="kirim" type="submit">Pesan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>
</html>
<?php
    include "koneksi.php";

    if (isset($_POST['kirim'])) {
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $jenis = $_POST["jenis"];
        $estimasi = $_POST["estimasi"];
        $alamat = $_POST['alamat'];
        $description = $_POST['description'];
        
        $insert = "INSERT INTO tranksaksi VALUES 
        (null,
        '$name',
        '$phone',
        '$jenis',
        '$estimasi',
        '$alamat',
        '$description', 
        Now(), 
        $id_user)";
        $hasil = mysqli_query($koneksi,$insert);

        if($hasil){
            echo "<SCRIPT> alert('Pemesanan Sukses');window.location='historyUser.php'</SCRIPT>";}
            else {
                echo 'gagal';
            }
        }
    
?>