<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../vistas/estilos/barra.css">
 

    <link rel="stylesheet" href="../vistas/estilos/proyectos.css">
    <link rel="stylesheet" href="../vistas/estilos/footer.css">
</head>
<body>
<?php 
    include "../controlador/controladorPerfil.php";  
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
    <div class="hero">
        <h1>PROYECTOS</h1>
    </div>
    <div class="galeria-imagenes container-fluid p-0">
        <div class="row row-cols-4 m-0 p-0">
            <div class="col p-0">
                <figure>
                    <a href="../vistas/casa1.php"><img src="imagenes/proyectos/casa1.png" class="d-block h-100 w-100"></a>
                    <figcaption>
                        <h2>Casa 1</h2>
                        
                    </figcaption>
                </figure>
            </div>
            <div class="col p-0">
                
                <figure>
                    <a href="../vistas/casa1.php"><img src="imagenes/proyectos/casa2.png" class="d-block h-100 w-100"></a>
                    <figcaption>
                        <h2>Casa 2</h2>
                    </figcaption>
                </figure>
                
            </div>
            <div class="col p-0">
                <figure>
                    <a href="../vistas/casa1.php"><img src="imagenes/proyectos/casa3.jpg" class="d-block h-100 w-100"></a>
                    <figcaption>
                        <h2>Peluqueria LeSalon29</h2>
                    </figcaption>
                </figure>
            </div>
            <div class="col p-0">
                <figure>
                    <a href="../vistas/casa1.php"><img src="imagenes/proyectos/casa4.jpg" class="d-block h-100 w-100"></a>
                    <figcaption>
                        <h2>Casa 4</h2>
                    </figcaption>
                </figure>
            </div>
            <div class="col p-0">
                <figure>
                    <a href="../vistas/casa1.php"><img src="imagenes/proyectos/casa5.png" class="d-block h-100 w-100"></a>
                    <figcaption>
                        <h2>Casa 5</h2>
                    </figcaption>
                </figure>
            </div>

            <div class="col p-0">
                <figure>
                    <a href="../vistas/casa1.php"><img src="imagenes/proyectos/casa6.jpg" class="d-block h-100 w-100"></a>
                    <figcaption>
                        <h2>Casa 6</h2>
                    </figcaption>
                </figure>
            </div>

            <div class="col p-0">
                <figure>
                    <a href="../vistas/casa1.php"><img src="imagenes/proyectos/casa7.jpg" class="d-block h-100 w-100"></a>
                    <figcaption>
                        <h2>Casa 7</h2>
                    </figcaption>
                </figure>
            </div>

            <div class="col p-0">
                <figure>
                    <a href="../vistas/casa1.php"><img src="imagenes/proyectos/casa8.jpg" class="d-block h-100 w-100"></a>
                    <figcaption>
                        <h2>Casa 8</h2>
                    </figcaption>
                </figure>
            </div>


        </div> 

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