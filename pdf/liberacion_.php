<?php
include 'liberacion_header.php';

$id = $_GET['id'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$direccion = $_GET['direccion'];
$es = $_GET['es'];
$clave = $_GET['clave'];
$lacalidad = $_GET['lacalidad'];
$muni = $_GET['muni'];





$pdf = new PDF('P');
$pdf-> AddPage();

$pdf->SetFillColor(232,232,232);

$pdf->SetFont('Arial','',11);
$pdf->SetXY(40,50);
$pdf->Cell(8,2,utf8_decode('A QUIEN CORRESPONDA'),0,0,'C',0);
$pdf->SetXY(15,60);
$pdf-> Multicell(190,10,utf8_decode('LOS QUE SUSCRIBEN C. DIRECTOR (A) Y PRESIDENTE (A) DE LA SOCIEDAD DE PADRES DE FAMILIA DE LA ESCUELA TELESECUNDARIA '.$es.' CON CLAVE '.$clave.', UBICADA EN LA LOCALIDAD DE , MUNICIPIO DE UXPANAPA, VER. '),0,'L',0);

$dias = date("d");
$mes = date("m");
$year = date("Y");
if ($mes == 01) {
  $mes ="Enero";
  // code...
}

$pdf->SetFont('Arial','B',20);
$pdf->SetXY(80,110);
$pdf->Cell(50,2,utf8_decode('HACE CONSTAR'),0,0,'C',0);

$pdf->SetFont('Arial','',11);
$pdf->SetXY(15,120);
$pdf-> Multicell(190,10,utf8_decode('QUE LA C. PROFR. (A) '.$nombre.' '.$apellido.', ENTREGÓ SATISFACTORIAMENTE TODA LA DOCUMENTACIÓN DEL GRUPO A SU CARGO Y NO TIENE NINGÚN ADEUDO, NI CON LA ESCUELA NI CON LA COMUNIDAD.'),0,'L',0);

$pdf->SetFont('Arial','',11);
$pdf->SetXY(15,170);
$pdf-> Multicell(190,10,utf8_decode('SE EXTIENDE LA PRESENTE LIBERACIÓN, PARA LOS FINES QUE AL INTERESADO CONVENGAN, A LOS '.$dias.'  DÍAS, DEL MES DE '.$mes.' DEL AÑO '.$year.'.'),0,'L',0);

$pdf->SetXY(100,200);
$pdf->Cell(8,2,utf8_decode('A T E N T A M E N T E'),0,0,'C',0);


$pdf->SetXY(40,225);
$pdf->Cell(20,2,utf8_decode('MAYRA YESENIA EUSEBIO SÁNCHEZ'),0,0,'C',0);
$pdf->Cell(20,2,utf8_decode('_______________________________'),0,0,'R',0);
$pdf->SetXY(40,230);
$pdf->Cell(8,2,utf8_decode('EL (LA) DIRECTOR (A)'),0,0,'C',0);


$pdf->SetXY(150,225);
$pdf->Cell(20,2,utf8_decode('ANDRÉS GONZÁLEZ CABRERA'),0,0,'C',0);
$pdf->Cell(20,2,utf8_decode('_______________________________'),0,0,'R',0);
$pdf->SetXY(150,230);
$pdf->Cell(8,2,utf8_decode('PRESIDENTE DE LA SOC. DE PADRES'),0,0,'C',0);

$pdf->SetXY(95,250);
$pdf->Cell(20,2,utf8_decode('Vo. Bo.'),0,0,'C',0);

$pdf->SetXY(95,260);
$pdf->Cell(20,2,utf8_decode('RUBEN SEGUNDO MORA'),0,0,'C',0);
$pdf->Cell(20,2,utf8_decode('_______________________________'),0,0,'R',0);
$pdf->SetXY(95,265);
$pdf->Cell(8,2,utf8_decode('EL SUPERVISOR ESCOLAR ZONA 078'),0,0,'C',0);


//ob_start();

$pdf->OutPut();




 ?>
