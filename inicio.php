
<?php

  session_start();
  if (empty($_SESSION['id'])) {

   echo "<a href='index.php'><h1>Pagina no encontrada, volver al inicio</h1></a>";


} else { ?>

          <?php $titulo ="Escuelas" ?>
          <?php include 'header.php'; ?>
          <?php
          include 'includes/conexion.php';


          $query ="SELECT * FROM diana.escuelas";
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
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">ESCUELAS REGISTRADAS</h6>

            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="tabla1" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>CCT</th>
                      <th>NOMBRE</th>
                      <th>DIRECCION</th>
                      <th>LOCALIDAD</th>
                      <th>MUNICIPIO </th>
                      <th> </th>

                    </tr>
                  </thead>

                  <tbody>


                    <?php while ($row = $resultado-> fetch_array(MYSQLI_ASSOC)) {?>
                        <?php $id = $row['cct'];
                        $query1 ="SELECT count(*) FROM diana.directores WHERE cct='$id'";
                        $resultado1 = $conexion->query($query1);
                        $busqueda = mysqli_fetch_array($resultado1);


                        $sql ="SELECT (select nom_cct from diana.escuelas where cct ='$id') nombre,
                          (select count(*) from diana.primero where cct ='$id' and sex ='HOMBRE' ) hombres_p,
                          (select count(*) from diana.primero where cct ='$id' and sex ='MUJER' ) mujeres_p,
                          (select count(*) from diana.primero where cct ='$id') total_p,

                          (select count(*) from diana.segundo where cct ='$id' and sex ='HOMBRE' ) hombres_s,
                          (select count(*) from diana.segundo where cct ='$id' and sex ='MUJER' ) mujeres_s,
                          (select count(*) from diana.segundo where cct ='$id') total_s,

                          (select count(*) from diana.tercero where cct ='$id' and sex ='HOMBRE' ) hombres_t,
                          (select count(*) from diana.tercero where cct ='$id' and sex ='MUJER' ) mujeres_t,
                          (select count(*) from diana.tercero where cct ='$id') total_t,

                          (select count(*) from diana.primero where cct ='$id' and sex ='HOMBRE' ) +
                          (select count(*) from diana.tercero where cct ='$id' and sex ='HOMBRE' ) +
                          (select count(*) from diana.segundo where cct ='$id' and sex ='HOMBRE' ) total_hombres,

                          (select count(*) from diana.primero where cct ='$id' and sex ='MUJER' ) +
                          (select count(*) from diana.tercero where cct ='$id' and sex ='MUJER' ) +
                          (select count(*) from diana.segundo where cct ='$id' and sex ='MUJER' ) total_mujeres,

                          (select count(*) from diana.primero where cct ='$id') +
                          (select count(*) from diana.segundo where cct ='$id') +
                          (select count(*) from diana.tercero where cct ='$id') TOTAL_GRAL from diana.escuelas where cct ='30DTV0117P'";
                        $r = $conexion->query($sql);
                        $bus = mysqli_fetch_array($r);

                        $datos= $bus['nombre']."||".
                            $bus['hombres_p']."||".
                            $bus['mujeres_p']."||".
                            $bus['total_p']."||".
                            $bus['hombres_s']."||".
                            $bus['mujeres_s']."||".
                            $bus['total_s']."||".
                            $bus['hombres_t']."||".
                            $bus['mujeres_t']."||".
                            $bus['total_t']."||".
                            $bus['total_hombres']."||".
                            $bus['total_mujeres']."||".
                            $bus['TOTAL_GRAL'];





                        ?>

                  <tr>
                        <td> <?php echo $row['cct']; ?></td>
                        <td> <?php echo utf8_decode($row['nom_cct']); ?></td>
                        <td> <?php echo utf8_decode($row['dir_cct']); ?></td>
                        <td> <?php echo utf8_decode($row['loc_cct']); ?></td>
                        <td> <?php echo $row['mun_cct']; ?></td>
                        <td>

                          <div class="dropdown dropleft">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              +
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <?php if ($busqueda['count(*)'] >=1){  ?>
                                <a class="dropdown-item border-left-primary" data-toggle="modal" id="especialidad" onclick="totales('<?php echo $datos; ?>')" href="#totales">Ver total de alumnos</a>
                                <a class="dropdown-item border-left-primary" data-toggle="modal" id="especialidad" onclick="alumnos('<?php echo $id; ?>')" href="#alumnos">Agregar Alumnos</a>
                                <a class="dropdown-item border-left-primary" data-toggle="modal" id="especialidad" onclick="agregar_maestro('<?php echo $id; ?>')" href="#maestros">Agregar Maestros</a>
                              <?php }else { ?>
                            <?php  ?>
                                <a class="dropdown-item border-left-primary" data-toggle="modal" id="especialidad" onclick="totales('<?php echo $datos; ?>')" href="#totales">Ver total de alumnos</a>
                                <a class="dropdown-item border-left-primary" data-toggle="modal" id="especialidad" onclick="agregar_maestro('<?php echo $id; ?>')" href="#maestros">Agregar Maestros</a>
                                <a class="dropdown-item border-left-primary" data-toggle="modal" id="especialidad" onclick="director('<?php echo $id; ?>')" href="#directores">Agregar Director</a>
                                <a class="dropdown-item border-left-primary" data-toggle="modal" id="especialidad" onclick="alumnos('<?php echo $id; ?>')" href="#alumnos">Agregar Alumnos</a>
                          <?php  } ?>








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
    <!-- /.row -->


  </div>
  <!-- /.container -->
    <?php include 'footer.php'; ?>

    <?php   } ?>
