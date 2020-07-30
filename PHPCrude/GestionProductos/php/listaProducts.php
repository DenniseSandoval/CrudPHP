<?php
    session_start();
    if (!isset($_SESSION['user'])) {
    header('Location: ../login.html');
    }
    include './services/productService.php';
    $productService=new ProductService();
    if(isset($_POST["registrar"])){
       $productService->insert($_POST["descripcion"],$_POST["categoria"],$_POST["fechaExpiracion"],$_POST["precio"]);
        
    }else if(isset($_POST["modificar"])){
        $productService->update($_POST["descripcion"],$_POST["categoria"],$_POST["fechaExpiracion"], $_POST["precio"], $_POST["codigo"]);

    }else if(isset($_GET["delete"])){
      $productService->delete($_GET["delete"]);
  }
  $result=$productService->findAll();
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
                                    <li class="breadcrumb-item">Lista Registros</li>
                                </ol>
                            </nav>
                        </div>
                        <?php include("../views/partials/header.php");?>
                    </div>
                </div>
            </nav>
        </div>
        <div class="py-4"></div>
        <div class="col">
            <div class="card">
                <div class="card-header border-0" style="text-align: center;">
                    <h3 class="mb-0">PRODUCTOS</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Categoría</th>
                                <th scope="col">Fecha Expiración</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <?php
                                if($result->num_rows>0){
                                    while($row = $result->fetch_assoc()) {
                            ?>
                        <tbody class="list">
                            <tr>
                                <td><?php echo $row["codigo"]?></td>
                                <td><?php echo $row["descripcion"]?></td>
                                <td><?php echo $row["categoria"]?></td>
                                <td><?php echo $row["fecha_expiracion"]?></td>
                                <td><?php echo $row["precio"]?></td>
                                <td>
                                    <a href="modificar.php?update='<?php echo $row["codigo"]?>'" title="Editar datos"
                                        class="btn btn-primary btn-sm"><span class="far fa-edit fa-lg"
                                            aria-hidden="true"></span></a>
                                    <a href="listaProducts.php?delete='<?php echo $row["codigo"]?>'" title="Eliminar"
                                        class="btn btn-danger btn-sm"><span class="far fa-trash-alt fa-lg"
                                            aria-hidden="true"></span></a>
                                </td>
                            </tr>
                            <?php }
                                } else{ ?>
                            <tr>
                                <td colspan="4">No hay datos</td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <?php include("../views/partials/footer.php");?>
</body>

</html>