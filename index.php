  <!DOCTYPE html>
  <html lang="es" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Inicia sesion</title>
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="css/blog-home.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="data/datatables.min.css"/>
    </head>
    <body class="bg-white">


      <div class="container">
        <div class="row">
          <div class="col-lg-4">

          </div>
          <div class="col-lg-5">
            <div class="card card-login mx-auto mt-6 shadow">
              <div class="card-header" > <center> <img src="img/logo-header.png" class="img-fluid" alt=""> </center></div>
              <div class="card-body">
                <form method="post" action="includes/funciones.php">
                  <div class="form-group">
                    <div class="form-label-group">
                      <label for="inputEmail">Correo</label>
                      <input type="email" id="inputEmail" name="cor" class="form-control" placeholder="admi@admin.com" required="required" autofocus="autofocus">

                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-label-group">
                      <label for="inputPassword">Contraseña</label>
                      <input type="password" id="inputPassword" name="con" class="form-control" placeholder="" required="required">

                    </div>
                  </div>


                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" name="login" value="Entrar">

                  </div>

                </form>
                <div class="text-center">
                  <a class="d-block small mt-3" href="register.html"></a>

                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-4">

          </div>


        </div>




      </div>




      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <script type="text/javascript" src="data/datatables.min.js"></script>



    </body>
  </html>
