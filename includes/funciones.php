<?php
      session_start();
      include 'conexion.php';
  if (isset($_POST['director'])) {

      $nom = $_POST['nom'];
      $ape = $_POST['ape'];
      $tel = $_POST['tel'];
      $cct = $_POST['cct'];

      $sqlb= "select count(*) resultado from diana.directores
      where cct ='$cct'";
      $encontrar = $conexion ->query($sqlb);
      $row = mysqli_fetch_array($encontrar);
      if ($row['resultado'] >= 1) {
        echo "<script>alert('Esta escuela ya tiene asignado un director');</script>";
        echo "<script type'text/javascript'>window.location='../inicio.php' </script>";
      }else {
        $sql ="INSERT INTO diana.directores (nom_dir,ape_dir,tel_dir,cct) VALUES ('$nom','$ape','$tel','$cct')";
        $res =$conexion->query($sql);
        if ($res) {
          echo "<script>alert('Agregado con exito');</script>";
          echo "<script type'text/javascript'>window.location='../inicio.php' </script>";
        }
    }

  }

  if (isset($_POST['materia1'])) {
      $esp = $_POST['esp'];
      $mat = $_POST['mat'];
      $bio = $_POST['bio'];
      $qui = $_POST['qui'];
      $ing = $_POST['ing'];
      $matr = $_POST['matr'];

      $sqlb= "select count(*) resultado from diana.primero
      where mat ='$matr'";
      $encontrar = $conexion ->query($sqlb);
      $row = mysqli_fetch_array($encontrar);
      if ($row['resultado'] >= 1) {
        $sql ="INSERT INTO diana.materias_1 (espanol1,matematicas1,biologia1,quimica1,ingles1,mat_alu) VALUES ('$esp','$mat','$bio','$qui','$ing','$matr')";
        $res =$conexion->query($sql) OR die(mysqli_error($conexion));
        if ($res) {
          echo "<script>alert('Agregado con exito');</script>";
          echo "<script type'text/javascript'>window.location='../alumnos.php' </script>";
        }
      }else {
        echo "<script>alert('No exite el alumno');</script>";
      }

    // code...
  }

  if (isset($_POST['materia2'])) {
      $esp = $_POST['esp'];
      $mat = $_POST['mat'];
      $bio = $_POST['bio'];
      $qui = $_POST['qui'];
      $ing = $_POST['ing'];
      $matr = $_POST['matr'];

      $sqlb= "select count(*) resultado from diana.segundo
      where mat ='$matr'";
      $encontrar = $conexion ->query($sqlb);
      $row = mysqli_fetch_array($encontrar);
      if ($row['resultado'] >= 1) {
        $sql ="INSERT INTO diana.materias_2 (espanol2,matematicas2,biologia2,quimica2,ingles2,mat_alu) VALUES ('$esp','$mat','$bio','$qui','$ing','$matr')";
        $res =$conexion->query($sql) OR die(mysqli_error($conexion));
        if ($res) {
          echo "<script>alert('Agregado con exito');</script>";
          echo "<script type'text/javascript'>window.location='../alumnos.php' </script>";
        }
      }else {
        echo "<script>alert('No exite el alumno');</script>";
        echo "<script type'text/javascript'>window.location='../alumnos.php' </script>";
      }

    // code...
  }


  if (isset($_POST['materia3'])) {
      $esp = $_POST['esp'];
      $mat = $_POST['mat'];
      $bio = $_POST['bio'];
      $qui = $_POST['qui'];
      $ing = $_POST['ing'];
      $matr = $_POST['matr'];

      $sqlb= "select count(*) resultado from diana.tercero
      where mat ='$matr'";
      $encontrar = $conexion ->query($sqlb);
      $row = mysqli_fetch_array($encontrar);
      if ($row['resultado'] >= 1) {
        $sql ="INSERT INTO diana.materias_3 (espanol3,matematicas3,biologia3,quimica3,ingles3,mat_alu) VALUES ('$esp','$mat','$bio','$qui','$ing','$matr')";
        $res =$conexion->query($sql) OR die(mysqli_error($conexion));
        if ($res) {
          echo "<script>alert('Agregado con exito');</script>";
          echo "<script type'text/javascript'>window.location='../alumnos.php' </script>";
        }
      }else {
        echo "<script>alert('No exite el alumno');</script>";
        echo "<script type'text/javascript'>window.location='../alumnos.php' </script>";
      }

    // code...
  }

  if (isset($_POST['director'])) {
      $nom = $_POST['nom'];
      $ape = $_POST['ape'];
      $tel = $_POST['tel'];
      $cct = $_POST['cct'];


      $sqlb= "select count(*) resultado from diana.directores
      where cct ='$cct'";
      $encontrar = $conexion ->query($sqlb);
      $row = mysqli_fetch_array($encontrar);
      if ($row['resultado'] >= 1) {
        echo "<script>alert('Esta escuela ya cuenta con un director');</script>";
        echo "<script type'text/javascript'>window.location='../alumnos.php' </script>";

      }else {
        $sql ="INSERT INTO diana.directores (nom_dir,ape_dir,tel_dir,cct) VALUES ('$nom','$ape','$tel','$cct')";
        $res =$conexion->query($sql) OR die(mysqli_error($conexion));
        if ($res) {
          echo "<script>alert('Agregado con exito');</script>";
          echo "<script type'text/javascript'>window.location='../alumnos.php' </script>";
        }

      }

    // code...
  }


  if (isset($_POST['alumnos'])) {
      $mat = $_POST['mat'];
      $ctt = $_POST['ctt'];
      $nom = $_POST['nom'];
      $ape = $_POST['ape'];
      $cur = $_POST['cur'];
      $sex = $_POST['sex'];
      $gru = $_POST['grup'];
      $gra = $_POST['grap'];


      $sqlb= "select count(*) resultado from diana.escuelas
      where cct ='$ctt'";
      $encontrar = $conexion ->query($sqlb);
      $row = mysqli_fetch_array($encontrar);
      if ($row['resultado'] >= 1) {
        $bus= "select count(*) resultado from diana.primero
        where mat ='$mat'";
        $en = $conexion ->query($bus);
        $row = mysqli_fetch_array($en);

        $bus1= "select count(*) resultado from diana.segundo
        where mat ='$mat'";
        $en1 = $conexion ->query($bus1);
        $row1 = mysqli_fetch_array($en1);

        $bus2= "select count(*) resultado from diana.tercero
        where mat ='$mat'";
        $en2 = $conexion ->query($bus2);
        $row2 = mysqli_fetch_array($en2);

          if ($row['resultado'] >=1 or $row1['resultado'] >=1 or $row2['resultado'] >=1) {
            echo "<script>alert('La matricula ya existe,prueba otra');</script>";
            echo "<script type'text/javascript'>window.location='../inicio.php' </script>";

              }else {
                if ($gra == 1) {
                  $sql ="INSERT INTO diana.primero (mat,cct,nom_,ape,curp,sex,gru) VALUES ('$mat','$ctt','$nom','$ape','$cur','$sex','$gru')";
                    }if ($gra ==2) {
                      $sql ="INSERT INTO diana.segundo (mat,cct,nom_,ape,curp,sex,gru) VALUES ('$mat','$ctt','$nom','$ape','$cur','$sex','$gru')";
                        }if ($gra ==3) {
                          $sql ="INSERT INTO diana.tercero (mat,cct,nom_,ape,curp,sex,gru) VALUES ('$mat','$ctt','$nom','$ape','$cur','$sex','$gru')";
                            }

                            $res =$conexion->query($sql) OR die(mysqli_error($conexion));
                            if ($res) {
                              echo "<script>alert('Agregado con exito');</script>";
                              echo "<script type'text/javascript'>window.location='../inicio.php' </script>";
                              }
                      }

          }else {
            echo "<script>alert('No existe el cct');</script>";
            echo "<script type'text/javascript'>window.location='../inicio.php' </script>";

      }

    // code...
  }

  if (isset($_POST['maestros'])) {
      $nom = $_POST['nom'];
      $ape = $_POST['ape'];
      $dir = $_POST['dir'];
      $cct = $_POST['cct'];


      $sqlb= "select count(*) resultado from diana.escuelas
      where cct ='$cct'";
      $encontrar = $conexion ->query($sqlb);
      $row = mysqli_fetch_array($encontrar);
      if ($row['resultado'] >= 1) {
        $sql ="INSERT INTO diana.maestros (nom_,ape,dir,cdt) VALUES ('$nom','$ape','$dir','$cct')";
        $res =$conexion->query($sql) OR die(mysqli_error($conexion));
        if ($res) {
          echo "<script>alert('Agregado con exito');</script>";
          echo "<script type'text/javascript'>window.location='../alumnos.php' </script>";
        }

      }

      else {
        echo "<script>alert('Esta escuela no existe');</script>";
        echo "<script type'text/javascript'>window.location='../alumnos.php' </script>";



    // code...
  }
 }


  if (isset($_POST['editar_alumnos'])) {
      $grado =$_POST['grado'];
      $mat =$_POST['mat'];
      $nom =$_POST['nom'];
      $ape =$_POST['ape'];
      $cur =$_POST['cur'];
      $sex =$_POST['sex'];
      $gru =$_POST['gru'];

      if ($grado ==1) {
        $sql ="UPDATE diana.primero SET nom_ ='$nom',ape='$ape',sex='$sex',curp='$cur',gru='$gru' WHERE mat='$mat' ";
      }
      if ($grado ==2) {
        $sql ="UPDATE diana.segundo SET nom_ ='$nom',ape='$ape',sex='$sex',curp='$cur',gru='$gru' WHERE mat='$mat' ";
      }
      if ($grado ==3) {
        $sql ="UPDATE diana.tercero SET nom_ ='$nom',ape='$ape',sex='$sex',curp='$cur',gru='$gru' WHERE mat='$mat' ";
      }
      $re =$conexion->query($sql) Or die(mysqli_error($conexion));
      if ($re) {
        echo "<script>alert('Datos Actualizados');</script>";
        echo "<script type'text/javascript'>window.location='../alumnos.php' </script>";
      }
    // code...
  }

  if (isset($_POST['editar_direc'])) {
      $nom =$_POST['nom'];
      $ape =$_POST['ape'];
      $tel =$_POST['tel'];
      $id_dir =$_POST['id_dir'];
      $sql ="UPDATE diana.directores SET nom_dir ='$nom',ape_dir='$ape',tel_dir='$tel' WHERE id_dir='$id_dir' ";
      $re =$conexion->query($sql) Or die(mysqli_error($conexion));
      if ($re) {
        echo "<script>alert('Datos Actualizados');</script>";
        echo "<script type'text/javascript'>window.location='../directores.php' </script>";
      }


    // code...
  }

  if (isset($_POST['editar_maestros'])) {
      $nom =$_POST['nom'];
      $ape =$_POST['ape'];
      $dir =$_POST['tel'];
      $id_ma =$_POST['id_ma'];
      $sql ="UPDATE diana.maestros SET nom_ ='$nom',ape='$ape',dir='$dir' WHERE id_ma='$id_ma' ";
      $re =$conexion->query($sql) Or die(mysqli_error($conexion));
      if ($re) {
        echo "<script>alert('Datos Actualizados');</script>";
        echo "<script type'text/javascript'>window.location='../maestros.php' </script>";
      }


    // code...
  }

  if (isset($_POST['login'])) {
      $cor =$_POST['cor'];
      $con =$_POST['con'];

      $sql ="SELECT count(*) FROM diana.users WHERE cor ='$cor' AND pas='$con' ";
      $re =$conexion->query($sql) Or die(mysqli_error($conexion));
      $row = mysqli_fetch_array($re);


      if ($row['count(*)'] == 1) {
        $sql1 ="SELECT nom_user FROM diana.users WHERE cor ='$cor' AND pas ='$con'";
        $r = $conexion->query($sql1);
        $row1 = mysqli_fetch_array($r);
        $_SESSION['id'] = 1;
        $_SESSION['usu'] = $row1['nom_user'];
        echo "<script>alert('Todo bien".$_SESSION['usu'].".');</script>";

        echo "<script type'text/javascript'>window.location='../inicio.php' </script>";
      }else {
        echo "<script>alert('Correo o contraseñas incorrectos".$_SESSION['usu'].".');</script>";
        echo "<script type'text/javascript'>window.location='../index1.php' </script>";
      }


    // code...
  }









 ?>
