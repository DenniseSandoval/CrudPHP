<?php
    $enlace = mysqli_connect("127.0.0.1", "root", "root", "tienda");
    
    if (!$enlace) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        echo "<p/>";
        exit;
    }
    if(isset($_POST["registrar"])){
        $stmt = $enlace->prepare("INSERT INTO producto (descripcion, categoria, fecha_expiracion, precio) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssd", $descripcion, $categoria, $fechaExpiracion, $precio);
        $descripcion=$_POST["descripcion"];
        $categoria=$_POST["categoria"];
        $fechaExpiracion=$_POST["fechaExpiracion"];
        $precio=$_POST["precio"];
        $stmt->execute();
        $stmt->close();
    }else if(isset($_POST["modificar"])){
        $stmt = $enlace->prepare("UPDATE producto set descripcion=?, categoria=?, fecha_expiracion=?, precio=? WHERE codigo= ?");
        $stmt->bind_param("sssdi", $descripcion, $categoria, $fechaExpiracion, $precio, $codigo);
        $codigo=$_POST["codigo"];
        $descripcion=$_POST["descripcion"];
        $categoria=$_POST["categoria"];
        $fechaExpiracion=$_POST["fechaExpiracion"];
        $precio=$_POST["precio"];
        $stmt->execute();
        $stmt->close();

    }else if(isset($_GET["delete"])){
      $stmt=$enlace->prepare("DELETE FROM producto WHERE codigo=".$_GET["delete"]);
      $stmt->execute();
      $stmt->close();
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
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="../index.html">
          <img src="../assets/img/inicio.png">
          <strong><h2>Productos</h2></strong>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="./register.html">
                <i class="fa fa-plus-circle text-primary"></i>
                <span class="nav-link-text">Agregar registros</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./listaProducts.php">
                <i class="ni ni-bullet-list-67 text-primary"></i>
                <span class="nav-link-text">Lista Productos</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <div class="main-content" id="panel">
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-2">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center">
            <div class="col-lg-6 col-7"><br>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="../index.html"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item">Lista Registros</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div><br>
    <div class="col" >
      <div class="card" >
        <div class="card-header border-0" style="text-align: center;">
          <h3 class="mb-0">PRODUCTOS</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" >Código</th>
                <th scope="col">Descripción</th>
                <th scope="col" >Categoría</th>
                <th scope="col">Fecha Expiración</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <?php
                $result=$enlace->query("SELECT * FROM producto");
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
								<a href="modificar.php?update='<?php echo $row["codigo"]?>'" title="Editar datos" class="btn btn-primary btn-sm"><span class="far fa-edit fa-lg" aria-hidden="true"></span></a>
								<a href="listaProducts.php?delete='<?php echo $row["codigo"]?>'" title="Eliminar" class="btn btn-danger btn-sm"><span class="far fa-trash-alt fa-lg" aria-hidden="true"></span></a>
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
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
