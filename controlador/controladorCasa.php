<?php


// comprobamos si presiona el boton
if(isset($_POST['enviar'])){
    //eliminamos el buffer cargado para poder crear el pdf
    ob_end_clean();      
    require '../fpdf/fpdf.php';
    //recogemos las  variables formulario
    $codigoPostal=$_POST['codigoPostal'];
    $nombreProyecto=$_POST['nombreProyecto'];
    $areaCasa=$_POST['area'];
    $largoParcela=$_POST['largoParcela'];
    $anchoParcela=$_POST['anchoParcela'];
    $numPlantas=$_POST['plantas'];
    $sotano;
    $sotanoGaraje;
    $garajeBaja;
    if(isset($_POST['sotano'])){
        $sotano="Si";
        if(isset($_POST['sotanoGaraje'])){
            $sotanoGaraje="Si";
            
        }else{
            $sotanoGaraje="No";
           
        }
        if(isset($_POST['garajeBaja'])){
            $garajeBaja="Si";
        }else{
            $garajeBaja="No";
        }
    } else{
        $sotano="No";
        $garajeBaja="No";
        $sotanoGaraje="No";
    }
    $habitacionesSotano=$_POST['habitacionesSotano'];
    $bañosSotano=$_POST['bañosSotano'];
    $salaJuegos;
    if(isset($_POST['salaJuegos'])){
        $salaJuegos="Si";
    } else{
        $salaJuegos="No";
    }
    $bodega;
    if(isset($_POST['bodega'])){
        $bodega="Sí";
    } else{
        $bodega="No";
    }
    
    $habitacionesBaja=$_POST['habitacionesBaja'];
    $bañosBaja=$_POST['bañosBaja'];
    $cocinaBaja;
    if(isset($_POST['cocinaBaja'])){
        $cocinaBaja="Si";
    } else{
        $cocinaBaja="No";
    }
    $salon;
    if(isset($_POST['salon'])){
        $salon="Si";
    } else{
        $salon="No";
    }
    $habitaciones2=$_POST['habitaciones2'];
    $baños2=$_POST['baños2'];
    $piscina;
    if(isset($_POST['piscina'])){
        $piscina="Si";
    } else{
        $piscina="No";
    }
    $aireAcondicionado;
    if(isset($_POST['aireAcondicionado'])){
        $aireAcondicionado="Si";
    } else{
        $aireAcondicionado="No";
    }
    $calefaccion;
    if(isset($_POST['calefaccion'])){
        $calefaccion="Sí";
    } else{
        $calefaccion="No";
    }

    //Creamos el PDF

    $pdf = new FPDF();
    $pdf->AddPage();
    // Arial bold 15
    $pdf->SetFont('Arial','',15);
    // Movernos a la derecha
    $pdf->Cell(80);
    // Título
    //largo de la celda en px, alto de la celda, texto, borde 1 ==true, salto de linea, alineacion
    $pdf->Cell(30,10,'PRESUPUESTO CASA',0,0,'C');
    // Salto de línea
    $pdf->Ln(20);
    $pdf->Cell(70,10,"Codigo Postal: $codigoPostal",0,0,'L');
    $pdf->Cell(100,10,"Proyecto: $nombreProyecto",0,1,'L');
    $pdf->Cell(100,10,"Parcela:",0,1,'L');
    $pdf->Cell(50,10,"Largo:$largoParcela m",0,0,'L');
    $pdf->Cell(50,10,"Ancho:$anchoParcela m",0,0,'L');
    $pdf->Cell(70,10,"Area de la casa:$areaCasa m2",0,1,'L');
    $pdf->Cell(70,10,"Num. de plantas:$numPlantas",0,0,'L');
    $pdf->Cell(50,10,"Sotano:$sotano",0,0,'L');
    if($sotano="Si"){
        if($sotanoGaraje="Si"){
            $pdf->Cell(50,10,"Garaje: $garajeBaja",0,0,'L');
        }
    }
        $pdf->Ln(20);

    if($sotano="Si"){
        $pdf->Cell(100,10,"Sotano:",0,1,'L');
        $pdf->Cell(50,10,"Habitaciones:$habitacionesSotano",0,0,'L');
        $pdf->Cell(50,10,"Aseos:$bañosSotano",0,0,'L');
        $pdf->Cell(50,10,"Sala de juegos:$salaJuegos",0,0,'L');
        $pdf->Cell(50,10,"Bodega:$bodega",0,0,'L');

        $pdf->Ln(20);
    }

    $pdf->Cell(100,10,"Planta baja:",0,1,'L');
    $pdf->Cell(50,10,"Habitaciones:$habitacionesBaja",0,0,'L');
    $pdf->Cell(50,10,"Aseos:$bañosBaja",0,0,'L');
    $pdf->Cell(50,10,"Cocina:$cocinaBaja",0,0,'L');
    $pdf->Cell(50,10,"Salon:$salon",0,0,'L');

    $pdf->Ln(20);
    if($numPlantas==2){
        $pdf->Cell(100,10,"Planta alta:",0,1,'L');
        $pdf->Cell(50,10,"Habitaciones:$habitaciones2",0,0,'L');
        $pdf->Cell(50,10,"Aseos:$baños2",0,0,'L');
        $pdf->Ln(20);
    }
    $pdf->Cell(100,10,"Extras:",0,1,'L');
    $pdf->Cell(50,10,"Piscina:$piscina",0,0,'L');
    $pdf->Cell(60,10,"Aire acondicionado:$aireAcondicionado",0,0,'L');
    $pdf->Cell(50,10,"Calefaccion:$calefaccion",0,0,'L');

    $pdf->Ln(20);
    $presupuesto=10000;
    $pdf->Cell(100,10,"Presupuesto estimado:$presupuesto euros",0,1,'L');
    $pdf->Cell(100,10,"Contacta con asicaher@gmail.com para saber mas",0,1,'L');
    $pdf->Output();

}

?>