<?php


if (isset($_GET['mat'])) {
  $mat= $_GET['mat'];
  $cct= $_GET['ctt'];
  $grado= $_GET['grado'];



  //echo $i." ".$m." ".$m2;


require 'header.php';
require '../includes/conexion.php';
if ($grado == 1) {
  $sql ="SELECT p.mat matricula,e.cct, e.nom_cct escuela,p.nom_ nombre,p.ape ape,p.curp,p.gru grupo,
m1.espanol1 uno, m1.matematicas1 dos, m1.biologia1 tres,m1.quimica1 cuatro,m1.ingles1 cinco,((m1.espanol1 + m1.matematicas1 + m1.biologia1+m1.quimica1+m1.ingles1) /5) promedio FROM
 diana.materias_1 m1, diana.primero p, diana.escuelas e
where m1.mat_alu = '$mat' and p.mat ='$mat'  and p.cct = '$cct' and e.cct = '$cct'";
}
if ($grado == 2) {
  $sql ="SELECT s.mat matricula,e.cct, e.nom_cct escuela,s.nom_ nombre,s.ape ape,s.curp,s.gru grupo,
  m2.espanol2 uno, m2.matematicas2 dos, m2.biologia2 tres,m2.quimica2 cuatro,m2.ingles2 cinco
  ,((m2.espanol2 + m2.matematicas2 + m2.biologia2+m2.quimica2+m2.ingles2) /5) promedio FROM
  diana.materias_2 m2, diana.segundo s, diana.escuelas e
  where m2.mat_alu = '$mat' and s.mat = '$mat' and s.cct = '$cct' and e.cct = '$cct'";
}
if ($grado == 3) {
  $sql ="SELECT t.mat matricula,e.cct, e.nom_cct escuela,t.nom_ nombre,t.ape ape,t.curp,t.gru grupo,
m3.espanol3 uno , m3.matematicas3 dos, m3.biologia3 tres,m3.quimica3 cuatro,m3.ingles3 cinco
,((m3.espanol3 + m3.matematicas3 + m3.biologia3+m3.quimica3+m3.ingles3) /5) promedio FROM
 diana.materias_3 m3, diana.tercero t, diana.escuelas e
where m3.mat_alu = '$mat' and t.mat = '$mat' and t.cct = '$cct' and e.cct = '$cct'";
}


$bus = $conexion->query($sql);
$fila = mysqli_fetch_array($bus);




$pdf = new PDF('P');
$pdf-> AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetXY(40,30);
$pdf->Cell(8,2,utf8_decode($grado.'º GRADO DE EDUCACION SECUNDARIA'),0,0,'C',0);
$pdf->SetFont('Arial','',12);
$pdf->SetXY(25,40);
$pdf->Cell(10,7,utf8_decode('DATOS DEL ALUMNO'),0,0,'C',0);
$pdf->SetXY(30,55);
$pdf->Cell(10,7,utf8_decode('_____________________'),0,0,'C',0);
$pdf->Cell(30,7,utf8_decode($fila['ape']),0,0,'C',0);
$pdf->SetXY(25,60);
$pdf->Cell(10,7,utf8_decode('Apellidos'),0,0,'C',0);


$pdf->SetXY(90,55);
$pdf->Cell(10,7,utf8_decode('________________________________'),0,0,'C',0);
$pdf->Cell(10,7,utf8_decode($fila['nombre']),0,0,'R',0);
$pdf->SetXY(90,60);
$pdf->Cell(10,7,utf8_decode('Nombre'),0,0,'C',0);

$pdf->SetXY(165,55);
$pdf->Cell(10,7,utf8_decode('________________________________'),0,0,'C',0);
$pdf->Cell(10,7,utf8_decode($fila['curp']),0,0,'R',0);
$pdf->SetXY(155,60);
$pdf->Cell(10,7,utf8_decode('CURP'),0,0,'C',0);




$pdf->SetXY(25,80);
$pdf->Cell(10,7,utf8_decode('DATOS DE LA ESCUELA'),0,0,'C',0);
$pdf->SetXY(30,95);
$pdf->Cell(10,7,utf8_decode('_____________________'),0,0,'C',0);
$pdf->Cell(10,7,utf8_decode($fila['escuela']),0,0,'C',0);
$pdf->SetXY(25,100);
$pdf->Cell(10,7,utf8_decode('Nombre de la escuela'),0,0,'C',0);


$pdf->SetXY(90,95);
$pdf->Cell(10,7,utf8_decode('________________________________'),0,0,'C',0);
$pdf->Cell(10,7,utf8_decode($grado."-".$fila['grupo']),0,0,'R',0);
$pdf->SetXY(90,100);
$pdf->Cell(10,7,utf8_decode('Grupo'),0,0,'C',0);

$pdf->SetXY(165,95);
$pdf->Cell(10,7,utf8_decode('________________________________'),0,0,'C',0);
$pdf->Cell(10,7,utf8_decode($fila['cct']),0,0,'R',0);
$pdf->SetXY(155,100);
$pdf->Cell(10,7,utf8_decode('CCT'),0,1,'C',0);

$pdf->SetFont('Arial','',12);
$pdf->SetXY(30,125);
$pdf->Cell(75,7,utf8_decode('NOMBRE DE LA MATERIA'),1,0,'C',1);
$pdf->Cell(75,7,utf8_decode('CALIFICACION FINAL'),1,1,'C',1);
$pdf->SetXY(30,132);
$pdf->Cell(75,7,utf8_decode('ESPAÑOL'." ".$grado),1,0,'C',0);
$pdf->Cell(75,7,utf8_decode($fila['uno']),1,1,'C',0);
$pdf->SetXY(30,139);
$pdf->Cell(75,7,utf8_decode('MATEMATICAS'." ".$grado),1,0,'C',0);
$pdf->Cell(75,7,utf8_decode($fila['dos']),1,1,'C',0);
$pdf->SetXY(30,146);
$pdf->Cell(75,7,utf8_decode('BIOLOGIA'." ".$grado),1,0,'C',0);
$pdf->Cell(75,7,utf8_decode($fila['tres']),1,1,'C',0);
$pdf->SetXY(30,153);
$pdf->Cell(75,7,utf8_decode('QUIMICA'." ".$grado),1,0,'C',0);
$pdf->Cell(75,7,utf8_decode($fila['cuatro']),1,1,'C',0);
$pdf->SetXY(30,160);
$pdf->Cell(75,7,utf8_decode('INGLES'." ".$grado),1,0,'C',0);
$pdf->Cell(75,7,utf8_decode($fila['cinco']),1,1,'C',0);
$pdf->SetXY(30,167);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(75,7,utf8_decode('PROMEDIO FINAL'),1,0,'C',0);
$pdf->Cell(75,7,utf8_decode($fila['promedio']),1,1,'C',0);


/* while ($row = $res->fetch_array(MYSQLI_ASSOC)) {

$pdf->SetFont('Arial','',8);
$pdf->Cell(8,7,utf8_decode($row['no_cvo']),1 ,0,'C',0);
$pdf->Cell(22,7,utf8_decode($row['siniga']),1,0,'C',0);
$pdf->Cell(32,7,utf8_decode($row['muerte_rancho']),1,0,'C',0);
$pdf->Cell(35,7,utf8_decode($row['sacrificio_rastro']),1,0,'C',0);
$pdf->Cell(35,7,utf8_decode($row['vent_engor']),1,0,'C',0);
$pdf->Cell(12,7,utf8_decode($row['cesion']),1,0,'C',0);
$pdf->Cell(10,7,utf8_decode($row['robo']),1,0,'C',0);
$pdf->Cell(23,7,utf8_decode($row['vent_recria']),1,0,'C',0);
$pdf->Cell(15,7,utf8_decode($row['obs']),1,1,'C',0);

} */

//ob_start();
$pdf->OutPut();
  // code...
 }
 else {
   echo "Pagina no encontrada";
 }

 ?>
