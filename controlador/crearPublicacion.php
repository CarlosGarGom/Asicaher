<?php

      if(isset($_POST['publicar'])){
        //comprobamos si tiene sesion iniciada
        if(isset($_SESSION['usuario'])){

       
        //si llega con el mensaje vacio le manda un aviso de que tiene que rellenarlo
        if(empty($_POST['mensaje'])){
            ?><script type="text/javascript">
                var error=document.getElementById("error");
                error.innerText='Tienes que escribir algo';
                </script><?php
        }else{
            //Si el mensaje tiene contenido
            //Se crea un objeto mensaje con el nombre del usuario que lo ha creado,el mensajey la fecha en la que ha sido creada
            include_once '../controlador/controladorMensaje.php';
            $mensaje=$_POST['mensaje'];
            $fecha= date('Y-m-d');
            $publicacionCreada=new mensaje($_SESSION['usuario'],$mensaje,$fecha,"");
            crearPublicacion($publicacionCreada);      
            
        }
      }else{
        ?><script type="text/javascript">
                var error=document.getElementById("error");
                error.innerText='Tienes que logearte para publicar el mensaje';
                </script><?php
      }
    }
    ?>