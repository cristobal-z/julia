
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

  <title> <?php echo $titulo; ?></title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="data/datatables.min.css"/>

</head>

<body>
    <?php include 'modals.php'; ?>
    <?php $d= $_SESSION['usu']; ?>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-primary bg-white shadow fixed-top" style="background-color: ;">
    <div class="container">




        <img src="img/logo-header.png" width ="300" height ="50" alt="hola">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars ">Más</span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if($titulo =="Estadisticas"){echo "active";} ?>">
            <a class="nav-link" href="estadisticas.php">ESTADISTICAS
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item <?php if($titulo == "Alumnos") {echo "active";} ?> ">
            <a class="nav-link" href="alumnos.php">ALUMNOS</a>
          </li>
          <li class="nav-item <?php if($titulo == "Alumnos") {echo "active";} ?> ">
            <a class="nav-link" href="inicio.php">ESCUELAS</a>
          </li>
          <li class="nav-item <?php if($titulo == "Alumnos") {echo "active";} ?> ">
            <a class="nav-link"  href="directores.php">DIRECTOR</a>
          </li>
          <li class="nav-item <?php if($titulo == "Alumnos") {echo "active";} ?> ">
            <a class="nav-link"  href="maestros.php">MAESTROS</a>
          </li>
          <li class="nav-item <?php if($titulo == "Alumnos") {echo "active";} ?> ">
            <a class="nav-link"  href="calificaciones.php">CALIFICACIONES</a>
          </li>
          <div class="topbar-divider d-none d-sm-block"></div>

          <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION['usu']; ?>

              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">




                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  salir
                </a>
              </div>
            </li>

        </ul>
      </div>

    </div>

  </nav>
