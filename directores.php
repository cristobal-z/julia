<?php

  session_start();
  if (empty($_SESSION['id'])) {

   echo "<a href='index.php'><h1>Pagina no encontrada, volver al inicio</h1></a>";


} else { ?>


          <?php $titulo ="Directores" ?>
          <?php include 'header.php'; ?>
          <?php
          include 'includes/conexion.php';


          $query ="SELECT d.id_dir id, d.nom_dir nom, d.ape_dir dir, d.tel_dir tel, e.nom_cct esc
          FROM diana.directores d, diana.escuelas e where d.cct = e.cct";
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
                <h6 class="m-0 font-weight-bold text-primary">Directores</h6>

              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover" id="tabla1" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>NOMBRE</th>
                        <th>APELLIDOS</th>
                        <th>TELEFONO</th>
                        <th>CCT</th>

                        <th>MAs </th>

                      </tr>
                    </thead>

                    <tbody>


                      <?php while ($row = $resultado-> fetch_array(MYSQLI_ASSOC)) {?>
                          <?php $id = $row['id']."||".
                                      $row['nom']."||".
                                      $row['dir']."||".
                                      $row['tel']."||";



                          ?>

                    <tr>
                          <td> <?php echo $row['id']; ?></td>
                          <td> <?php echo utf8_decode($row['nom']); ?></td>
                          <td> <?php echo utf8_decode($row['dir']); ?></td>
                          <td> <?php echo utf8_decode($row['tel']); ?></td>
                          <td> <?php echo $row['esc']; ?></td>

                          <td>

                            <div class="dropdown dropleft">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-fw fa-cog"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item border-left-primary" data-toggle="modal" id="especialidad" onclick="editar_direc('<?php echo $id; ?>')" href="#editar_direc">Editar</a>



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
