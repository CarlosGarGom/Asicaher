<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presupuesto casa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../vistas/estilos/barra.css">
    <link rel="stylesheet" href="../vistas/estilos/footer.css">
    <link rel="stylesheet" href="../vistas/estilos/presupuestoPiso.css">

</head>
<body>
  
<?php 
    include "../controlador/controladorPerfil.php";  
    include "../controlador/controladorCasa.php";
    // "../controlador/controladorPiso.php";
?>
<header>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="../vistas/01_principal.php"><h1>Asicaher</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="justify-content-end collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../vistas/01_principal.php">Inicio</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="../vistas/02_proyectos.php">Proyectos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://localhost:3000/xampp/htdocs/PROYECTOFG/vistas/01_principal.php#presupuesto">Presupuesto</a>
        </li>
        <li class="nav-item dropdown">
    
        <?php 
        session_start();
        if(isset($_SESSION['usuario'])){
            $datosUsuario = verDatos($_SESSION['usuario']);
            echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$datosUsuario['usuario'].'</a>';
            echo'<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="../controlador/controladorLogout.php">Salir</a>
           
            
          </div>';
        }else{
            echo"<a class='nav-link' href='../vistas/05_login.php'> Log-in </a>";
        } ?>
    
        </li>
        </ul>
    </div>
    </div>
</nav>


</header>
<!--
    action="../controlador/controladorPiso.php"
    action="../vistas/03_2_presPiso.php"
    -->

    <div class="hero">
      <h1>Presupuesto construccion casa</h1>
    </div>
    <div class="box container-fluid">
    
    <form method="POST"   action="../vistas/03_1_presCasa.php">
        <fieldset class="datos">
            <legend>Datos de la vivienda</legend>
    
        <div class="row ">
    <div class="form-group form-group-xs  col-sm-4  col-xs-12">
      <label for="postal">*Codigo Postal</label>
      <input name="codigoPostal" type="number" class="form-control" id="postal"  required min="10000" max="99999">
    </div>
    <div class="form-group form-group-xs  col-sm-4  col-xs-12">
      <label for="nombre">*Nombre del proyecto</label>
      <input name="nombreProyecto" type="text" class="form-control" id="nombre"  maxlength="20" required>

    </div>
    <div class="form-group form-group-xs  col-sm-4  col-xs-12  ">
      <label for="areaCasa">*Área casa</label>
      <div class="input-group">

        <input name="area" type="number" class="form-control" id="areaCasa" min="50" max="100" required  aria-describedby="inputGroupPrepend">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">m<sup>2</sup></span>
        </div>
      </div>
    </div>

  </div>
  <div class="row">
      
  <div class="form-group form-group-xs  col-sm-6  col-xs-12">
      <label for="largoParcela">*Largo Parcela</label>
      <div class="input-group">

        <input name="largoParcela" type="number" class="form-control" id="largoParcela" min="30" max="500"  required aria-describedby="inputGroupPrepend">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">m</span>
        </div>

      </div>
    </div>
    <div class="form-group form-group-xs  col-sm-6  col-xs-12">
      <label for="anchoParcela">*Ancho Parcela</label>
      <div class="input-group">

        <input name="anchoParcela" type="number" class="form-control" id="anchoParcela" min="30" max="500" required aria-describedby="inputGroupPrepend">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">m</span>
        </div>

      </div>
    </div>
    <div class="form-group form-group-xs  col-sm-6  col-xs-12">
      <label for="numPlantas">Numero de plantas</label>
      <select name="plantas" class="form-select plantas" id="numPlantas" aria-label="select ">
       
        <option selected value="1">1</option>
        <option value="2">2</option>
        
    </select>

     </div>
     <div class="form-group form-group-xs  col-sm-6  col-xs-12 ">
     <label for="sot" class="d-block">Construir sotano</label>
      
      <input name="sotano" value="sotano" type="checkbox" class="form-check-input d-block text-center ms-5 check-sotano" id="sot" >
    </div>
    </div>
  </fieldset>

    <fieldset>
      <legend>Dormitorios/Habitaciones</legend>   
        <div class="row">
        <div class="col-xs-12 subform-wrapper sotano">
                <div class="col-sm-11 col-xs-10 plr0 subform-form-title">
                    <span class="subform-title-element subform-title-text ms-5"><b>Sotano </b></span>
                </div>
                <div class="row">
                
                <div class="form-group form-group-xs col-sm-4 col-xs-12  ">
                    
                        <label class="form-group-label form-group-label-mandatory" title="Nº habitaciones">
                            <span class="text-limit">Nº habitaciones </span>
                            
                        </label>
            
                        <select name="habitacionesSotano" class="form-control form-control-default-font-size form-select" id="id_2-ground_room">
                            <option value="0">0</option>
                            
                            <option value="1">1</option>
                            
                            <option value="2">2</option>
                            
                            <option value="3">3</option>
                            
                            <option value="4">4</option>
                            
                            <option value="5">5</option>
                
                        </select>
            
                </div>

                <div class="form-group form-group-xs col-sm-4 col-xs-12  ">
                    
                        <label class="form-group-label form-group-label-mandatory" title="Nº Baños">
                            <span class="text-limit">Nº Baños </span>
                            
                        </label>

                        <select name="bañosSotano" class="form-control form-control-default-font-size form-select" id="id_2-ground_bathroom">
                            <option value="0">0</option>
                            
                            <option value="1">1</option>
                            
                            <option value="2">2</option>
                            
                            <option value="3">3</option>
                            
                            <option value="4">4</option>
                            
                            <option value="5">5</option>
                
                        </select>                
                </div>
            
            
            </div>
            <div class="row">
                    <div class="form-group-xs col-sm-4 col-xs-12">
	                    <div class="checkbox pull-left">
                            <input type="checkbox" name="salaJuegos" class="calculator-checkbox" id="id_2-ground_kitchen">
                            <label for="salaJuegos" class="calculator-checkbox-label">Sala de juegos</label>
	                    </div>	
                    </div>
                    <div class="form-group-xs col-sm-4 col-xs-12">
	                    <div class="checkbox pull-left">
                            <input type="checkbox" name="bodega" class="calculator-checkbox" id="id_2-salon">
                            <label for="id_2-salon" class="calculator-checkbox-label">Bodega</label>
	                    </div>	
                    </div>
                    <div class="form-group-xs col-sm-4 col-xs-12 s-garaje">
	                    <div class="checkbox pull-left">
                            <input type="checkbox" name="sotanoGaraje" class="calculator-checkbox sot-garaje" id="id_2-garaje">
                            <label for="id_2-garaje" class="calculator-checkbox-label sot-garaje">Garaje</label>
	                    </div>	
                    </div>
                </div> 
            </div>

            <div class="col-xs-12 subform-wrapper planta1">
                <div class="col-sm-11 col-xs-10 plr0 subform-form-title">
                    <span class="subform-title-element subform-title-text ms-5"><b>Planta baja </b></span>
                </div>
                <div>
                <div class="row">
                
                    <div class="form-group form-group-xs col-sm-4 col-xs-12  ">
                        
                            <label class="form-group-label form-group-label-mandatory" title="Nº habitaciones">
                                <span class="text-limit">Nº habitaciones </span>
                                
                            </label>
                
                            <select name="habitacionesBaja" class="form-control form-control-default-font-size form-select" id="id_2-ground_room">
                                <option value="0">0</option>
                                
                                <option value="1">1</option>
                                
                                <option value="2">2</option>
                                
                                <option value="3">3</option>
                                
                                <option value="4">4</option>
                                
                                <option value="5">5</option>
                    
                            </select>
                
                    </div>

                    <div class="form-group form-group-xs col-sm-4 col-xs-12  ">
                        
                            <label class="form-group-label form-group-label-mandatory" title="Nº Baños">
                                <span class="text-limit">Nº Baños </span>
                                
                            </label>

                            <select name="bañosBaja" class="form-control form-control-default-font-size form-select" id="id_2-ground_bathroom">
                                <option value="0">0</option>
                                
                                <option value="1">1</option>
                                
                                <option value="2">2</option>
                                
                                <option value="3">3</option>
                                
                                <option value="4">4</option>
                                
                                <option value="5">5</option>
                    
                            </select>                
                    </div>
                
                
                </div>
                <div class="row">
                    <div class="form-group form-group-xs col-sm-4 col-xs-12">
	                    <div class="checkbox pull-left">
                            <input type="checkbox" name="cocinaBaja" class="calculator-checkbox" id="cocinaBaja">
                            <label for="cocinaBaja" class="calculator-checkbox-label">Cocina</label>
	                    </div>	
                    </div>
                    <div class="form-group form-group-xs col-sm-4 col-xs-12">
	                    <div class="checkbox pull-left">
                            <input type="checkbox" name="salon" class="calculator-checkbox" id="salon">
                            <label for="salon" class="calculator-checkbox-label">Salon</label>
	                    </div>	
                    </div>
                    <div class="form-group form-group-xs col-sm-4 col-xs-12 b-garaje">
	                    <div class="checkbox pull-left">
                            <input type="checkbox" name="garajeBaja" class="calculator-checkbox baja-garaje" id="garajeBaja">
                            <label for="garajeBaja" class="calculator-checkbox-label">Garaje</label>
	                    </div>	
                    </div>
                </div>   

                </div>
           
                        
            </div>
            <div class="col-xs-12 subform-wrapper planta2">
                <div class="col-sm-11 col-xs-10 plr0 subform-form-title">
                    <span class="subform-title-element subform-title-text ms-5"><b>Planta 2 </b></span>
                </div>
                <div class="row">
                
                <div class="form-group form-group-xs col-sm-4 col-xs-12  ">
                    
                        <label class="form-group-label form-group-label-mandatory" title="Nº habitaciones">
                            <span class="text-limit">Nº habitaciones </span>
                            
                        </label>
            
                        <select name="habitaciones2" class="form-control form-control-default-font-size form-select" id="id_2-ground_room">
                            <option value="0">0</option>
                            
                            <option value="1">1</option>
                            
                            <option value="2">2</option>
                            
                            <option value="3">3</option>
                            
                            <option value="4">4</option>
                            
                            <option value="5">5</option>
                
                        </select>
            
                </div>

                <div class="form-group form-group-xs col-sm-4 col-xs-12  ">
                    
                        <label class="form-group-label form-group-label-mandatory" title="Nº Baños">
                            <span class="text-limit">Nº Baños </span>
                            
                        </label>

                        <select name="baños2" class="form-control form-control-default-font-size form-select" id="id_2-ground_bathroom">
                            <option value="0">0</option>
                            
                            <option value="1">1</option>
                            
                            <option value="2">2</option>
                            
                            <option value="3">3</option>
                            
                            <option value="4">4</option>
                            
                            <option value="5">5</option>
                
                        </select>                
                </div>
            
            
            </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
       <legend>Extras</legend>
       <div class="row">
          <div class="form-group-xs col-sm-4 col-xs-12">
	            <div class="checkbox pull-left">
                <input type="checkbox" name="piscina" class="calculator-checkbox" id="piscina">
                  <label for="piscina" class="calculator-checkbox-label">Piscina</label>
	            </div>	
          </div>
                  <div class="form-group-xs col-sm-4 col-xs-12">
	                    <div class="checkbox pull-left">
                            <input type="checkbox" name="aireAcondicionado" class="calculator-checkbox" id="aireAcondicionado">
                            <label for="aireAcondicionado" class="calculator-checkbox-label">Aire acondicionado</label>
	                    </div>	
                    </div>
                    <div class="form-group-xs col-sm-4 col-xs-12">
	                    <div class="checkbox pull-left">
                            <input type="checkbox" name="calefaccion" class="calculator-checkbox " id="calefaccion">
                            <label for="calefaccion" class="calculator-checkbox-label">Calefaccion</label>
	                    </div>	
            </div>
          </div>       
    </fieldset>
    <div class="d-grid gap-2 col-6 mx-auto mt-3">
    <button name="enviar"class="btn btn-primary" type="submit">Enviar</button>
    </div>
    </form>
    </div>

        

    <footer class="footer">
        <div>
            <nav>
                
            
                <ol>
                    <li>
                        <p><a class="inicio" href="../vistas/01_principal.html">Inicio</a></p>
                    </li>
                    <li>

                        <p><a class="proyectos" href="../vistas/02_proyectos.html">Proyectos</a></p>

                    </li>
                    
                    <li>

                        <p><a class="nav-link" href="http://localhost:3000/xampp/htdocs/PROYECTOFG/vistas/01_principal.php#presupuesto">Presupuesto</a></p>

                    </li>
                </ol>
            </nav>
        </div>
        <div class="container">
       
    </div>
    </footer>
    <script>
      //añadimos las clases pertinentes a cada div
      $(document).ready(function(){
        $('.planta2').addClass('ocultar');
        $('.sotano').addClass('ocultar');
        $('.s-garaje').addClass('mostrar');
        $('.b-garaje').addClass('mostrar');
      });
      //Comprobamos si el checkbox del sotano esta activado
       $('.check-sotano').on('change', function(e){
        if (this.checked) {
           // console.log('Checkbox ' + $(e.currentTarget).val() + ' checked');
           //Si esta activado mostramos el div del sotano
            $('.sotano').removeClass('ocultar');
            $('.sotano').addClass('mostrar');
            
            
        } else {
            //console.log('Checkbox ' + $(e.currentTarget).val() + ' unchecked');
            //Si esta desactivado ocultamos el div del sotano
            $('.sotano').removeClass('mostrar');
            $('.sotano').addClass('ocultar');
        }
      });

      //garaje sotano
      $('.sot-garaje').on('change', function(e){
        if (this.checked) {
          //Si el checkbox de garaje en el sotano esta activado, el checkbox del garaje en la planta baja desaparece
            //console.log('Checkbox ' + $(e.currentTarget).val() + ' checked');
            $('.b-garaje').removeClass('mostrar');
            $('.b-garaje').addClass('ocultar');
            
        } else {
          //Si el checkbox de garaje en el sotano esta desactivado, el checkbox del garaje en la planta baja aparece
           // console.log('Checkbox ' + $(e.currentTarget).val() + ' unchecked');
            $('.b-garaje').removeClass('ocultar');
            $('.b-garaje').addClass('mostrar');
            
        }
      });
      //garaje planta baja
      $('.baja-garaje').on('change', function(e){
        if (this.checked) {
          //Si el checkbox de garaje en la planta baja esta desactivado, el checkbox del sotano en la planta baja desaparece
            console.log('Checkbox ' + $(e.currentTarget).val() + ' checked');
            $('.s-garaje').removeClass('mostrar');
            $('.s-garaje').addClass('ocultar');
        } else {
          //Si el checkbox de garaje en el sotano esta desactivado, el checkbox del sotano en la planta baja aparece
            console.log('Checkbox ' + $(e.currentTarget).val() + ' unchecked');
            
            $('.s-garaje').removeClass('ocultar');
            $('.check-sotano').addClass('mostrar');
        }
      });



      //planta 2
      $(document).on('change', '.plantas', function(event) {
      //console.log($(".plantas option:selected").text());
      //Si el numero de plantas son 2 aparece otro div
        if($(".plantas option:selected").text()==2){
          $('.planta2').removeClass('ocultar');
          $('.planta2').addClass('mostrar');
        }else{
          $('.planta2').removeClass('mostrar');
          $('.planta2').addClass('ocultar');
        }
      });
    </script>
</body>
</html>