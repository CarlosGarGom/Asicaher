<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>conexion</title>
    </head>
    <body>
        <?php
        //Conexion con la base de datos DWES
  
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=redsocial', 'root', '');
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
         ?>
    </body>
</html>