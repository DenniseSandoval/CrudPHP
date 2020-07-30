<?php
session_start();
if (!isset($_SESSION['user'])) {
  header('Location: login.html');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Productos</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/product.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
    <!-- Sidenav -->
    <?php include("./views/partials/menu.php");?>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Header -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Search form -->
                    <div class="col-lg-6 col-8"><br>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="../index.html"><i class="fas fa-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">Inicio</li>
                            </ol>
                        </nav>
                    </div>
                    <?php include("./views/partials/header.php");?>
                </div>
            </div>
        </nav>
    </div>
    <div class="py-4"></div>
    <div class="col row justify-content-center" style="text-align: center;">
        <!-- Light table -->
        <div class="table-responsive" wfd-id="98">
            <div class="card" style="width: 100%; text-align: center;">
                <h1>Bienvenido</h1>
                <h2>Gestión de Productos</h2>
                <img src="./assets/img/inicio3.png" style="width: auto; margin: auto auto;" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h2 class="card-title"></h2>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <?php include("./views/partials/footer.php");?>
</body>

</html>