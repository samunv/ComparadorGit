<?php
class Administrador
{
    private $idAdministrador; //integer
    private $nombreAdministrador; //string
    private $contrasena; //String


    public function __construct($idAdministrador, $nombreAdministrador, $contrasena)
    {
        $this->idAdministrador = $idAdministrador;
        $this->nombreAdministrador = $nombreAdministrador;
        $this->contrasena = $contrasena;
    }

    public function getidAdministrador()
    {
        return $this->idAdministrador;
    }


    public function setidAdministrador($idAdministrador)
    {
        $this->idAdministrador = $idAdministrador;

        return $this;
    }

    public function getNombreAdministrador()
    {
        return $this->nombreAdministrador;
    }


    public function setNombreAdministrador($nombreAdministrador)
    {
        $this->nombreAdministrador = $nombreAdministrador;

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
