<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include "../controlador/controladorUsuario.php";
include "../vistas/04_Registro.php";
if (isset($_POST["boton"])) {
    //Comprobamos si hay algun campo vacío y le mandamos un mensaje
    if (empty($_POST["usuario"]) ||  empty($_POST["password1"]) || empty($_POST["password2"] || empty($_POST["mail"]))) {
        ?><script type="text/javascript">
        var error=document.getElementById("error");
        error.innerText='Hay algun campo vacio';
        </script><?php
        
    }else{
        //recogemos los datos
        $usuario = $_POST["usuario"];
        $password1 = $_POST["password1"];
        $password2 = $_POST["password2"];
        $mail=$_POST['mail']; 
        //mandamos un aviso si las contraseñas son distintas
        if($password1!=$password2){
        ?><script type="text/javascript">
        var error=document.getElementById("error");
        error.innerText='Las contraseñas no coinciden';
        </script><?php
        }else{
            //creamos el usuario y comprobamos que existe en la base de datos para no tener repetidos
            $usuarioNuevo=new usuario($usuario, $password1, $mail);
            if(verificarUsuario($usuarioNuevo)){
                ?><script type="text/javascript">
                var error=document.getElementById("error");
                error.innerText='Usuario repetido';
                </script><?php
                }else{
                    registrarUsuario($usuarioNuevo);       
                }              
        }
    }
}