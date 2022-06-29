<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../vistas/estilos/footer.css">
    <link rel="stylesheet" href="../vistas/estilos/barra.css">
    <style>
      header{
    height: 75px;
    }
    </style>
</head>
<body>
    <?php 
    
    include "../controlador/controladorPerfil.php";
    //include "../controlador/controladorLogin.php";
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

    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
      
              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
      
                <form style="width: 23rem;" action="../controlador/controladorLogin.php" method="post">
      
                  <h1 class="fw-900 mb-3 pb-3" style="letter-spacing: 1px;">Log in</h1>
      
                  <div class="form-outline mb-4">
                    <input name="usuario"  id="form2Example18" class="form-control form-control-lg" />
                    <label  class="form-label" for="form2Example18">Usuario</label>
                  </div>
      
                  <div class="form-outline mb-4">
                    <input name="password" type="password" id="form2Example28" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example28">Contraseña</label>
                  </div>
                  <div class="pt-1 mb-4">
                  <p id="error" style="color:red"></p>
                  </div>
                  <div class="pt-1 mb-4">
                    <button name="entrar" class="btn btn-info btn-lg btn-block" type="submit">Login</button>
                  </div>
      
                  <p>¿No tienes cuenta? <a href="../vistas/04_registro.php" class="link-info">Registrate aquí</a></p>
                 
                </form>
      
              </div>
      
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <img src="../vistas/imagenes/proyectos/fondo.jpg"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
          </div>
        </div>
    </section>
    <?php 
    
    
    
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