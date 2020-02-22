<?php
include 'header_estadistica.php';
include '../includes/conexion.php';
include '../scrip.php';

$pdf = new PDF('L');
$pdf-> AddPage();
$pdf->SetFillColor(232,232,232);

$pdf->SetFont('Arial','B',12);




  while ($row = $res->fetch_array(MYSQLI_ASSOC)) {

    $pdf->SetFont('Arial','',8);
    $pdf-> SetX(30);
    $pdf->Cell(40,7,utf8_decode($row['nombre']),1,0,'C',0);
    $pdf->Cell(16,7,utf8_decode($row['hombres_p']),1,0,'C',0);
    $pdf->Cell(16,7,utf8_decode($row['mujeres_p']),1,0,'C',0);
    $pdf->Cell(18,7,utf8_decode($row['total_p']),1,0,'C',0);
    $pdf->Cell(16,7,utf8_decode($row['hombres_s']),1,0,'C',0);
    $pdf->Cell(16,7,utf8_decode($row['mujeres_s']),1,0,'C',0);
    $pdf->Cell(18,7,utf8_decode($row['total_s']),1,0,'C',0);
    $pdf->Cell(16,7,utf8_decode($row['hombres_t']),1,0,'C',0);
    $pdf->Cell(16,7,utf8_decode($row['mujeres_t']),1,0,'C',0);
    $pdf->Cell(18,7,utf8_decode($row['total_t']),1,0,'C',0);
    $pdf->Cell(16,7,utf8_decode($row['total_hombres']),1,0,'C',0);
    $pdf->Cell(16,7,utf8_decode($row['total_mujeres']),1,0,'C',0);
    $pdf->Cell(18,7,utf8_decode($row['TOTAL_GRAL']),1,1,'C',0);


  }


$pdf->OutPut();
 ?>
