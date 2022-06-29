<?php

class Usuario{
    //inicializamos las variables usuario y contraseña
    protected $usuario;
    protected $password;
    protected $mail;


    //constructor de usuario
    function __construct($usuario, $password, $mail) {
        $this->usuario = $usuario;
        $this->password = $password;
        $this->mail = $mail;
    }
    function getUsuario() {
        return $this->usuario;
    }

    function getPassword() {
        return $this->password;
    }

    function getMail() {
        return $this->mail;
    }

    function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    function setPassword($password): void {
        $this->psswd = $password;
    }

    function setMail($mail): void {
        $this->mail = $mail;
    }

}
