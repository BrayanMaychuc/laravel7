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

     $pdf-> image(public_path(). '/dist/uutc.jpeg', 12, 4, 30);

     $pdf -> Ln(7);

     $pdf->SetFont('Arial', 'B', 11);
     //TITULO #1 DOCENTE
     $pdf->Cell(40, 5, 'Docente:', 0, 0, 'R');

     $pdf->Cell(60, 5, 'Mtro. Jose Gilberto Balam Balam', 'B',0, 'C');  
     //UNIDAD
     $pdf->Cell(40, 7, 'Unidad:', 0, 0, 'R'); 

     $pdf->Cell(20, 7, '1', 'B' ,0 , 'C');  
    //CUATRIMESTRE
     $pdf->Cell(50, 8, 'Cuatrimestre:', 0, 0, 'C'); 

     $pdf->Cell(40, 7, '4', 'B', 0, 'C'); 

     $pdf->Ln(7);

     $pdf->SetFont('Arial', 'B', 11);
     //MATERIA
     $pdf->Cell(35, 5, 'Materia:', 0, 0, 'R');

     $pdf->Cell(75, 5, 'Aplicaciones Web Orientada a servicios', 'B',0, 'C');
     //Grupo
     $pdf->Cell(30, 7, 'Grupo:', 0, 0, 'R'); 

     $pdf->Cell(20, 7, 'TTD-4A', 'B' ,0 , 'C');
     //PERIODO
     $pdf->Cell(50, 8, 'Periodo:', 0, 0, 'C'); 

     $pdf->Cell(40, 7, 'Sep-Dic 2020', 'B', 0, 'C');

     $pdf->Ln(12);
        //SECCION DE LA LISTA
     $pdf->SetFont('Arial', '' , 12);
     
     $pdf->Cell(110, 6, 'DATOS DEL ALUMNO', 1, 0, 'C');
     $pdf->Cell(145, 6, ' ', 1, 0);
     $pdf->SetFillColor(211, 216, 212);
     $pdf->Ln();

     $pdf->Cell(10, 3, 'N', 1, 0);
     $pdf->Cell(40, 3, 'Matricula', 1, 0);
     $pdf->Cell(60, 3, 'Nombre', 1, 0);

     $pdf->Output();
     Exit;
     }
}
