<?php
require_once "AdministradorDAO.php";
class AdministradorDAOimplementar implements AdministradorDAO{

    private $servidor = "localhost";
    private $usuario_bd = "Jorge";
    private $contrasena_bd = "12345";
    private $nombre_bd = "comparadorPrueba";
    private $conexion;

    public function __construct()
    {
        $this->conexion = new mysqli($this->servidor, $this->usuario_bd, $this->contrasena_bd, $this->nombre_bd);
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public function leerAdministrador()
    {
        require_once '../Modelo/Administrador.php';
        $sql = "SELECT * FROM administrador";
        $resultado = $this->conexion->query($sql);

        $administradores = array(); // Array para guardar los objetos Administrador

        if ($resultado && $resultado->num_rows > 0) {
            while ($columna = $resultado->fetch_assoc()) {
                // Crear un objeto Administrador con los datos de la columna y añadirlo al array
                $administrador= new Administrador(
                    $columna['idAdmin'],
                    $columna['nombre'],
                    $columna['contrasena']
                );
                $administradores[] = $administrador;
            }
            return $administradores;
        } 
    }

}