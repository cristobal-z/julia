<?php
include 'constancia_header.php';

$clave =$_GET['clave'];
$esc =$_GET['esc'];
$dir =$_GET['direccion'];
$mat =$_GET['mat'];
$nom =$_GET['nom'];
$ape =$_GET['ape'];
$cur =$_GET['cur'];
$gru =$_GET['gru'];
$gra =$_GET['gra'];

$director =$_GET['nom_director'];
$ape_dir =$_GET['ape_dir'];



$pdf = new PDF('P');
$pdf-> AddPage();

$pdf->SetFillColor(232,232,232);

$pdf->SetXY(20,40);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,2,utf8_decode('Delegación regional:'),0,0,'C',0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,2,utf8_decode('ACAYUCAN'),0,1,'C',0);

$pdf->SetXY(20,45);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,2,utf8_decode('Supervisión escolar:'),0,0,'C',0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,2,utf8_decode('30FTV0078B'),0,1,'C',0);

$pdf->SetXY(20,50);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,2,utf8_decode('Clave de c. de trabajo:'),0,0,'C',0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,2,utf8_decode($clave),0,1,'C',0);

$pdf->SetXY(20,55);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,2,utf8_decode('Nombre de la escuela:'),0,0,'C',0);
$pdf->SetFont('Arial','',10);
$pdf->SetXY(58,55);
$pdf->Cell(50,2,utf8_decode($esc),0,1,'C',0);

$pdf->SetXY(20,65);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,2,utf8_decode('Domicilio de la escuela:'),0,0,'C',0);
$pdf->SetFont('Arial','',10);
$pdf->SetXY(65,65);
$pdf->Cell(20,2,utf8_decode($dir),0,1,'L',0);

$dias = date("d");
$mes = date("m");
$year = date("Y");
if ($mes == 01) {
  $mes ="Enero";
  // code...
}

$pdf->SetXY(25,70);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30,2,utf8_decode('A QUIEN CORRESPONDA:'),0,1,'C',0);
$pdf->SetFont('Arial','',12);
$pdf->SetXY(15,80);
$pdf-> Multicell(190,10,utf8_decode('Por este conducto, me permito hacer constar que el(la) alumno(a): '.$nom.' '.$ape.' CURP: '.$cur.', con matricula:'.$mat.', estuvo inscrito(a) en este plantel desde el día 26 de Agosto del 2019 aldía 28 de Octubre del 2019, en el '.$gra.'er. grado , grupo '.$gru.' '),0,'C',0);

$pdf->SetXY(15,110);
$pdf-> Multicell(190,10,utf8_decode('Para los fines que convengan al interesado, se extiende la presente Constancia de Inscripción en RIO AZUL (LICENCIADO RAFAEL MURILLO VIDAL) Municipio de UXPANAPA a los '.$dias.' días del mes de '.$mes.' del '.$year.', se anexa copia fotostática del expediente personal del alumno. '),0,'C',0);


$pdf->SetXY(85,180);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30,2,utf8_decode('ATENTAMENTE:'),0,1,'C',0);


$pdf->SetXY(85,210);
$pdf->SetFont('Arial','',12);
$pdf->Cell(30,2,utf8_decode('________________________________'),0,1,'C',0);
$pdf->SetXY(85,210);
$pdf->Cell(30,2,utf8_decode($director.' '.$ape_dir),0,1,'C',0);
$pdf->SetXY(85,218);
$pdf->Cell(30,2,utf8_decode('Nombre y firma del(de la) Director(a)'),0,1,'C',0);

$pdf->SetXY(160,190);
$pdf->SetFont('Arial','',12);
$pdf-> Multicell(25,5,utf8_decode('SELLO DE LA ESCUELA '),0,'C',0);



$pdf->OutPut();




 ?>
