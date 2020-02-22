<?php

require '../fpdf/fpdf.php';


class PDF extends FPDF
{

  function header()
  {
    $this-> Image('../img/logo-header.png',105,5,100);
    $this->SetFillColor(232,232,232);
    $this->SetFont('Arial','',16);
    $this->SetXY(150,25);
    $this->Cell(8,3,utf8_decode('SECRETARIA DE EDUCACION DE VERACRUZ'),0,1,'C',0);

    $this->SetFont('Arial','',10);
    $this->SetXY(78,30);

    $this-> Multicell(150,5,utf8_decode('SUBSECRETARIA DE EDUCACION BASICA DIRECCION GENERAL DE EDUCACION SECUNDARIA SUBDIRECCION DE ESCUELAS TELESECUNDARIAS ESTADISTICA DE INICIO DE CURSOS 2019-2020'),0,'C',0);
    $this->SetXY(150,50);
    $this->SetFont('Arial','B',10);
    $this->Cell(8,3,utf8_decode('ANALISIS DE PLANTILLA DATOS ESTADISTICOS DE INICIO DE CICLO ESCOLAR 2019 - 2020'),0,1,'C',0);
    $this->Ln();
    $this-> SetX(30);
    $this->Cell(40,9,utf8_decode('NOMBRE'),1,0,'C',1);

    $this->Cell(50,9,utf8_decode('PRIMERO'),1,0,'C',1);
    $this->Cell(50,9,utf8_decode('SEGUNDO'),1,0,'C',1);
    $this->Cell(50,9,utf8_decode('TERCERO'),1,0,'C',1);
    $this->Cell(50,9,utf8_decode('TOTALES'),1,1,'C',1);

      $this-> SetX(30);
      $this->Cell(40,7,utf8_decode('30'),1,0,'C',1);
      $this->Cell(16,7,utf8_decode('H'),1,0,'C',1);
      $this->Cell(16,7,utf8_decode('M'),1,0,'C',1);
      $this->Cell(18,7,utf8_decode('T'),1,0,'C',1);
      $this->Cell(16,7,utf8_decode('H'),1,0,'C',1);
      $this->Cell(16,7,utf8_decode('M'),1,0,'C',1);
      $this->Cell(18,7,utf8_decode('T'),1,0,'C',1);
      $this->Cell(16,7,utf8_decode('H'),1,0,'C',1);
      $this->Cell(16,7,utf8_decode('M'),1,0,'C',1);
      $this->Cell(18,7,utf8_decode('T'),1,0,'C',1);
      $this->Cell(16,7,utf8_decode('H'),1,0,'C',1);
      $this->Cell(16,7,utf8_decode('M'),1,0,'C',1);
      $this->Cell(18,7,utf8_decode('T'),1,1,'C',1);
  }
  function footer(){


    $this-> SetXY(10,-7);
          $this-> write(5,$this->PageNo());
  }

  }
  ?>
