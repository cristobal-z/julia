<?php
if (isset($_GET['cerrar'])) {
  session_start();

  session_destroy();
  unset($_SESSION['ide']);
  echo "<script type'text/javascript'>window.location='../index.php' </script>";

} else {
  echo "pagina no econtrada";
}


 ?>
