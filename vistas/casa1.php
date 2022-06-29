<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
    <link rel="stylesheet" href="../vistas/estilos/barra.css">
    <link rel="stylesheet" href="../vistas/estilos/casa.css">
    <link rel="stylesheet" href="../vistas/estilos/footer.css">
</head>
<body>
  <?php 
     include '../controlador/controladorMensaje.php';   
     include '../controlador/controladorPerfil.php';
      //include_once '../controlador/crearPublicacion.php';  
       
    session_start();
    


  
  ?>
  <main>
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
    
      <div class="position-relative hero">
        <img class="d-block w-100 h-100" src="./imagenes/proyectos/casa1.png">
      </div>
      
    </main>
    <div class="descripcion">
      <h1>Casa 1</h1>
      <p>Casa de unos 50 m<sup>2</sup>, incluye zona de Patio y Garaje, la casa consta con dos plantas</p>
      
    </div>
    <hr>
    <div class="comentarios">
    <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
    
    <div class="input-group mb-4">
    <form action="../vistas/casa1.php" method="POST">
      <div class="grupo flex-nowrap">
    
      <input type="text" class="form-control"  placeholder="Inserte el mensaje" name="mensaje">
      
      <button class="boton btn btn-outline-secondary" name="publicar" type="submit"><img src="./imagenes/send.png"></button>
      </div>
      <div id="error"></div>
      </form>
    </div>
  </div>
    
     <div class="mensajes">
     <?php
     //mostramos los mensajes
          obtenerPublicacion(); 
      ?>
     </div>
        
    </div>

    <?php
     include_once '../controlador/crearPublicacion.php';
    ?>
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