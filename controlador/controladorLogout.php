<?php
session_start();
//comprobamos si tiene sesion activa el usuario
if(isset($_SESSION['usuario'])){
    //Si tiene la sesion activa destruye la sesion y le devuelve a la página principal
    session_destroy();
    header("Location: ../vistas/01_principal.php");
}
?>