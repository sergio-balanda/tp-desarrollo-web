<?php
    include 'plantillaPdf.php';
    require_once '../conexion/control.php';
   
    $obj = new controlDB();
    $datos=$obj->consultar("select * from usuario");
    
    $pdf=new PDF();
    $pdf->AliasNbPages();//alias de pagina para poder usar nb
    $pdf->AddPage();
    $pdf->setTitle('Logistica');
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFillColor(232,232,232);
    $pdf->Cell(40,6,'Nombre',1,0,'C',1);//longitud,alto,titulo,border,salto,alineado
    $pdf->Cell(40,6,'Documento',1,0,'C',1);
    $pdf->Cell(40,6,'Numero',1,0,'C',1);
    $pdf->Cell(40,6,'rol',1,1,'C',1);
    
    
    $pdf->SetFont('Arial','',10);
    
    foreach($datos as $a){
        $pdf->Cell(40,6,$a['nombre'],1,0,'C');
        $pdf->Cell(40,6,$a['tipo_doc'],1,0,'C');
        $pdf->Cell(40,6,$a['num_doc'],1,0,'C');
        $pdf->Cell(40,6,utf8_decode($a['rol']),1,1,'C');
    }
   

    $pdf->Output('I','Logistica.pdf');

?><a href=""></a>
