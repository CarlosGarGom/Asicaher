<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class mensaje{
    protected $usuario;
    protected $mensaje;
    protected $fecha;
    protected $codigo;
    
    function __construct($usuario, $mensaje, $fecha, $codigo) {
        $this->usuario = $usuario;
        $this->mensaje = $mensaje;
        $this->fecha = $fecha;
        $this->codigo = $codigo;
    }    
    public function getUsuario() {
        return $this->usuario;
    }

    public function getMensaje() {
        return $this->mensaje;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    public function setMensaje($mensaje): void {
        $this->mensaje = $mensaje;
    }

    public function setFecha($fecha): void {
        $this->fecha = $fecha;
    }
    public function setCodigo($codigo): void {
        $this->codigo = $codigo;
    }

}