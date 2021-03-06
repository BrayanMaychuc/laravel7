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
     $pdf->Cell(156, 6, ' ', 1, 0);
     $pdf->SetFillColor(211, 216, 212);
     $pdf->Ln();

     $pdf->Cell(10, 4, 'N', 1, 0);
     $pdf->Cell(40, 4, 'Matricula', 1, 0);
     $pdf->Cell(60, 4, 'Nombre', 1, 0);

        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 0);
        $pdf->Cell(6, 4, ' ', 1, 1);

        $pdf->SetFont('Arial', '', 10);
     for ($i=1; $i <=40 ; $i++) {
        $pdf->Cell(10, 3, $i, 1, 0);
        $pdf->Cell(40, 3, '20212300 ', 1, 0);
        $pdf->Cell(60, 3, 'BRAYAN ISAI MAY CHUC', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 0);
        $pdf->Cell(6, 3, ' ', 1, 1);
    }
     $pdf->Ln(5);   
     $pdf->SetFont('Arial', 'B', 8);
        $pdf->Line(100, 190, 170, 190);
        $pdf->Cell(145, 5, 'FIRMA DEL DOCENTE', 0, 0, 'R');
        
        // CRONOGRAMA
        $pdf ->AddPage();
        $pdf ->SetFont('Arial', 'B', 14);
        $pdf-> image(public_path(). '/dist/uutc.jpeg', 10, 4, 25);
        $pdf->Ln(2);

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(210,3,utf8_decode('CRONOGRAMA DE ACTIVIDADES'),0,1,'R');
        $pdf->Ln(1);
        $pdf->Cell(215,3,utf8_decode('REPORTE DE ESTADÍA PROFESIONAL'),0,1,'R');
        $pdf->Ln(12);
        $pdf->SetFont('Arial','',7);
        $pdf->Cell(20,3,'CARRERA',0,0,'L');
        $pdf->Cell(100,3,'','B',0,'L');
        $pdf->Cell(20,3,'PERIODO CUATRIMESTRAL',0,0,'L');
        $pdf->Cell(20,3,'',);
        $pdf->Cell(90,3,'','B',1,'R');
        $pdf->Ln(2);
        $pdf->Cell(20,3,'ALUMNO',0,0,'L');
        $pdf->Cell(90,3,'','B',0,'L');
        $pdf->Cell(5,3);
        $pdf->Cell(20,3,utf8_decode('MATRÍCULA'),0,0,'L');
        $pdf->Cell(5,3);
        $pdf->Cell(50,3,'','B',0,'L');
        $pdf->Cell(5,3);
        $pdf->Cell(15,3,'FIRMA',0,0,'L');
        $pdf->Cell(40,3,'','B',1,'L');
        $pdf->Ln(2);
        $pdf->Cell(20,3,'PROYECTO',0,0,'L');
        $pdf->Cell(230,3,'','B',1,'L');
        $pdf->Ln(2);
        $pdf->Cell(20,3,utf8_decode('ASESOR ACADÉMICO'),0,0,'L');
        $pdf->Cell(20,3);
        $pdf->Cell(100,3,'','B',0,'L');
        $pdf->Cell(15,3);
        $pdf->Cell(15,3,'FIRMA',0,0,'L');
        $pdf->Cell(80,3,'','B',1,'L');
        $pdf->Ln(2);
        $pdf->Cell(20,3,'TUTOR EMPRESARIAL',0,0,'L');
        $pdf->Cell(20,3);
        $pdf->Cell(100,3,'','B',0,'L');
        $pdf->Cell(30,3);
        $pdf->Cell(80,3,'','B',1,'L');
        $pdf->Ln();

        // TABLA DE ACTIVIDADES

        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(100,5,'ACTIVIDAD',1,0,'C'); 
        $pdf->SetFont('Arial','B',5);
        $pdf->Cell(10,5,'SEM 1 ',1,0, 'C');
        $pdf->Cell(10,5,'SEM 2 ',1,0,'C');
        $pdf->Cell(10,5,'SEM 3 ',1,0,'C');
        $pdf->Cell(10,5,'SEM 4 ',1,0,'C');
        $pdf->Cell(10,5,'SEM 5 ',1,0,'C');
        $pdf->Cell(10,5,'SEM 6 ',1,0,'C');
        $pdf->Cell(10,5,'SEM 7 ',1,0,'C');
        $pdf->Cell(10,5,'SEM 8 ',1,0,'C');
        $pdf->Cell(10,5,'SEM 9 ',1,0,'C');
        $pdf->Cell(10,5,'SEM 10 ',1,0,'C');
        $pdf->Cell(10,5,'SEM 11 ',1,0,'C');
        $pdf->Cell(10,5,'SEM 12 ',1,0,'C');
        $pdf->Cell(10,5,'SEM 13 ',1,0,'C');
        $pdf->Cell(10,5,'SEM 14 ',1,0,'C');
        $pdf->Cell(10,5,'FECHA ',1,1,'C');
        $pdf->SetFont('Arial','',7);
        $pdf->Cell(100,5,utf8_decode('INDUCCIÓN EN LA EMPRESA'),1,0,'L');
        $pdf->Cell(10,5,'',1,0, 'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,1,'C');
        $pdf->Cell(100,5,utf8_decode('VISITA A LA EMPRESA'),1,0,'L');
        $pdf->Cell(10,5,'',1,0, 'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,1,'C');
        $pdf->Cell(100,5,utf8_decode('DEFINICIÓN DEL ANTEPROYECTO'),1,0,'L');
        $pdf->Cell(10,5,'',1,0, 'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
         $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,1,'C');
        $pdf->Cell(100,5,utf8_decode('ENTREGA DE ANTEPROYECTO PARA AUTORIZACIÓN'),1,0,'L');
        $pdf->Cell(10,5,'',1,0, 'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,1,'C');
        $pdf->Cell(100,5,utf8_decode('RESUMEN'),1,0,'L');
        $pdf->Cell(10,5,'',1,0, 'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,1,'C');
        $pdf->Cell(100,5,utf8_decode('PORTADA'),1,0,'L');
        $pdf->Cell(10,5,'',1,0, 'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,1,'C');
        $pdf->Cell(100,5,utf8_decode('INTRODUCCIÓN'),1,0,'L');
        $pdf->Cell(10,5,'',1,0, 'C');
        $pdf->Cell(10,5,'',1,0,'C');    
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,1,'C');
        $pdf->SetFont('Arial','BU',7);
        $pdf->Cell(100,5,utf8_decode('CAPITULO I CONTEXTO ACADÉMICO'),1,0,'L');
        $pdf->Cell(10,5,'',1,0, 'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,1,'C');
        $pdf->SetFont('Arial','',7);
        $pdf->Cell(100,5,utf8_decode('1.1 PROBLEMÁTICA'),1,0,'L');
        $pdf->Cell(10,5,'',1,0, 'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,0,'C');
        $pdf->Cell(10,5,'',1,1,'C');
        $pdf->Cell(100,5,utf8_decode('1.2 y 1.3 PREGUNTAS DE INVESTIGACIÓN / JUSTIFICACIÓN'),1,0,'L');
    $pdf->Cell(10,5,'',1,0, 'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,1,'C');
    $pdf->Cell(100,5,utf8_decode('1.3. OBJETIVOS / GENERAL Y ESPECÍFICOS'),1,0,'L');
    $pdf->Cell(10,5,'',1,0, 'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,1,'C');
    $pdf->Cell(100,5,utf8_decode('1.4 ALCANCE'),1,0,'L');
    $pdf->Cell(10,5,'',1,0, 'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,1,'C');
    $pdf->Cell(100,5,utf8_decode('1.5 MARCO TEÓRICO'),1,0,'L');
    $pdf->Cell(10,5,'',1,0, 'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,1,'C');
    $pdf->SetFont('Arial','BU',7);
    $pdf->Cell(100,5,utf8_decode('CAPITULO II CONTEXTO LABORAL'),1,0,'L');
    $pdf->Cell(10,5,'',1,0, 'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,1,'C');
    $pdf->Cell(100,5,utf8_decode('CAPITULO III DISEÑO DE LA INVESTIGACIÓN'),1,0,'L');
    $pdf->Cell(10,5,'',1,0, 'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,1,'C');
    $pdf->SetFont('Arial','',7);
    $pdf->Cell(100,5,utf8_decode('3.1 ALCANCE DE LA INVESTIGACIÓN'),1,0,'L');
    $pdf->Cell(10,5,'',1,0, 'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,1,'C');
    $pdf->Cell(100,5,utf8_decode('3.2 METODOLOGÍA'),1,0,'L');
    $pdf->Cell(10,5,'',1,0, 'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,1,'C');
    $pdf->Cell(100,5,utf8_decode('ENTREGA DE REPORTE PARA PRIMERA REVISIÓN POR PAR ACÁDEMICO'),1,0,'L');
    $pdf->Cell(10,5,'',1,0, 'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,1,'C');
    $pdf->SetFont('Arial','BU',7);
    $pdf->Cell(100,5,utf8_decode('CAPITULO IV DESARROLLO DEL PROYECTO'),1,0,'L');
    $pdf->Cell(10,5,'',1,0, 'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,1,'C');
    $pdf->SetFont('Arial','',7);
    $pdf->Cell(100,5,utf8_decode('PRODUCTO GENERADO'),1,0,'L');
    $pdf->Cell(10,5,'',1,0, 'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,1,'C');
    $pdf->Cell(100,5,utf8_decode('4.1 ANÁLISIS DE LOS RESULTADOS'),1,0,'L');
    $pdf->Cell(10,5,'',1,0, 'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,1,'C');
    $pdf->Cell(100,5,utf8_decode('4.2 ESTUDIO DE FACTIBILIDAD'),1,0,'L');
    $pdf->Cell(10,5,'',1,0, 'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,1,'C');
    $pdf->SetFont('Arial','BU',7);
    $pdf->Cell(100,5,utf8_decode('CAPITULO V CONCLUSIONES Y RECOMENDACIONES'),1,0,'L');
    $pdf->Cell(10,5,'',1,0, 'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,1,'C');
    $pdf->SetFont('Arial','',7);
    $pdf->Cell(100,5,utf8_decode('REFERENCIAS BIBLIOGRÁFICAS'),1,0,'L');
    $pdf->Cell(10,5,'',1,0, 'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,1,'C');
    $pdf->Cell(100,5,utf8_decode('ANEXOS'),1,0,'L');
    $pdf->Cell(10,5,'',1,0, 'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,1,'C');
    $pdf->Cell(100,5,utf8_decode('ENTREGA DEL REPORTE DE ESTADÍA A LA DIRECCIÓN ACADÉMICA'),1,0,'L');
    $pdf->Cell(10,5,'',1,0, 'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,0,'C');
    $pdf->Cell(10,5,'',1,1,'C');
    

    
    $pdf->SetFillColor(222, 221, 214);
    
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(130,5,'NOTA COLOREAR  Y COLOCAR LA FECHA DE ENTREGA DE CADA ACTIVIDAD',0,0,'L');
    $pdf->Cell(10,4,'X',1,0,'C');
    $pdf->Cell(30,5,'PROGRAMADO',0,0,'L');
    $pdf->Cell(10,5,'',0,0);
    $pdf->Cell(10,4,'X',1,0,'C',1);
    $pdf->Cell(25,5,'REALIZADO',0,0,'L');
    $pdf->Cell(10,5,'',0,0);
    $pdf->Cell(25,5,'ANEXO 2',0,0,'L');

     $pdf->Output();
     Exit;
     }  
}
