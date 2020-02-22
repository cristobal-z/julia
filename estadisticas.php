<?php

  session_start();
  if (empty($_SESSION['id'])) {

   echo "<a href='index.php'><h1>Pagina no encontrada, volver al inicio</h1></a>";


} else { ?>


          <?php $titulo ="Estadisticas" ?>
          <?php include 'header.php'; ?>
          <?php
          include 'includes/conexion.php';
          include 'scrip.php';




         ?>
         <!-- Page Content -->
         <h1></h1>
         <div class="container">
           <br>
           <h1 class="h3 mb-2 text-gray-800"> <a href="pdf/estadistica.php" target="_blank" class="btn  btn-primary"> Imprimir</a> </h1>
           <div class="row">

      <!-- Blog Entries Column -->
      <!-- DataTales Example -->
          <div class="col">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">ESCUELAS REGISTRADAS</h6>

              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover" id="tabla1" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>CCT </th>
                        <th> 1</th>
                        <th> 1</th>
                        <th> 1</th>
                        <th>2 </th>
                        <th>2 </th>
                        <th> 2</th>
                        <th> 3</th>
                        <th>3 </th>
                        <th> 3</th>
                        <th>T </th>
                        <th>T </th>
                        <th>T </th>


                      </tr>
                    </thead>

                    <tbody>


                      <tr>
                        <td> </td>
                        <td>H</td>
                        <td>M</td>
                        <td>T</td>

                        <td>H</td>
                        <td>M</td>
                        <td>T</td>

                        <td>H</td>
                        <td>M</td>
                        <td>T</td>

                        <td>H</td>
                        <td>M</td>
                        <td>T</td>


                      </tr>
                      <?php while ($row = $res-> fetch_array(MYSQLI_ASSOC)) {?>
                          <?php// $id = $row['cct']; ?>

                    <tr>
                          <td> <?php echo $row['nombre']; ?></td>
                          <td> <?php echo utf8_decode($row['hombres_p']); ?></td>
                          <td> <?php echo utf8_decode($row['mujeres_p']); ?></td>
                          <td> <?php echo utf8_decode($row['total_p']); ?></td>

                          <td> <?php echo $row['hombres_s']; ?></td>
                          <td> <?php echo $row['mujeres_s']; ?></td>
                          <td> <?php echo utf8_decode($row['total_s']); ?></td>

                          <td> <?php echo utf8_decode($row['hombres_t']); ?></td>
                          <td> <?php echo utf8_decode($row['mujeres_t']); ?></td>
                          <td> <?php echo $row['total_t']; ?></td>

                          <td> <?php echo utf8_decode($row['total_hombres']); ?></td>
                          <td> <?php echo utf8_decode($row['total_mujeres']); ?></td>
                          <td> <?php echo $row['TOTAL_GRAL']; ?></td>


                    </tr>
                      <?php   } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>



    </div>
    <!-- /.row -->


  </div>
  <!-- /.container -->
    <?php include 'footer.php'; ?>
  <?php } ?>
