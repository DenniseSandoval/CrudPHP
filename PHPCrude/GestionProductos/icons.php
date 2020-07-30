<?php
session_start();
if (!isset($_SESSION['userUser'])) {
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
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Header -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Search form -->
                    <div class="col-lg-6 col-7"><br>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="../index.html"><i class="fas fa-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">Inicio</li>
                            </ol>
                        </nav>
                    </div>
                    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                        <div class="px-9"></div>
                    </form>
                    <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="" src="assets/img/theme/team-4.jpg" />
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span
                                            class="mb-0 text-sm font-weight-bold"><?php echo $_SESSION['userUser']['NAME'] ?></span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="#!" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>My profile</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="/CrudPHP/PHPCrude/GestionProductos/php/logout.php" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
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
                <h2>Gestión de USUARIO</h2>
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