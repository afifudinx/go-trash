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

    <!-- form -->
    <div class="container">
        <div class=" text-center mt-5 ">
            <h1 >Form Input Harga Sampah</h1>
        </div>

    
        <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class = "container">
                        <form id="contact-form" role="form" method="POST" action="aksiInputInformasi.php">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_jenis">Jenis Sampah</label>
                                            <input id="form_jenis" type="text" name="jenis" class="form-control" placeholder="Masukkan Jenis Sampah" required="required" data-error="Firstname is required.">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_harga">Harga</label>
                                            <input id="form_harga" type="text" name="harga" class="form-control" placeholder="Masukkan Harga" required="required" data-error="Lastname is required.">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Submit">
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
</div>
</body>
</html>