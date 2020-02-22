<?php

require '../fpdf/fpdf.php';

class PDF extends FPDF
{

  function header()
  {
    $this-> Image('../img/sev.png',5,5,30);
  //  $this-> Image('../img/ve.png',165,5,30);
    $this->SetFont('Arial','B',14);
    $this->SetXY(105,10);
    $this->Cell(8,3,utf8_decode('Subdirección de Administración Escolar'),0,1,'C',0);

    $this->SetFont('Arial','B',14);
    $this->SetX(105);
    $this->Cell(8,10,utf8_decode('Departamento de Control Escolar de Educación Básica'),0,0,'C',0);
    $this->Ln();
    $this->SetX(70);
    $this->SetFont('Arial','B',12);

    $this->SetXY(160,25);
    $this->Cell(8,2,utf8_decode('Constancia de Inscripción'),0,1,'C',0);


  }
  function footer(){




          $this->SetFont('Arial','B',12);
          $this-> SetXY(50,-30);
          $this->Cell(20,2,utf8_decode('C.c.p. Supervisión Escolar. -Para su conocimiento'),0,0,'C',0);
          $this-> SetXY(10,-18);
          $this->SetFont('Arial','B',6);
          $this-> Multicell(150,5,utf8_decode('*El plantel deberá elaborar y entregar Constancia de Inscripción al padre de familia o tutor en el momento que solicite la baja del alumno'),0,'C',0);
          $this-> SetXY(0,-15);
          $this-> Multicell(150,5,utf8_decode('*La Constancia de Inscripción original deberá ser presentada en el plantel receptor para inscribir al alumno.'),0,'C',0);
          $this->Cell(20,2,utf8_decode('*'),0,1,'C',0);
          $this-> SetXY(15,-10);
          $this-> Multicell(200,3,utf8_decode('* El traslado es el cambio de alumnos de un plantel a otro que se efectúa a partir del primer día hábil del mes de octubre y podrá ser en cualquier momento del
ciclo escolar. Una vez iniciado el traslado del alumno, este no puede exceder de treinta días hábiles, si se rebasa, la solicitud debe ser sometida a consideración del
Director de la Institución educativa pública o particular con autorización, en coordinación con el Responsable del Área de Control Escola'),0,'L',0);
  }

  }






 ?>
