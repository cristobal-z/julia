<?php

require '../fpdf/fpdf.php';


class PDF extends FPDF
{

  function header()
  {
    $this-> Image('../img/sev.png',5,5,30);
    $this-> Image('../img/ve.png',165,5,30);
    $this->SetFont('Arial','',16);
    $this->SetXY(95,10);
    $this->Cell(8,3,utf8_decode('SECRETARIA DE EDUCACION DE VERACRUZ'),0,1,'C',0);

    $this->SetFont('Arial','',14);
    $this->SetX(100);
    $this->Cell(8,10,utf8_decode('BOLETA DE EVALUACIÓN'),0,0,'C',0);
    $this->Ln();
    $this->SetX(70);
    $this->SetFont('Arial','',10);

    $this->Setx(145);
    $this->Cell(8,2,utf8_decode('CICLO ESCOLAR: AGOSTO-2019-JUNIO-2020'),0,1,'C',0);


  }
  function footer(){


    $this-> SetXY(10,-7);
          $this-> write(5,$this->PageNo());
  }

  }
  ?>
