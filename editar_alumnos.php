


          <?php $titulo ="Editar Alumnos" ?>
          <?php include 'header.php'; ?>
          <?php
          include 'includes/conexion.php';

          $mat= $_GET['mat'];
          $grado= $_GET['grado'];
          if ($grado == 1) {
            $query ="SELECT * FROM diana.primero WHERE mat='$mat'";
          }
          if ($grado == 2) {
            $query ="SELECT * FROM diana.segundo WHERE mat='$mat'";
          }
          if ($grado == 3) {
            $query ="SELECT * FROM diana.tercero WHERE mat='$mat'";
          }
          $resultado = $conexion->query($query);
          $row = mysqli_fetch_array($resultado);
          ?>
         <!-- Page Content -->
         <h1></h1>
         <div class="container">
           <br>
           <h1 class="h3 mb-2 text-gray-800"> </h1>
           <div class="row">

      <!-- Blog Entries Column -->
      <!-- DataTales Example -->
          <div class="col-md-9">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DATOS PERSONALES</h6>

              </div>

              <div class="card-body">
                <form class="user" method="post" action="includes/funciones.php" >
                    <input type="text" name="grado" hidden value="<?php echo $grado; ?>">
                    <input type="text" name="mat" hidden value="<?php echo $mat; ?>">
                    <div class="form-group row">
                      <div class="col-lg-4 ">
                        <label>Nombre</label>
                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="nom" value="<?php echo $row['nom_']; ?>">
                      </div>
                      <div class="col-lg-4">
                        <label>Apellidos</label>
                        <input type="text" class="form-control form-control-user" id="exampleLastName" name="ape" value="<?php echo $row['ape']; ?>">
                      </div>
                      <div class="col-lg-4 ">
                        <label>CURP</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputPassword" name="cur" value="<?php echo $row['curp']; ?>">
                      </div>

                    </div>

                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label>Sexo</label>
                        <select class="form-control" name="sex">
                          <option <?php if($row['sex']=='MUJER'){echo "SELECTED";} ?> value="MUJER">NIÑA</option>
                          <option <?php if($row['sex']=='HOMBRE'){echo "SELECTED";} ?> value="HOMBRE">NIÑO</option>

                        </select>
                      </div>
                      <div class="col-sm-6">
                        <label>Grupo</label>
                        <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" name="gru" value="<?php echo $row['gru']; ?>">
                      </div>

                    </div>
                    <div class="form-group row">


                      <div class="col-sm-12">
                        <label for=""></label>
                        <input type="submit" class="btn btn-primary btn-user btn-block" name="editar_alumnos" value="Editar">
                      </div>

                    </div>


                    <hr>


                  </form>
              </div>
            </div>






          </div>

          <!-- Sidebar Widgets Column -->
          <div class="col-md-3">

            <?php include 'categorias.php'; ?>

          </div>



    </div>
    <!-- /.row -->


  </div>
  <!-- /.container -->
    <?php include 'footer.php'; ?>
