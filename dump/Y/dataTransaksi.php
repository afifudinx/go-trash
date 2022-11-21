<!DOCTYPE html>
<html lang="en">

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
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
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


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                GoTrash
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="indexAdmin.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dataUser.php">Data User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dataDriver.php">Data Driver</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dataTransaksi.php">Data Transaksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">LogOut</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Data Transaksi</h1>
                </div>
            </div>
            <div class="container-lg">
                <div class="table-responsive">
                    <div class="table-besar">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-8"><h2>Go<b>Trash</b></h2></div>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>No.Tlp/WA</th>
                                    <th>Jenis Sampah</th>
                                    <th>Berat</th>
                                    <th>Alamat</th>
                                    <th>Catatan</th>
                                </tr>
                            </thead>
                            <!--
                            <tbody>
                                <?php
                                    include "koneksi.php";
                                    $sql = "SELECT * from informasis";
                                    $hasil = mysqli_query($koneksi,$sql);
                                    while($row =mysqli_fetch_array($hasil))
			                        {
                                ?>
                                <tr>
                                    <td><?=$row['nama'];?></td>
                                    <td><?=$row['nohp'];?></td>
                                    <td><?=$row['jenis_sampah'];?></td>
                                    <td><?=$row['berat'];?></td>
                                    <td><?=$row['alamat'];?></td>
                                    <td><?=$row['catatan'];?></td>
                                    <?php
                                    }
                                    ?>
                                </tr>
                            </tbody>
                                -->
                        </table>
                    </div>
                </div>
            </div> 
        </div>    
    </section>
    <!-- End Featured Product -->

    <!-- Start Footer -->
    <footer>
        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2022 GoTrash
                            | Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>
</html>