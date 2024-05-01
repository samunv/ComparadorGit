<?php
class SistemaOperativo
{

    private $nombre; //string
    private $fabricante; //string
    private $arquitectura; //string
    private $comunidad; //int
    private $seguridad; //double
    private $version; //string
    private $dispositivos; //string
    private $imagen; //string
    private $gratis; //string


    public function __construct($nombre, $fabricante, $arquitectura, $comunidad, $seguridad, $version, $dispositivos, $imagen, $gratis)
    {
        $this->nombre = $nombre;
        $this->fabricante = $fabricante;
        $this->arquitectura = $arquitectura;
        $this->comunidad = $comunidad;
        $this->seguridad = $seguridad;
        $this->version = $version;
        $this->dispositivos = $dispositivos;
        $this->imagen = $imagen;
        $this->gratis = $gratis; 
    }





    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }


    public function getFabricante()
    {
        return $this->fabricante;
    }


    public function setFabricante($fabricante)
    {
        $this->fabricante = $fabricante;

        return $this;
    }


    public function getArquitectura()
    {
        return $this->arquitectura;
    }

    public function setArquitectura($arquitectura)
    {
        $this->arquitectura = $arquitectura;

        return $this;
    }

    public function getComunidad()
    {
        return $this->comunidad;
    }


    public function setComunidad($comunidad)
    {
        $this->comunidad = $comunidad;

        return $this;
    }


    public function getSeguridad()
    {
        return $this->seguridad;
    }


    public function setSeguridad($seguridad)
    {
        $this->seguridad = $seguridad;

        return $this;
    }


    public function getDispositivos()
    {
        return $this->dispositivos;
    }

    public function setDispositivos($dispositivos)
    {
        $this->dispositivos = $dispositivos;

        return $this;
    }


    public function getVersion()
    {
        return $this->version;
    }


    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }


    public function getImagen()
    {
        return $this->imagen;
    }


    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

     
    public function getGratis()
    {
        return $this->gratis;
    }

    
    public function setGratis($gratis)
    {
        $this->gratis = $gratis;

        return $this;
    }
}
