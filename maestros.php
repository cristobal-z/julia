<?php

  session_start();
  if (empty($_SESSION['id'])) {

   echo "<a href='index.php'><h1>Pagina no encontrada, volver al inicio</h1></a>";


} else { ?>


          <?php $titulo ="Maestros" ?>
          <?php include 'header.php'; ?>
          <?php
          include 'includes/conexion.php';


          $query ="SELECT m.id_ma id,m.nom_ nombre, m.ape apellido, m.dir direccion, e.nom_cct es, e.cct clave,
          e.loc_cct lacalidad, e.mun_cct muni
          FROM diana.maestros m, diana.escuelas e where e.cct = m.cdt";
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
                <h6 class="m-0 font-weight-bold text-primary">Maestros</h6>

              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover" id="tabla1" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>NOMBRE</th>
                        <th>APELLIDOS</th>
                        <th>DIRECCION</th>
                        <th>ESCUELA</th>

                        <th>MAs </th>

                      </tr>
                    </thead>

                    <tbody>


                      <?php while ($row = $resultado-> fetch_array(MYSQLI_ASSOC)) {?>
                          <?php $id = $row['id']."||".
                                      $row['nombre']."||".
                                      $row['apellido']."||".
                                      $row['direccion']."||";?>

                    <tr>
                          <td> <?php echo $row['id']; ?></td>
                          <td> <?php echo utf8_decode($row['nombre']); ?></td>
                          <td> <?php echo utf8_decode($row['apellido']); ?></td>
                          <td> <?php echo utf8_decode($row['direccion']); ?></td>
                          <td> <?php echo $row['es']; ?></td>

                          <td>

                            <div class="dropdown dropleft">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-fw fa-cog"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item border-left-primary" data-toggle="modal" id="especialidad" onclick="editar_maestros('<?php echo $id; ?>')" href="#editar_maestros">editar maestros</a>
                                <a class="dropdown-item border-left-primary"  id="especialidad" onclick="editar_maestros('<?php echo $id; ?>')" href="pdf/liberacion_.php?id=<?php echo $row['id']; ?>&nombre=<?php echo $row['nombre']; ?>&apellido=<?php echo $row['apellido']; ?>&direccion=<?php echo $row['direccion']; ?>&es=<?php echo $row['es']; ?>&clave=<?php echo $row['clave']; ?>&lacalidad=<?php echo $row['lacalidad']; ?>&muni=<?php echo $row['muni']; ?>">imprimir contancia de liberacion</a>
                                <a class="dropdown-item border-left-primary"  id="especialidad" onclick="editar_maestros('<?php echo $id; ?>')" href="pdf/const-serv.php?id=<?php echo $row['id']; ?>">imprimir contancia de servicio</a>



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
