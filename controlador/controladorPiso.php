<?php 

// comprobamos si presiona el boton

if(isset($_POST['enviar'])){
      //eliminamos el buffer cargado para poder crear el pdf
    ob_end_clean();      
    require '../fpdf/fpdf.php';
        //recogemos las  variables formulario
    $codigoPostal=$_POST['codigoPostal'];
    $nombreProyecto=$_POST['nombreProyecto'];
    $superficie=$_POST['superficie'];    
    $baños=$_POST['baños'];
    $dormitorios=$_POST['dormitorios'];
    $baños=$_POST['baños'];
    $otrasHabitaciones=$_POST['otrasHabitaciones'];
    $pintar;
    if(isset($_POST['pintar'])){
        $pintar="Pintar: si";
    } else{
        $pintar="Pintar: no";
    }

    $suelo;
    if(isset($_POST['suelo'])){
        $suelo="Cambiar suelo: si";
    }else{
        $suelo="Cambiar suelo: no";
    }

    $puertas;

    if(isset($_POST['puertas'])){
        $puertas="Cambiar puertas: si";
    } else{
        $puertas="Cambiar puertas: no";
    }

    $ventanas;
    if(isset($_POST['ventanas'])){
        $ventanas="Cambiar ventanas: si";
    } else{
        $ventanas="Cambiar ventanas: no";
    }

    $largoCocina=$_POST['largoCocina'];
    $anchoCocina=$_POST['anchoCocina'];
    $largoBaño=$_POST['largoBaño'];
    $anchoBaño=$_POST['anchoBaño'];


    $pdf = new FPDF();
    $pdf->AddPage();
    // Arial bold 15
    $pdf->SetFont('Arial','',15);
    // Movernos a la derecha
    $pdf->Cell(80);
    // Título
    //largo de la celda en px, alto de la celda, texto, borde 1 ==true, salto de linea, alineacion
    $pdf->Cell(30,10,'PRESUPUESTO PISO',0,0,'C');
    // Salto de línea
    $pdf->Ln(20);
    $pdf->Cell(50,10,"Datos de la vivienda:",0,0,'L');
    $pdf->Cell(100,10,"Proyecto: $nombreProyecto",0,1,'L');

    $pdf->Cell(60,10,"Codigo Postal: $codigoPostal",0,0,'L');
    $pdf->Cell(60,10,"Superficie: $superficie m2",0,1,'L');
   
 
    $pdf->Cell(50,10,"Dormitorios:$dormitorios",0,0,'L');
    $pdf->Cell(50,10,"Aseos:$baños",0,0,'L');
    $pdf->Cell(50,10,"Otras habitaciones:$otrasHabitaciones",0,0,'L');

    $pdf->Ln(20);

    $pdf->Cell(100,10,"Reforma de acabados:",0,1,'L');
    $pdf->Cell(40,10,"$pintar",0,0,'L');
    $pdf->Cell(50,10,"$suelo",0,0,'L');
    $pdf->Cell(50,10,"$puertas",0,0,'L');
    $pdf->Cell(50,10,"$ventanas",0,0,'L');
    $pdf->Ln(20);

    $pdf->Cell(100,10,"Reforma Cocina:",0,1,'L');
    $pdf->Cell(40,10,"Largo:$largoCocina m",0,0,'L');
    $pdf->Cell(50,10,"Ancho:$anchoCocina m",0,0,'L');

    $pdf->Ln(20);

    $pdf->Cell(100,10,"Reforma Aseo:",0,1,'L');
    $pdf->Cell(40,10,"Largo: $largoBaño m:",0,0,'L');
    $pdf->Cell(50,10,"Ancho: $anchoBaño m",0,0,'L');

    $pdf->Ln(20);


    $presupuesto=5000;
    $pdf->Cell(100,10,"Presupuesto estimado:$presupuesto euros",0,1,'L');
    $pdf->Cell(100,10,"Contacta con asicaher@gmail.com para saber mas",0,1,'L');
    $pdf->Output();
}
?>