<?php

require '../fpdf/fpdf.php';

class PDF extends FPDF
{

  function header()
  {
    $this-> Image('../img/logo-header.png',95,10,95);
  //  $this-> Image('../img/ve.png',165,5,30);


    $this->SetFont('Arial','B',14);
    $this->SetX(105);
  //  $this->Cell(8,10,utf8_decode('Departamento de Control Escolar de Educación Básica'),0,0,'C',0);
    $this->Ln();
    $this->SetX(70);
    $this->SetFont('Arial','',11);

    $this->SetXY(130,35);
    $this->Cell(8,2,utf8_decode('A S U N T O: LIBERACIÓN Y CONSTANCIA DE NO ADEUDO.  '),0,0,'C',0);



  }
  function footer(){





  }

  }






 ?>
