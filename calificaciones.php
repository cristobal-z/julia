<?php

  session_start();
  if (empty($_SESSION['id'])) {

   echo "<a href='index.php'><h1>Pagina no encontrada, volver al inicio</h1></a>";


} else { ?>


          <?php $titulo ="Calificaciones" ?>
          <?php include 'header.php'; ?>
          <?php
          include 'includes/conexion.php';


          $query ="SELECT m1.idmaterias_1 id, p.mat matricula, e.cct cct, e.nom_cct escuela,p.nom_ nombre,p.gru grupo
          ,((m1.espanol1 + m1.matematicas1 + m1.biologia1+m1.quimica1+m1.ingles1) /5) promedio FROM
          diana.materias_1 m1, diana.primero p, diana.escuelas e
          where m1.mat_alu = p.mat and p.cct = e.cct";
          $resultado = $conexion->query($query);
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
                <h6 class="m-0 font-weight-bold text-primary">Calificaciones primer grado</h6>

              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover" id="tabla1" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>FOLIO</th>
                        <th>MATRICULA</th>
                        <th>ESCUELA</th>
                        <th>NOMBRE</th>
                        <th>GRUPO </th>
                        <th>PROMEDIO </th>
                        <th>MAS </th>

                      </tr>
                    </thead>

                    <tbody>


                      <?php while ($row = $resultado-> fetch_array(MYSQLI_ASSOC)) {?>
                        <?php $id = $row['id'];
                        $ma = $row['matricula'];
                        $c =$row['cct'];    ?>

                    <tr>
                          <td> <?php echo $row['id']; ?></td>
                          <td> <?php echo utf8_decode($row['matricula']); ?></td>
                          <td> <?php echo utf8_decode($row['escuela']); ?></td>
                          <td> <?php echo utf8_decode($row['nombre']); ?></td>
                          <td> <?php echo $row['grupo']; ?></td>
                          <td> <?php echo $row['promedio']; ?></td>
                          <td>

                            <div class="dropdown dropleft">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-fw fa-cog"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                <a class="dropdown-item border-left-primary"  id="especialidad"  href="pdf/boleta.php?mat=<?php echo $ma; ?>&ctt=<?php echo $c; ?>&grado=1">Imprimir boleta</a>


                              </div>
                            </div>




                          </td>


                    </tr>
                      <?php   } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>


            <div class="card shadow mb-4"> <!-- alummnos segundo grado -->
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Calificaciones segundo grado</h6>

              </div>

              <?php
              $query1 ="SELECT m2.idmaterias_2 id, s.mat matricula, e.cct cct, e.nom_cct escuela,s.nom_ nombre,s.gru grupo
              ,((m2.espanol2 + m2.matematicas2 + m2.biologia2+m2.quimica2+m2.ingles2) /5) promedio FROM
              diana.materias_2 m2, diana.segundo s, diana.escuelas e
              where m2.mat_alu = s.mat and s.cct = e.cct ";
              $resultado1 = $conexion->query($query1);

               ?>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover" id="tabla2" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>FOLIO</th>
                        <th>MATRICULA</th>
                        <th>ESCUELA</th>
                        <th>NOMBRE</th>
                        <th>GRUPO </th>
                        <th>PROMEDIO </th>
                        <th>MAS </th>

                      </tr>
                    </thead>

                    <tbody>


                      <?php while ($row = $resultado1-> fetch_array(MYSQLI_ASSOC)) {?>
                        <?php $id = $row['id'];
                        $ma = $row['matricula'];
                        $c =$row['cct'];    ?>

                    <tr>
                          <td> <?php echo $row['id']; ?></td>
                          <td> <?php echo utf8_decode($row['matricula']); ?></td>
                          <td> <?php echo utf8_decode($row['escuela']); ?></td>
                          <td> <?php echo utf8_decode($row['nombre']); ?></td>
                          <td> <?php echo $row['grupo']; ?></td>
                          <td> <?php echo $row['promedio']; ?></td>
                          <td>

                            <div class="dropdown dropleft">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-fw fa-cog"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                <a class="dropdown-item border-left-primary"  id="especialidad"  href="pdf/boleta.php?mat=<?php echo $ma; ?>&ctt=<?php echo $c; ?>&grado=2">Imprimir boleta</a>


                              </div>
                            </div>



                          </td>


                    </tr>
                      <?php   } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="card shadow mb-4"> <!-- alummnos tercer grado -->
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alumnos tercer grado</h6>

              </div>

              <?php
              $query2 =" SELECT m3.idmaterias_3 id, t.mat matricula, e.cct cct, e.nom_cct escuela,t.nom_ nombre,t.gru grupo
              ,((m3.espanol3 + m3.matematicas3 + m3.biologia3+m3.quimica3+m3.ingles3) /5) promedio FROM
              diana.materias_3 m3, diana.tercero t, diana.escuelas e
              where m3.mat_alu = t.mat and t.cct = e.cct";
              $resultado2 = $conexion->query($query2);

               ?>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover" id="tabla3" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>FOLIO</th>
                        <th>MATRICULA</th>
                        <th>ESCUELA</th>
                        <th>NOMBRE</th>
                        <th>GRUPO </th>
                        <th>PROMEDIO </th>
                        <th>MAS </th>

                      </tr>
                    </thead>

                    <tbody>


                      <?php while ($row = $resultado2-> fetch_array(MYSQLI_ASSOC)) {?>
                          <?php $id = $row['id'];
                          $ma = $row['matricula'];
                          $c =$row['cct'];    ?>

                    <tr>
                          <td> <?php echo $row['id']; ?></td>
                          <td> <?php echo utf8_decode($row['matricula']); ?></td>
                          <td> <?php echo utf8_decode($row['escuela']); ?></td>
                          <td> <?php echo utf8_decode($row['nombre']); ?></td>
                          <td> <?php echo $row['grupo']; ?></td>
                          <td> <?php echo $row['promedio']; ?></td>
                          <td>

                            <div class="dropdown dropleft">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-fw fa-cog"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                <a class="dropdown-item border-left-primary"  id="especialidad"  href="pdf/boleta.php?mat=<?php echo $ma; ?>&ctt=<?php echo $c; ?>&grado=3">Imprimir boleta</a>


                              </div>
                            </div>



                          </td>


                    </tr>
                      <?php   } ?>
                    </tbody>
                  </table>
                </div>
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
  <?php } ?>
