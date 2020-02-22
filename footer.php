<!-- Footer -->
<footer class="py-5 bg-white shadow ">
  <div class="container">
    <p class="m-0 text-center text-primary">Copyright &copy; SECRETARIA DE EDUCACION DE VERACRUZ </p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="data/datatables.min.js"></script>

</body>



</html>

<script type="text/javascript">

  function director(id) {
    $('#cct').val(id);

  }

  function calificacion(id) {
    $('#mat').val(id);
  }
  function calificacion2(id) {
    $('#mat2').val(id);
  }
  function calificacion3(id) {
    $('#mat3').val(id);
  }
  function alumnos(id) {
    $('#cct_a').val(id);
  }
  function alumnos(id) {
    $('#cct_a').val(id);
  }
  function editar_direc(id){
    d=id.split('||');
    $('#cct_dir').val(d[0]);
    $('#nom_dir').val(d[1]);
    $('#ape_dir').val(d[2]);
    $('#tel').val(d[3]);
  }
  function editar_maestros(id){
    d=id.split('||');
    $('#id_ma').val(d[0]);
    $('#nom_ma').val(d[1]);
    $('#ape_ma').val(d[2]);
    $('#dir_ma').val(d[3]);
  }
  function agregar_maestro(id) {
    $('#cct_maestro').val(id);
  }
  function totales(datos){
    d=datos.split('||');
    $('#nom_esc').val(d[0]);
    $('#p_na').val(d[1]);
    $('#p_no').val(d[2]);
    $('#p_total').val(d[3]);
    $('#s_na').val(d[4]);
    $('#s_no').val(d[5]);
    $('#s_total').val(d[6]);
    $('#t_na').val(d[7]);
    $('#t_no').val(d[8]);
    $('#t_total').val(d[9]);
    $('#to_na').val(d[10]);
    $('#to_no').val(d[11]);
    $('#to_total').val(d[12]);
  }


</script>
<script type="text/javascript">
$(document).ready( function () {

  $('#tabla1').DataTable({
    language: {
      "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad"
            }
    }
  });



  $('#tabla2').DataTable({
    language: {
      "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad"
            }
    }
  });

  $('#tabla3').DataTable({
    language: {
      "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad"
            }
    }
  });


} );






</script>
