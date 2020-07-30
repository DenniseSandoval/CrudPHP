<?php
    session_start();
    if (!isset($_SESSION['user'])) {
    header('Location: ../login.html');
    }?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Productos</title>
    <!-- Favicon -->
    <link rel="icon" href="../assets/img/product.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
    <!-- Sidenav -->
    <?php include("../views/partials/menu.php");?>
    <!-- Main content -->
    <div class="main-content" id="panel">
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
                                    <li class="breadcrumb-item">Registro</li>
                                </ol>
                            </nav>
                        </div>
                        <?php include("../views/partials/header.php");?>
                    </div>
                </div>
            </nav>
        </div>
        <div class="py-4"></div>
        <div style="display: flex;align-items: center;justify-content: center;">
            <div class="abs-center">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <form name="registro" action="./listaProducts.php" method="POST">
                        <div class="border p-4 form">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label id="lblDescripcion" for="descripcion">Descripción</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" style="color: #5D5C5C;" name="descripcion" required
                                        class="form-control" placeholder="Leche" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label id="lblCategoria" for="categoria">Categoría</label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <select style="color: #5D5C5C;" class="custom-select" id="categoria"
                                            name="categoria">
                                            <option value="Carnes">Carnes</option>
                                            <option value="Legumbres">Legumbres</option>
                                            <option value="Lacteos">Lácteos</option>
                                            <option value="Bebidas">Bebidas</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label id="lblFecha" for="fechaExpiracion">Fecha Expiración</label><br>
                                </div>
                                <div class="col-sm-8">
                                    <input type="date" style="color: #5D5C5C;" class="form-control" id="fechaExpiracion"
                                        name="fechaExpiracion" value="" max="2022-12-31">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label id="lblPrecio" for="precio">Precio</label><br>
                                </div>
                                <div class="col-sm-8">
                                    <input type="number" style="color: #5D5C5C;" step="any" class="form-control"
                                        id="precio" name="precio" value="">
                                </div>
                            </div>
                            <div class="form-group row" style="justify-content: center;">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="btn btn-primary btn-user btn-block" type="submit" name="registrar"
                                        value="Registrar">
                                </div>
                                <div class="col-sm-6">
                                    <a href="../index.html" class="btn btn-primary btn-user btn-block ">
                                        Cancelar
                                    </a>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <?php include("../views/partials/footer.php");?>
</body>

</html>