<?php

require '../fpdf/fpdf.php';
require '../includes/conexion.php';

date_default_timezone_set('America/Mexico_City');
  $id = $_GET['mat'];
  $gru = $_GET['grado'];

  $sql ="SELECT
    a.nom_ nom,
    a.ape ape,
    a.gru grupo,
    a.curp curp,
    d.nom_dir nombre,
    d.ape_dir apellido,
    e.cct,
    e.nom_cct noombre,
    e.loc_cct loca,
    e.mun_cct muni
FROM
    diana.$gru a,
    diana.directores d,
    diana.escuelas e
WHERE
    a.cct = e.cct AND d.cct = e.cct
        AND a.mat = '$id'";

  $res = $conexion->query($sql);
  $row = mysqli_fetch_array($res);


class PDF extends FPDF
{

  function header()
  {
    $this-> Image('../img/sev.png',10,5,40);
  //  $this-> Image('../img/ve.png',165,5,30);
    $this->SetFont('Arial','B',13);
    $this->SetXY(70,10);
    $this->Cell(95,3,utf8_decode('Subdirección de Administración Escolar '),0,1,'C',0);
    $this->SetXY(60,20);
    $this->Cell(130,3,utf8_decode('Departamento de Control Escolar de Educación Básica'),0,1,'C',0);

  //  $this->SetFont('Arial','',14);
  //  $this->SetX(100);
  //  $this->Cell(8,10,utf8_decode('NOMBRE DE LA ESCUELA'),0,0,'C',0);


  //  $this->SetFont('Arial','',10);


   $this->SetXY(145,30);
   $this->Cell(55,2,utf8_decode('Documento de Traslado'),0,1,'C',0);

  }
  function footer(){



  }

  }

$pdf = new PDF('P');
$pdf-> AddPage();


$pdf->SetFont('Arial','B',11);

$pdf-> SetXY(50,55);
$pdf->Cell(70,4,utf8_decode($row['nom'].' '.$row['ape']),0,0,'C',0);
$pdf-> SetXY(85,60);
$pdf->Cell(50,4,utf8_decode($row['curp']),0,0,'C',0);
$pdf-> SetXY(40,65);
$pdf->Cell(50,4,utf8_decode($gru.'-'.$row['grupo']),0,0,'C',0);
$pdf-> SetXY(30,70);
$pdf->Cell(80,4,utf8_decode($row['loca']),0,0,'C',0);
$pdf-> SetXY(30,75);
$pdf->Cell(50,4,utf8_decode($row['muni']),0,0,'J',0);

$pdf-> SetXY(10,50);
$pdf->Cell(165,2,utf8_decode('Por este conducto, me prmito hacer de su conocimiento el siguiente alumno en traslado'),0,1,'C',0);
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,5,utf8_decode('Nombre del alumno:'),0,0,'C',0);
$pdf->Cell(150,5,utf8_decode('_______________________________________________________________'),0,1,'C',0);

$pdf->Cell(75,5,utf8_decode('Clave Única de Registro de Población:'),0,0,'C',0);
$pdf->Cell(115,5,utf8_decode('_________________________________________________'),0,1,'C',0);

$pdf->Cell(30,5,utf8_decode('Grado y grupo:'),0,0,'C',0);
$pdf->Cell(160,5,utf8_decode('____________________________________________________________________'),0,1,'C',0);

$pdf->Cell(20,5,utf8_decode('Localidad:'),0,0,'J',0);
$pdf->Cell(170,5,utf8_decode('________________________________________________________________________'),0,1,'C',0);

$pdf->Cell(20,5,utf8_decode('Municipio:'),0,0,'J',0);
$pdf->Cell(170,5,utf8_decode('________________________________________________________________________'),0,1,'C',0);


$pdf->SetFont('Arial','B',12);

$pdf-> SetXY(10,90);
$pdf->Cell(150,5,utf8_decode('Documentos que presenta el padre de familia o tutor para la reinscripción:'),1,1,'C',0);



$pdf->SetFont('Arial','',12);
$pdf-> Multicell(190,7,utf8_decode('I. Copia Certificada del Acta de Nacimiento o Documento Equivalente..........................................(  ) '),1,'J',0);
$pdf-> Multicell(190,7,utf8_decode('II. Clave Única de Registro de Población (CURP) ..........................................................................(  ) '),1,'J',0);
$pdf-> Multicell(190,7,utf8_decode('III. Cédula de Identidad Personal. (En caso de contar con ésta, no será necesario presentar los
documentos de los incisos I y II.) ....................................................................................................(  )'),1,'J',0);
$pdf-> Multicell(190,7,utf8_decode('IV.Cartilla Nacional de Vacunación o Salud, en caso de contar con ella.........................................(  ) '),1,'J',0);
$pdf-> Multicell(190,7,utf8_decode('V.Constancia de Inscripción ............................................................................................................(  ) '),1,'J',0);
$pdf-> Multicell(190,7,utf8_decode('VI. Portafolio de Evidencias (Informe de detección Inicial, Evaluación Psicopedagógica,
Propuesta Curricular Adaptada y/o Expediente de Acreditación y Promoción). En el caso de los
alumnos con necesidades educativas especiales y/o aptitudes sobresalientes, según
corresponda ....................................................................................................................................(  ) '),1,'J',0);
$pdf-> Multicell(190,5,utf8_decode('VII. Constancia de Acreditación del grado anterior, Cartilla de Educación Básica o Formato de
Certificación que avale oficialemente la acreditación parcial o total de grado y/o nivel..................................................................................................................................................(  ) '),1,'J',0);





$pdf->Ln();
$pdf->SetFont('Arial','B',12);
$dias = date("d");
$mes = date("M");
$año = date("Y");
$pdf-> Multicell(190,5,utf8_decode('Para los fines que convengan al interesado, se extiende el presente documento de traslado en FERNANDO LOPEZ ARIAS Municipio de UXPANAPA a los 7 día(s) del mes de Febrero de 2020.'),1,'J',0);


$pdf->SetFont('Arial','B',10);
$pdf-> SetXY(15,230);
$pdf->Cell(45,5,utf8_decode('A T E N T A M E N T E'),0,1,'C',0);

$pdf->SetFont('Times','',12);
$pdf-> SetXY(10,240);
$pdf->Cell(60,2,utf8_decode('__________________________'),0,1,'C',0);
$pdf-> SetXY(15,240);
$pdf->Cell(50,2,utf8_decode($row['nombre'].' '.$row['apellido']),0,1,'C',0);
$pdf-> SetXY(15,245);
$pdf->Cell(50,2,utf8_decode('Nombre y Firma del'),0,1,'C',0);
$pdf-> SetXY(15,250);
$pdf->Cell(50,2,utf8_decode('Director de la Escuela'),0,1,'C',0);

$pdf->SetFont('Arial','B',7);
$pdf-> SetXY(125,230);
$pdf->Cell(45,5,utf8_decode('SELLO DE LA ESCUELA'),0,1,'C',0);
$pdf-> SetXY(120,235);
$pdf->Cell(30,5,utf8_decode('Nombre de la Escuela:'),0,0,'J',0);
$pdf->Cell(30,5,utf8_decode($row['noombre']),0,1,'J',0);

$pdf-> SetXY(120,240);
$pdf->Cell(30,5,utf8_decode('clave:'),0,0,'J',0);
$pdf->Cell(30,5,utf8_decode($row['cct']),0,1,'J',0);

$pdf->OutPut();


























 ?>
