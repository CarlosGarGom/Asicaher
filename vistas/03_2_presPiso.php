<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presupuesto piso</title>
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
    include "../controlador/controladorPiso.php";
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
      <h1>Presupuesto reforma piso</h1>
    </div>
    <div class="box container-fluid">
    
    <form method="POST"   action="../vistas/03_2_presPiso.php">
        <fieldset class="datos">
            <legend>Datos de la vivienda</legend>
        
        <div class="row">
    <div class="form-group form-group-xs  col-sm-4  col-xs-12">
      <label for="validationDefault01">*Codigo Postal</label>
      <input name="codigoPostal" type="number" class="form-control" id="validationDefault01"  required min="10000" max="99999">
    </div>
    <div class="form-group form-group-xs  col-sm-4  col-xs-12 ">
      <label for="nombreProyecto">*Nombre del proyecto</label>
      <input name="nombreProyecto" type="text" class="form-control" id="nombreProyecto" required maxlength="20">

    </div>
    <div class="form-group form-group-xs  col-sm-4  col-xs-12">
      <label for="superficie">*Superficie de la vivienda</label>
      <div class="input-group">

        <input name="superficie" type="number" class="form-control" id="superficie" min="30" max="500" required aria-describedby="inputGroupPrepend">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">m<sup>2</sup></span>
        </div>

      </div>
    </div>
  </div>
  <div class="row">
  <div class="form-group form-group-xs col-sm-4 col-xs-12">
      <label class="form-group-label form-group-label-mandatory"><span class="text-limit">Nº baños </span></label>
      <select name="baños" class="form-control form-control-default-font-size form-select" id="baños">
        
        <option value="0">0</option>
                            
        <option value="1">1</option>
                            
        <option value="2">2</option>
                            
        <option value="3">3</option>

        </select>

    </div>
    <div class="form-group form-group-xs col-sm-4 col-xs-12">
      <label for="form-group-label form-group-label-mandatory">Dormitorios</label>
      <select name="dormitorios" class="form-control form-control-default-font-size form-select" id="dormitorios">
        <option value="0">0</option>
                            
        <option value="1">1</option>
                            
        <option value="2">2</option>
                            
        <option value="3">3</option>

      </select>
    </div>
    <div class="form-group form-group-xs col-sm-4 col-xs-12">
      <label for="otrasHabitaciones">Otras habitaciones</label>
      <select name="otrasHabitaciones" class="form-control form-control-default-font-size form-select" id="otrasHabitaciones">
        <option value="0">0</option>
                            
        <option value="1">1</option>
                            
        <option value="2">2</option>
                            
        <option value="3">3</option>
        
      </select>
    </div>
  </div>
  </fieldset>

    <fieldset>
      <legend>Reforma de acabados</legend>    
      <div class="row">
        <div class="form-group-xs col-sm-3 col-xs-12">
            <div class="checkbox pull-left">
            
              
              <input name="pintar" value="pintar" type="checkbox" class="form-check-input" id="pintar">
              <label for="pintar">Pintar</label>
            </div>
     
        </div>
    <div class="form-group-xs col-sm-3 col-xs-12">
     
      <div class="checkbox pull-left">
        <input name="suelo" value="suelo" type="checkbox" class="form-check-input" id="suelo" >
        <label for="suelo">Cambiar el suelo</label>
      </div>
      
    </div>
    <div class="form-group-xs col-sm-3 col-xs-12">
      <div class="checkbox pull-left">
        <input name="puertas" value="puertas" type="checkbox" class="form-check-input" id="puertas">
        <label for="puertas">Cambiar puertas</label>
      </div>
      
        
    </div>
    <div class="form-group-xs col-sm-3 col-xs-12">
      <div class="checkbox pull-left">
      <input name="ventanas" value="ventanas" type="checkbox" class="form-check-input" id="vventanas">
      <label for="ventanas">Cambiar Ventanas</label>
      </div>
      
        
    </div>
  </div>
    </fieldset>
    <fieldset>
       <legend>Reforma Cocina</legend>
       <div class="row">
    <div class="form-group form-group-xs col-sm-4 col-xs-12">
      <label for="largoCocina">*Largo Cocina(m)</label>
        <input name="largoCocina" step="any" type="number" class="form-control" id="largoCocina" required min="0" max="3">
     </div>
    <div class="form-group form-group-xs col-sm-4 col-xs-12">
      <label for="anchoCocina">*Ancho cocina(m)</label>
        <input name="anchoCocina" step="any" type="number" class="form-control" id="anchoCocina"required min="0" max="3">
        <div class="invalid-feedback"  name="error">
        
        </div>
    </div>
  </div>
    </fieldset>
    <fieldset>
       <legend>Reforma de Baños</legend>
       <div class="row">
    <div class="form-group form-group-xs col-sm-4 col-xs-12">
        <label for="largoBaño">*Largo Baño(m)</label>
        <input name="largoBaño" step="any" type="number" class="form-control" id="largoBaño"required  min="0" max="3">
    </div>
    <div class="form-group form-group-xs col-sm-4 col-xs-12">
        <label for="anchoBaño">*Ancho Baño(m)</label>
        <input name="anchoBaño" step="any" type="number" class="form-control" id="anchoBaño"required min="0" max="3">
    </div>
  </div>
    </fieldset>
    <div class="d-grid gap-2 col-6 mx-auto">
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
       
    </footer>
</body>
</html>