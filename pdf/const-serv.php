<?php

require '../fpdf/fpdf.php';
require '../includes/conexion.php';

date_default_timezone_set('America/Mexico_City');
  $id = $_GET['id'];

  $sql ="SELECT
    m.nom_ nombre,
    m.ape apellido,
    e.nom_cct escuela,
    e.cct clave,
    e.loc_cct comunidad,
    e.mun_cct municipio
FROM
    diana.maestros m,
    diana.escuelas e
WHERE
    m.cdt = e.cct AND m.id_ma = '$id'";

  $res = $conexion->query($sql);
  $row = mysqli_fetch_array($res);


class PDF extends FPDF
{

  function header()
  {
    $this-> Image('../img/sev.png',10,5,40);
  //  $this-> Image('../img/ve.png',165,5,30);
  //  $this->SetFont('Arial','B',16);
  //  $this->SetXY(100,30);
    //$this->Cell(8,3,utf8_decode('ESCUELA TELESECUNDARIA'),0,1,'C',0);

  //  $this->SetFont('Arial','',14);
  //  $this->SetX(100);
  //  $this->Cell(8,10,utf8_decode('NOMBRE DE LA ESCUELA'),0,0,'C',0);
    $this->Ln();
    $this->SetX(70);
    $this->SetFont('Arial','',10);

   $this->SetXY(130,25);
   $this->Cell(8,2,utf8_decode(' DEPENDENCIA:'),0,1,'C',0);
   $this->SetXY(145,24);
   $this-> Multicell(55,5,utf8_decode('SUPERVISION ESCOLAR DE
   TELESECUNDARIAS ZONA 078  '),0,'R',0);

   $this->SetXY(130,50);
   $this->Cell(20,2,utf8_decode('ASUNTO: '),0,1,'C',0);
   $this->SetXY(155,50);
   $this->Cell(40,2,utf8_decode('CONSTANCIA DE SERVICIO.'),0,1,'C',0);

  }
  function footer(){



  }

  }

$pdf = new PDF('P');
$pdf-> AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(100,35);
$pdf->Cell(8,10,utf8_decode($row['escuela']),0,0,'C',0);

$pdf->SetFont('Arial','B',12);
$pdf-> SetXY(15,70);
$pdf->Cell(45,2,utf8_decode('A QUIEN CORRESPONDA.'),0,1,'C',0);
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf-> Multicell(190,10,utf8_decode('EL SUSCRITO, SUPERVISOR ESCOLAR DE TELESECUNDARIAS DE LA ZONA 078 CON CLAVE 30FTV0078B, PERTENECIENTE AL SECTOR 14 DE ACAYUCAN, VER'),0,'J',0);

$pdf->SetFont('Arial','B',15);

$pdf-> SetXY(100,110);
$pdf->Cell(8,2,utf8_decode('H A C E  C O N S T A R '),0,1,'C',0);


$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf-> Multicell(190,10,utf8_decode('QUE  EL (LA)  C. PROFR. (A) '.$row['nombre'].' '.$row['apellido'].' SE ENCUENTRA LABORANDO EN LA ESCUELA '.$row['escuela'].' CON CLAVE '.$row['clave'].' DE LA COMUNIDAD DE '.$row['comunidad'].' MUNICIPIO DE '.$row['municipio'].', VER. Y SE DESEMPEÑA COMO DOCENTE FRENTE A GRUPO, CON EFECTOS 201616-201715.'),0,'J',0);




$pdf->Ln();
$pdf->SetFont('Arial','',12);
$dias = date("d");
$mes = date("M");
$año = date("Y");
$pdf-> Multicell(190,10,utf8_decode('A PETICIÓN DEL (LA) INTERESADO (A) Y PARA LOS USOS Y FINES LEGALES QUE A EL (ELLA) CONVENGAN, SE EXTIENDE LA PRESENTE EN LA CD. DE ACAYUCAN, VER., A LOS '.$dias.' DÍAS DEL MES DE '.$mes.' DEL AÑO DOS '.$año.'.'),0,'J',0);


$pdf->SetFont('Arial','B',12);
$pdf-> SetXY(100,225);
$pdf->Cell(8,2,utf8_decode('A T E N T A M E N T E'),0,1,'C',0);

$pdf->SetFont('Arial','',12);
$pdf-> SetXY(80,240);
$pdf->Cell(40,2,utf8_decode('__________________________________________'),0,1,'C',0);
$pdf-> SetXY(80,240);
$pdf->Cell(40,2,utf8_decode('RUBEN SEGUNDO MORA '),0,1,'C',0);
$pdf-> SetXY(80,245);
$pdf->Cell(40,2,utf8_decode('SUPERVISOR ESCOLAR'),0,1,'C',0);





$pdf->OutPut();


























 ?>
