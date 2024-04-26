<?php
class Usuarios
{
    private $idUsuario; //integer
    private $nombreUsuario; //string
    private $email; //string
    private $contrasena; //String


    public function __construct($nombreUsuario, $email, $contrasena)
    {
        $this->nombreUsuario = $nombreUsuario;
        $this->email = $email;
        $this->contrasena = $contrasena;
    }

    public function getidUsuario()
    {
        return $this->idUsuario;
    }


    public function setidUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }


    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getContrasena()
    {
        return $this->contrasena;
    }


    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }
}
