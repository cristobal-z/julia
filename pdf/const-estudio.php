<?php

require '../fpdf/fpdf.php';
require '../includes/conexion.php';

date_default_timezone_set('America/Mexico_City');
  $matricula = $_GET['mat'];
  $grupo = $_GET['grado'];
  $sql ="SELECT
    p.nom_ nombre,
    p.ape apellido,
    p.gru grupo,
    e.nom_cct escuela,
    e.cct clave,
    e.loc_cct loc,
    e.mun_cct munici,
    d.nom_dir nom_dir,
    d.ape_dir apellido
FROM
    $grupo p,
    directores d,
    escuelas e
WHERE
    p.cct = e.cct AND e.cct = d.cct AND  p.mat = '$matricula'";

  $res = $conexion->query($sql);
  $row = mysqli_fetch_array($res);


class PDF extends FPDF
{

  function header()
  {
    $this-> Image('../img/sev.png',10,5,40);
  //  $this-> Image('../img/ve.png',165,5,30);
    $this->SetFont('Arial','B',16);
    $this->SetXY(100,30);
    $this->Cell(8,3,utf8_decode('ESCUELA TELESECUNDARIA'),0,1,'C',0);

    $this->SetFont('Arial','',14);
    $this->SetX(100);
  //  $this->Cell(8,10,utf8_decode('NOMBRE DE LA ESCUELA'),0,0,'C',0);
    $this->Ln();
    $this->SetX(70);
    $this->SetFont('Arial','',10);

   $this->SetXY(160,70);
   $this->Cell(8,2,utf8_decode('CONSTANCIA DE ESTUDIOS'),0,1,'C',0);


  }
  function footer(){



  }

  }
$gra ="";
if ($grupo == 'primero') {$gra =1;}
if ($grupo == 'segundo') {$gra =2;}
if ($grupo == 'tercero') {$gra =3;}
$pdf = new PDF('P');
$pdf-> AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(100,35);
$pdf->Cell(8,10,utf8_decode($row['escuela']),0,0,'C',0);

$pdf->SetFont('Arial','B',12);
$pdf-> SetXY(15,90);
$pdf->Cell(45,2,utf8_decode('A QUIEN CORRESPONDA.'),0,1,'C',0);
$pdf->Ln();
$pdf->SetFont('Arial','',12);
 $director = $row['nom_dir'].' '.$row['apellido'];
$pdf-> Multicell(190,10,utf8_decode('               El (la) que suscribe, Profr(a). '.$director.' , Director(a) de la Escuela "'.$row['escuela'].'"  con Clave  '.$row['clave'].' de esta ciudad:'),0,'L',0);

$pdf->SetFont('Arial','B',15);
$pdf-> SetXY(100,125);
$pdf->Cell(8,2,utf8_decode('H  A  C  E      C  O  N  S  T  A  R'),0,1,'C',0);

$pdf->SetFont('Arial','',12);
$pdf-> SetXY(10,140);
$pdf->Cell(40,2,utf8_decode('                        Que el(la) alumno(a): '),0,1,'C',0);

$pdf->SetFont('Arial','',12);
$pdf-> SetXY(80,150);
$pdf->Cell(40,2,utf8_decode($row['nombre']).' '.$row['apellido'],0,1,'C',0);

$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf-> Multicell(190,10,utf8_decode('               Está inscrito(a) y es alumno(a) regular del '.$gra.'er. grado grupo '.$row['grupo'].' de este Plantel Educativo en el presente año escolar.'),0,'L',0);




$pdf->Ln();
$pdf->SetFont('Arial','',12);
$dias = date("d");
$mes = date("M");
$año = date("Y");
$pdf-> Multicell(190,10,utf8_decode('                Para los usos legales que convengan, al(a) interesado(a) se expide la presente  en la localidad de '.$row['loc'].' municipio de '.$row['munici'].', Ver., a los '.$dias.' días del mes de '.$mes.' del año '.$año.'. '),0,'L',0);


$pdf->SetFont('Arial','B',12);
$pdf-> SetXY(100,225);
$pdf->Cell(8,2,utf8_decode('A T E N T A M E N T E'),0,1,'C',0);

$pdf->SetFont('Arial','',12);
$pdf-> SetXY(80,240);
$pdf->Cell(40,2,utf8_decode('__________________________________________'),0,1,'C',0);
$pdf-> SetXY(80,245);
$pdf->Cell(40,2,utf8_decode($director),0,1,'C',0);
$pdf-> SetXY(80,250);
$pdf->Cell(40,2,utf8_decode('DIRECTOR(A)'),0,1,'C',0);

$pdf->SetFont('Arial','B',8);
$pdf-> SetXY(10,260);
$pdf->Cell(30,4,utf8_decode('Delegación Regional:'),0,0,'C',0);
$pdf->SetFont('Arial','',8);
$pdf->Cell(30,4,utf8_decode('ACAYUCAN:'),0,1,'C',0);

$pdf->SetFont('Arial','B',8);
$pdf->Cell(30,4,utf8_decode('Supervisión Escolar::'),0,0,'C',0);
$pdf->SetFont('Arial','',8);
$pdf->Cell(30,4,utf8_decode('30FTV0078B:'),0,1,'C',0);

$pdf->SetFont('Arial','B',8);
$pdf->Cell(32,4,utf8_decode('Domicilio de la Escuela:'),0,0,'C',0);
$pdf->SetFont('Arial','',8);
$pdf->Cell(42,4,utf8_decode('CALLEJON HIDALGO SN'),0,1,'C',0);



$pdf->OutPut();


























 ?>
