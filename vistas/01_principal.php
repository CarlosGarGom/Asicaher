<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Pagina principal</title>
    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../vistas/estilos/barra.css">
    <link rel="stylesheet" href="../vistas/estilos/footer.css">
    <link rel="stylesheet" href="../vistas/estilos/principalestilos.css">

</head>
<body>

    <?php 
    include "../controlador/controladorPerfil.php";  
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
    
    <div id="carouselExampleControls"  class="carousel slide hero position-relative" data-bs-ride="carousel">
        <div class="carousel-inner carrusel">
          <div class="carousel-item active position-relative carrusel">
            <img src="../vistas/imagenes/hero/SalaDeEstar.jpg" class="d-block w-100 h-100" alt="...">
          </div>
          <div class="carousel-item carrusel">
            <img src="../vistas/imagenes/hero/dormitorio.jpg" class="d-block w-100 h-100" alt="...">
          </div>
          <div class="carousel-item carrusel">
            <img src="../vistas/imagenes/hero/cocina.jpg" class="d-block w-100 h-100" alt="...">
          </div>
        </div>
        <!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class=" bg-dark carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class=" bg-dark carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>-->
        <div class="caja-proyectos">
            <a href="../vistas/02_proyectos.php">Proyectos</a>
        </div>
      </div>
       
    </main>

<section class="nuestros-proyectos">
      <h1>Nuestros Proyectos</h1>
    <div id="carouselExampleControls2" class="carousel slide position-relative galeria-imagenes" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <div class="row ">

                    <div class="col p-0">
                      <figure>
                        <img src="../vistas/imagenes/proyectos/casa1.png"class="d-block w-100 h-100" alt="...">
                      <figcaption>
                          <h2>Casa 1</h2>
                          <a href="../vistas/casa1.php">Mas detalles</a>
                      </figcaption>
                    </figure>
                    </div>
                    <div class="col p-0 position-relative">                      
                      <figure>
                      <img src="../vistas/imagenes/proyectos/casa2.png"class="d-block w-100 h-100" alt="...">
                    <figcaption>
                        <h2>Casa 2</h2>
                        <a href="">Mas detalles</a>
                    </figcaption>
                  </figure>
                </div>
                    <div class="col p-0 position-relative">
                      <figure>
                        <img src="../vistas/imagenes/proyectos/casa3.jpg"class="d-block w-100 h-100" alt="...">
                      <figcaption>
                          <h2>Casa 3</h2>
                          <a href="">Mas detalles</a>
                      </figcaption>
                    </figure>
                    </div>
                </div>
            </div>

          <div class="carousel-item">
            
              <div class="row ">

                <div class="col p-0">
                  <figure>
                    <img src="../vistas/imagenes/proyectos/casa2.png"class="d-block w-100 h-100" alt="...">
                  <figcaption>
                      <h2>Casa 2</h2>
                      <a href="">Mas detalles</a>
                  </figcaption>
                </figure>
                </div>
                <div class="col p-0 position-relative">                      
                  <figure>
                  <img src="../vistas/imagenes/proyectos/casa3.jpg"class="d-block w-100 h-100" alt="...">
                <figcaption>
                    <h2>Casa 3</h2>
                    <a href="">Mas detalles</a>
                </figcaption>
              </figure>
            </div>
                <div class="col p-0 position-relative">
                  <figure>
                    <img src="../vistas/imagenes/proyectos/casa4.jpg" class="d-block w-100 h-100" alt="...">
                  <figcaption>
                      <h2>Casa 4</h2>
                      <a href="">Mas detalles</a>
                  </figcaption>
                </figure>
                </div>
            </div>      
          </div>

          <div class="carousel-item">
              <div class="row ">

                <div class="col p-0">
                  <figure>
                    <img src="../vistas/imagenes/proyectos/casa3.jpg"class="d-block w-100 h-100" alt="...">
                  <figcaption>
                      <h2>Casa 3</h2>
                      <a href="">Mas detalles</a>
                  </figcaption>
                </figure>
                </div>
                <div class="col p-0 position-relative">                      
                  <figure>
                  <img src="../vistas/imagenes/proyectos/casa4.jpg"class="d-block w-100 h-100" alt="...">
                <figcaption>
                    <h2>Casa 4</h2>
                    <a href="">Mas detalles</a>
                </figcaption>
              </figure>
            </div>
                <div class="col p-0 position-relative">
                  <figure>
                    <img src="../vistas/imagenes/proyectos/casa5.png"class="d-block w-100 h-100" alt="...">
                  <figcaption>
                      <h2>Casa 5</h2>
                      <a href="">Mas detalles</a>
                  </figcaption>
                </figure>
                </div>
            </div>        
          </div>

   
        
        <div class="carousel-item">
          <div class="row ">

            <div class="col p-0">
              <figure>
                <img src="../vistas/imagenes/proyectos/casa5.png"class="d-block w-100 h-100" alt="...">
              <figcaption>
                  <h2>Casa 5</h2>
                  <a href="">Mas detalles</a>
              </figcaption>
            </figure>
            </div>
            <div class="col p-0 position-relative">                      
              <figure>
              <img src="../vistas/imagenes/proyectos/casa1.png"class="d-block w-100 h-100" alt="...">
            <figcaption>
                <h2>Casa 1</h2>
                <a href="">Mas detalles</a>
            </figcaption>
          </figure>
        </div>
            <div class="col p-0 position-relative">
              <figure>
                <img src="../vistas/imagenes/proyectos/casa2.png"class="d-block w-100 h-100" alt="...">
              <figcaption>
                  <h2>Casa 2</h2>
                  <a href="">Mas detalles</a>
              </figcaption>
            </figure>
            </div>
        </div>        
      </div>

        </div>
        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
          <span class=" bg-dark carousel-control-prev-icon " aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
          <span class=" bg-dark carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
       
      </div>

      <div class="verProyectos">     
        <a href="../vistas/02_proyectos.php">Ver todos los proyectos</a>
        </div>
      </section>
      <a id="presupuesto" name="presupuesto"></a>
    <section class="presupuesto">
     
        <div class="container-fluid">
            <div class="titulo">
                <h2>¿Necesitas un presupuesto?</h2>
            </div>
            <p>Pide un presupuesto para tu obra</p>
            <div class="obras">
 
                <figure>
                  <img src="../vistas/imagenes/presupuesto/casa.jpg" class="d-block m-auto" alt="construir casa">
                  <figcaption>
                      <a href="../vistas/03_1_presCasa.php">Construir una casa</a>
                  </figcaption>
 
                </figure>  
                <figure>
                  <img src="../vistas/imagenes/presupuesto/piso.jpg" class="d-block m-auto" alt="reformar un piso">
                  <figcaption>
                      <a href="../vistas/03_2_presPiso.php">Reformar un piso</a>
                  </figcaption>
                </figure>
        </div>
    </section>

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
        <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(252053)</script> 
        </div>
    </footer>




    

</body>
</body>
</html>