<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include '../modelo/usuario.php';
// comprobacion si existe el usuario en la base de datos

function verificarUsuario($objeto){
    include '../config/db_conexion.php';
    $resultado = $conexion->query('SELECT usuario, password FROM usuarios WHERE usuario="'.$objeto->getUsuario().'" AND password="'.$objeto->getPassword().'"'); 
    $registro=$resultado->fetch(PDO::FETCH_OBJ);
    if($registro!=null){
        //true si existe
        return true;
    }else{
        //false si no existe en la BD
        return false;
    }
}

// funcion para registrar a un usuario en la base de datos
function registrarUsuario($objeto){
    include '../config/db_conexion.php';
    //comprobamos si dicho usuario existe
    //Si existe le mandamos un mensaje de error
    if(verificarUsuario($objeto)){
         ?>
        <script type="text/javascript">
           var error=document.getElementById("error");
            error.innerText='Error usuario repetido';
        </script>
        <?php
    }else{
        //Si no existe el usuario lo introducimos en la base de datos
        $resultado = $conexion->query('INSERT INTO usuarios (`usuario`, `password`, `mail`) VALUES ("'.$objeto->getUsuario().'", "'.$objeto->getPassword().'", "'.$objeto->getMail().'")'); 
        if ($resultado) { 
            //mandamos un mensaje de exito
            ?><script type="text/javascript">
            var error=document.getElementById("error");
            error.innerText='Usuario registrado';
            </script><?php
        }
         
    }
     
}