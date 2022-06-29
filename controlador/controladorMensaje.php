<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include "../modelo/mensaje.php";
//Funcion que mete una publicacion a la base de datos
function crearPublicacion($mensaje){
    include "../config/db_conexion.php";
    
    $resultado = $conexion->query('INSERT INTO mensajes (`usuario`, `mensaje`, `fecha`) VALUES ("'.$mensaje->getUsuario().'", "'.$mensaje->getMensaje().'", "'.$mensaje->getFecha().'")'); 
    if ($resultado) { 
         ?><script type="text/javascript">
            var error=document.getElementById("error");
            error.innerText='Publicación creada';
            </script><?php
    }   
     
}
//Funcion que recoge todas las publicaciones
function obtenerPublicacion(){
    include "../config/db_conexion.php";
    //Ordenamos de mas reciente a más antiguo
    $resultado = $conexion->query('SELECT * FROM mensajes ORDER BY codigo DESC'); 
    $publicaciones = $resultado->fetch(); 
 
        while ($publicaciones != null) {
            
            $publicacion = new mensaje($publicaciones['usuario'], $publicaciones['mensaje'], $publicaciones['fecha'], $publicaciones['codigo']);
            
            echo "<h4><strong>".$publicacion->getUsuario()."</strong> - ".$publicaciones['fecha']."</h4>";
            echo "<p>".$publicacion->getMensaje()."</p>";
            echo "<hr>";
            $publicaciones = $resultado->fetch(); 
        }    
}