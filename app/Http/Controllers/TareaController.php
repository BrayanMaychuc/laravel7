<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class TareaController extends Controller
{
    public function tarea(){
    //INICIAMOS LA CLASE
     $pdf=new Fpdf('L','mm', 'Letter');
     //AÑADIMOS UNA NUEVA PAGINA
     $pdf ->AddPage();
     //ELEGIMOS UNA FUENTE
     $pdf ->SetFont('Arial', 'B', 14);

     $pdf -> Ln(3);
     //IMPRIMIMOS UNA CADENA DE TEXTO

     $pdf->Cell(275, 5, 'UNIVERSIDAD TECNOLOGICA DEL CENTRO', 0, 0, 'C');
     $pdf -> Ln();
     //

     $pdf ->SetFont('Arial', 'B', 10);
     $pdf->Cell(275, 5, 'DEPARTAMENTO DE SERVICIOS ESCOLARES', 0, 0, 'C');

     $pdf-> Ln(6);
     $pdf ->SetFont('Arial', 'B', 8);
     $pdf ->Cell(275, 5, 'LSTADO DE ASISTENCIA', 0, 0, 'C');

     $pdf -> Ln();

     $pdf ->SetFont('Arial', 'B', 8);
     $pdf->Cell(290, 5, 'TECNICO SUPERIOR UNIVERSITARIO EN TECNOLOGIAS DE LA INFORMACION Y LA COMUNICACION AREA DE DESARROLLO DE SOFTWARE MULTIPLATAFORMA', 0, 0, 'C');

     $pdf-> Line(1, 0, 5, 0);

     $pdf-> image(public_path(). '/dist/uutc.jpeg', 10, 10, 25);

     $pdf->Output();
     Exit;
     }
}
