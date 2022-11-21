<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include 'koneksi.php';
$id_user = $_SESSION['id_user'];
$query="SELECT * FROM tranksaksi WHERE id_user = '$id_user' ";
$hasil=mysqli_query($koneksi,$query);

?>
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
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Start Top Nav -->
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
    <!-- Close Top Nav -->
    <section>
        <br>
		<div class="container">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						    <th>Nama</th>
						      <th>Jenis</th>
						      <th>Berat</th>
						      <th>Tanggal Pesan</th>
						    </tr>
						  </thead>
						  <tbody>
                            <?php
                            while ($baris=mysqli_fetch_assoc($hasil)) {
                            ?>
						    <tr class="alert" role="alert">
						      <td>
						      	<div class="email">
						      		<span><?php echo $baris['name']?></span>
						      		<span><?php echo $baris['alamat']?></span>
						      	</div>
						      </td>
						      <td><?php echo $baris['jenis']?></td>
						      <td><?php echo $baris['estimasi']?>
				          </td>
				          <td><?php echo $baris['tanggal']?></td>
						    </tr>
                            <?php } ?>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <!-- End Script -->
</body>
</html>