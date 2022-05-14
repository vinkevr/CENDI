<?php

namespace Classes;
require __DIR__ . '/../fpdf/fpdf.php';
use FPDF;

//se mandara a llamar cuando se le de al boton de generar pdf o registrar
class Pdf 
{
    public $dato1;
    public $dato2;
    public $dato3;

 //Al crear el objeto  añadiremos la info que ira en el pdf
public function __construct($dato, $dato2)
{
    $this->dato1 = $dato;
    $this->dato2 = $dato2;
}
  public function crearPdf(){
    $ej = new FPDF();
    $ej->AddPage();
    $ej ->SetFont('helvetica','BUI',30);
    $ej->Cell(40, 10, 'Hola merlin', 'C');
    $ej->Output();
  }
    
}
//prueba namas para ver que funcione
$ej = new Pdf('este es 1', 'este es dos');
$ej->crearPdf();

