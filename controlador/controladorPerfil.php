<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
//Funcion para ver los datos del usuario
function verDatos($usuario){
    include '../config/db_conexion.php';
    $resultado = $conexion->query('SELECT usuario, password, mail FROM usuarios WHERE usuario="'.$usuario.'"'); 
    $registro = $resultado->fetch(); 
    if($registro!=null){
        return $registro;
    }
        
}

//Funcion para ver las publicaciones que ha publicado el usuario
function verPublicaciones($usuario){
    include '../config/db_conexion.php';
    $resultado = $conexion->query('SELECT * FROM mensajes WHERE usuario="'.$usuario.'" ORDER BY fecha DESC'); 
    $registro = $resultado->fetch(); 
    while($registro!=null){
        echo "<p>".$registro['fecha']."</p>";
        echo "<p>".$registro['mensaje']."</p>";
        $registro = $resultado->fetch(); 
    }
}
