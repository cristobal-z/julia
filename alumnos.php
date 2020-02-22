<?php

  session_start();
  if (empty($_SESSION['id'])) {

   echo "<a href='index.php'><h1>Pagina no encontrada, volver al inicio</h1></a>";


} else { ?>


          <?php $titulo ="Alumnos" ?>
          <?php include 'header.php'; ?>
          <?php
          include 'includes/conexion.php';


          $query ="SELECT e.cct clave, e.nom_cct escuela,e.dir_cct dir, p.mat matricula,p.nom_ nombre,p.ape apellido
          ,p.sex sexo,p.curp, p.gru grupo, d.nom_dir nom_dir, d.ape_dir
          FROM diana.primero p, diana.escuelas e,diana.directores d where p.cct = e.cct and e.cct = d.cct";
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
                <h6 class="m-0 font-weight-bold text-primary">Alumnos primer grado</h6>

              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover" id="tabla1" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ESCUELA</th>
                        <th>MATRICULA</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>SEXO </th>
                        <th>GRUPO </th>
                        <th>MAs </th>

                      </tr>
                    </thead>

                    <tbody>


                      <?php while ($row = $resultado-> fetch_array(MYSQLI_ASSOC)) {?>
                          <?php $id = $row['matricula'];
                                $c =$row['clave'];

                          $query1 ="SELECT count(*) FROM diana.materias_1 WHERE mat_alu ='$id'";
                          $resultado1 = $conexion->query($query1);
                          $materia = mysqli_fetch_array($resultado1);

                          ?>

                    <tr>
                          <td> <?php echo $row['escuela']; ?></td>
                          <td> <?php echo utf8_decode($row['matricula']); ?></td>
                          <td> <?php echo utf8_decode($row['nombre']); ?></td>
                          <td> <?php echo utf8_decode($row['apellido']); ?></td>
                          <td> <?php echo $row['sexo']; ?></td>
                          <td> <?php echo $row['grupo']; ?></td>
                          <td>

                            <div class="dropdown dropleft">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-fw fa-cog"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <?php if($materia['count(*)'] >= 1) { ?>
                                <a class="dropdown-item border-left-primary"  id="especialidad"  href="pdf/boleta.php?mat=<?php echo $row['matricula']; ?>&ctt=<?php echo $c; ?>&grado=1">Imprimir boleta</a>
                                <a class="dropdown-item border-right-primary"  id="especialidad"  href="pdf/buena_conducta.php?mat=<?php echo $row['matricula']; ?>&grado=1">Imprimir constacia de buena conducta</a>
                                <a class="dropdown-item border-right-primary"  id="especialidad"  href="pdf/const-estudio.php?mat=<?php echo $row['matricula']; ?>&grado=primero">Imprimir constacia de estudios</a>
                                <a class="dropdown-item border-left-primary"  id="especialidad"  href="pdf/constancia_.php?clave=<?php echo $row['clave']; ?>&esc=<?php echo $row['escuela']; ?>&direccion=<?php echo $row['dir']; ?>&mat=<?php echo $row['matricula']; ?>&nom=<?php echo $row['nombre']; ?>&ape=<?php echo $row['apellido']; ?>&cur=<?php echo $row['curp']; ?>&gru=<?php echo $row['grupo']; ?>&gra=1&nom_director=<?php echo $row['nom_dir']; ?>&ape_dir=<?php echo $row['ape_dir']; ?>">Imprimir constancia</a>
                                <a class="dropdown-item border-right-primary"  id="especialidad"  href="editar_alumnos.php?mat=<?php echo $row['matricula']; ?>&grado=1">Editar datos personales</a>
                                <a class="dropdown-item border-right-primary"  id="especialidad"  href="pdf/traslado.php?mat=<?php echo $row['matricula']; ?>&grado=primero">Documento de traslado</a>
                              <?php  } else{  ?>
                                <a class="dropdown-item border-left-primary" data-toggle="modal" id="especialidad" onclick="calificacion('<?php echo $id; ?>')" href="#calificacion">Agregar Calificaciones</a>
                                <a class="dropdown-item border-left-primary"  id="especialidad"  href="pdf/constancia_.php?clave=<?php echo $row['clave']; ?>&esc=<?php echo $row['escuela']; ?>&direccion=<?php echo $row['dir']; ?>&mat=<?php echo $row['matricula']; ?>&nom=<?php echo $row['nombre']; ?>&ape=<?php echo $row['apellido']; ?>&cur=<?php echo $row['curp']; ?>&gru=<?php echo $row['grupo']; ?>&gra=1&nom_director=<?php echo $row['nom_dir']; ?>&ape_dir=<?php echo $row['ape_dir'];?>">Imprimir constancia</a>
                                <a class="dropdown-item border-right-primary"  id="especialidad"  href="editar_alumnos.php?mat=<?php echo $row['matricula']; ?>&grado=1">Editar datos personales</a>
                                <a class="dropdown-item border-right-primary"  id="especialidad"  href="pdf/buena_conducta.php?mat=<?php echo $row['matricula']; ?>&grado=1">Imprimir constacia de buena conducta</a>
                                <a class="dropdown-item border-right-primary"  id="especialidad"  href="pdf/const-estudio.php?mat=<?php echo $row['matricula']; ?>&grado=primero">Imprimir constacia de estudios</a>
                                <a class="dropdown-item border-right-primary"  id="especialidad"  href="pdf/traslado.php?mat=<?php echo $row['matricula']; ?>&grado=primero">Documento de traslado</a>
                              <?php } ?>


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
                <h6 class="m-0 font-weight-bold text-primary">Alumnos segundo grado</h6>

              </div>

              <?php
              $query1 ="SELECT e.cct clave, e.nom_cct escuela,e.dir_cct dir, p.mat matricula,p.nom_ nombre,p.ape apellido
              ,p.sex sexo,p.curp, p.gru grupo, d.nom_dir nom_dir, d.ape_dir
              FROM diana.segundo p, diana.escuelas e,diana.directores d where p.cct = e.cct and e.cct = d.cct";
              $resultado1 = $conexion->query($query1);

               ?>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover" id="tabla2" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ESCUELA</th>
                        <th>MATRICULA</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>SEXO </th>
                        <th>GRUPO </th>
                        <th>MAs </th>

                      </tr>
                    </thead>

                    <tbody>


                      <?php while ($row = $resultado1-> fetch_array(MYSQLI_ASSOC)) {?>
                          <?php $id = $row['matricula'];

                          $query2 ="SELECT count(*) FROM diana.materias_2 WHERE mat_alu ='$id'";
                          $resultado2 = $conexion->query($query2);
                          $materia1 = mysqli_fetch_array($resultado2);?>


                    <tr>
                          <td> <?php echo $row['escuela']; ?></td>
                          <td> <?php echo utf8_decode($row['matricula']); ?></td>
                          <td> <?php echo utf8_decode($row['nombre']); ?></td>
                          <td> <?php echo utf8_decode($row['apellido']); ?></td>
                          <td> <?php echo $row['sexo']; ?></td>
                          <td> <?php echo $row['grupo']; ?></td>
                          <td>

                            <div class="dropdown dropleft">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-fw fa-cog"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php if($materia1['count(*)'] >= 1) { ?>
                                  <a class="dropdown-item border-left-primary"  id="especialidad"  href="pdf/constancia_.php?clave=<?php echo $row['clave']; ?>&esc=<?php echo $row['escuela']; ?>&direccion=<?php echo $row['dir']; ?>&mat=<?php echo $row['matricula']; ?>&nom=<?php echo $row['nombre']; ?>&ape=<?php echo $row['apellido']; ?>&cur=<?php echo $row['curp']; ?>&gru=<?php echo $row['grupo']; ?>&gra=2&nom_director=<?php echo $row['nom_dir']; ?>&ape_dir=<?php echo $row['ape_dir']; ?>">Imprimir constancia</a>
                                  <a class="dropdown-item border-right-primary"  id="especialidad"  href="pdf/buena_conducta.php?mat=<?php echo $row['matricula']; ?>&grado=2">Imprimir constacia de buena conducta</a>
                                  <a class="dropdown-item border-right-primary"  id="especialidad"  href="pdf/const-estudio.php?mat=<?php echo $row['matricula']; ?>&grado=segundo">Imprimir constacia de estudios</a>
                                  <a class="dropdown-item border-left-primary"  id="especialidad"  href="pdf/boleta.php?mat=<?php echo $row['matricula']; ?>&ctt=<?php echo $row['clave']; ?>&grado=2">Imprimir boleta</a>
                                  <a class="dropdown-item border-right-primary"  id="especialidad"  href="editar_alumnos.php?mat=<?php echo $row['matricula']; ?>&grado=2">Editar datos personales</a>
                                  <a class="dropdown-item border-right-primary"  id="especialidad"  href="pdf/traslado.php?mat=<?php echo $row['matricula']; ?>&grado=segundo">Documento de traslado</a>
                                <?php  } else{  ?>
                                  <a class="dropdown-item border-left-primary"  id="especialidad"  href="pdf/constancia_.php?clave=<?php echo $row['clave']; ?>&esc=<?php echo $row['escuela']; ?>&direccion=<?php echo $row['dir']; ?>&mat=<?php echo $row['matricula']; ?>&nom=<?php echo $row['nombre']; ?>&ape=<?php echo $row['apellido']; ?>&cur=<?php echo $row['curp']; ?>&gru=<?php echo $row['grupo']; ?>&gra=2&nom_director=<?php echo $row['nom_dir']; ?>&ape_dir=<?php echo $row['ape_dir']; ?>">Imprimir constancia</a>
                                  <a class="dropdown-item border-left-primary" data-toggle="modal" id="especialidad" onclick="calificacion('<?php echo $id; ?>')" href="#calificacion2">Agregar Calificaciones</a>
                                  <a class="dropdown-item border-right-primary"  id="especialidad"  href="editar_alumnos.php?mat=<?php echo $row['matricula']; ?>&grado=2">Editar datos personales</a>
                                  <a class="dropdown-item border-right-primary"  id="especialidad"  href="pdf/buena_conducta.php?mat=<?php echo $row['matricula']; ?>&grado=2">Imprimir constacia de buena conducta</a>
                                  <a class="dropdown-item border-right-primary"  id="especialidad"  href="pdf/const-estudio.php?mat=<?php echo $row['matricula']; ?>&grado=segundo">Imprimir constacia de estudios</a>
                                  <a class="dropdown-item border-right-primary"  id="especialidad"  href="pdf/traslado.php?mat=<?php echo $row['matricula']; ?>&grado=segundo">Documento de traslado</a>
                                <?php } ?>

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
              $query2 ="SELECT e.cct clave, e.nom_cct escuela,e.dir_cct dir, p.mat matricula,p.nom_ nombre,p.ape apellido
              ,p.sex sexo,p.curp, p.gru grupo, d.nom_dir nom_dir, d.ape_dir
              FROM diana.tercero p, diana.escuelas e,diana.directores d where p.cct = e.cct and e.cct = d.cct";
              $resultado2 = $conexion->query($query2);

               ?>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover" id="tabla3" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ESCUELA</th>
                        <th>MATRICULA</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>SEXO </th>
                        <th>GRUPO </th>
                        <th>MAs </th>

                      </tr>
                    </thead>

                    <tbody>


                      <?php while ($row = $resultado2-> fetch_array(MYSQLI_ASSOC)) {?>
                          <?php $id = $row['matricula'];
                          $query3 ="SELECT count(*) FROM diana.materias_3 WHERE mat_alu ='$id'";
                          $resultado3 = $conexion->query($query3);
                          $materia2 = mysqli_fetch_array($resultado3);
                          ?>

                    <tr>
                          <td> <?php echo $row['escuela']; ?></td>
                          <td> <?php echo utf8_decode($row['matricula']); ?></td>
                          <td> <?php echo utf8_decode($row['nombre']); ?></td>
                          <td> <?php echo utf8_decode($row['apellido']); ?></td>
                          <td> <?php echo $row['sexo']; ?></td>
                          <td> <?php echo $row['grupo']; ?></td>
                          <td>

                            <div class="dropdown dropleft">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-fw fa-cog"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php if($materia2['count(*)'] >= 1) { ?>

                                  <a class="dropdown-item border-left-primary"  id="especialidad"  href="pdf/boleta.php?mat=<?php echo $row['matricula']; ?>&ctt=<?php echo $row['clave']; ?>&grado=3">Imprimir boleta</a>
                                  <a class="dropdown-item border-left-primary"  id="especialidad"  href="pdf/constancia_.php?clave=<?php echo $row['clave']; ?>&esc=<?php echo $row['escuela']; ?>&direccion=<?php echo $row['dir']; ?>&mat=<?php echo $row['matricula']; ?>&nom=<?php echo $row['nombre']; ?>&ape=<?php echo $row['apellido']; ?>&cur=<?php echo $row['curp']; ?>&gru=<?php echo $row['grupo']; ?>&gra=3&nom_director=<?php echo $row['nom_dir']; ?>&ape_dir=<?php echo $row['ape_dir']; ?>">Imprimir constancia</a>
                                  <a class="dropdown-item border-right-primary"  id="especialidad"  href="pdf/buena_conducta.php?mat=<?php echo $row['matricula']; ?>&grado=3">Imprimir constacia de buena conducta</a>
                                  <a class="dropdown-item border-right-primary"  id="especialidad"  href="pdf/const-estudio.php?mat=<?php echo $row['matricula']; ?>&grado=tercero">Imprimir constacia de estudios</a>
                                  <a class="dropdown-item border-right-primary"  id="especialidad"  href="editar_alumnos.php?mat=<?php echo $row['matricula']; ?>&grado=3">Editar datos personales</a>
                                  <a class="dropdown-item border-right-primary"  id="especialidad"  href="pdf/traslado.php?mat=<?php echo $row['matricula']; ?>&grado=tercero">Documento de traslado</a>
                                <?php  } else{  ?>
                                  <a class="dropdown-item border-left-primary"  id="especialidad"  href="pdf/constancia_.php?clave=<?php echo $row['clave']; ?>&esc=<?php echo $row['escuela']; ?>&direccion=<?php echo $row['dir']; ?>&mat=<?php echo $row['matricula']; ?>&nom=<?php echo $row['nombre']; ?>&ape=<?php echo $row['apellido']; ?>&cur=<?php echo $row['curp']; ?>&gru=<?php echo $row['grupo']; ?>&gra=3&nom_director=<?php echo $row['nom_dir']; ?>&ape_dir=<?php echo $row['ape_dir']; ?>">Imprimir constancia</a>
                                  <a class="dropdown-item border-left-primary" data-toggle="modal" id="especialidad" onclick="calificacion3('<?php echo $id; ?>')" href="#calificacion3">Agregar Calificaciones</a>
                                  <a class="dropdown-item border-right-primary" id="especialidad"  href="editar_alumnos.php?mat=<?php echo $row['matricula']; ?>&grado=3">Editar datos personales</a>
                                  <a class="dropdown-item border-right-primary"  id="especialidad"  href="pdf/buena_conducta.php?mat=<?php echo $row['matricula']; ?>&grado=3">Imprimir constacia de buena conducta</a>
                                  <a class="dropdown-item border-right-primary"  id="especialidad"  href="pdf/const-estudio.php?mat=<?php echo $row['matricula']; ?>&grado=tercero">Imprimir constacia de estudios</a>
                                  <a class="dropdown-item border-right-primary"  id="especialidad"  href="pdf/traslado.php?mat=<?php echo $row['matricula']; ?>&grado=tercero">Documento de traslado</a>
                                <?php } ?>

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
