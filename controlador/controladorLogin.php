<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include "../controlador/controladorUsuario.php";
include "../vistas/05_login.php";
//Si pulsa el boton de entrar
if(isset($_POST['entrar'])){
    //Comprobamos si hay algun campo vacio
    if(empty($_POST["usuario"]) || empty($_POST["password"])){
        //Si hay algun campo vacio le mandamos un mensaje
        ?><script type="text/javascript">
        var error=document.getElementById("error");
        error.innerText='Campos vacios';
        </script><?php        
    }else{
        //Recogemos los datos
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        $usuarioNuevo=new Usuario($usuario,$password,"");
        //Comprobamos que existe en la base de datos
        if(!verificarUsuario($usuarioNuevo)){
            ?><script type="text/javascript">
            var error=document.getElementById("error");
            error.innerText='Error datos incorrectos';
            </script><?php
        }else{
            //Si todo es correcto empezamos la sesion y la guardamos con el nombre del usuario
            //Y le redirigimos a la pagina principal.
            session_start();
            $_SESSION["usuario"] = $usuario;
            echo "<script>window.location.href='http://localhost:3000/xampp/htdocs/PROYECTOFG/vistas/01_principal.php';</script>";
             exit;

        }
    }

}
 