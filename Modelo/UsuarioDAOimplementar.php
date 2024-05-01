<?php
require_once "UsuarioDAO.php";
class UsuarioDAOimplementar implements UsuarioDAO
{

    private $servidor = "localhost";
    private $usuario_bd = "samu";
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

    public function leerUsuario($nombre, $contrasena)
    {
        $consulta = mysqli_query($this->conexion, "SELECT * FROM usuarios WHERE nombreUsuario='$nombre' AND contrasena='$contrasena'") or die("Error en consulta: " . mysqli_error($this->conexion));
        $datosArray = array();
        while ($reg = mysqli_fetch_array($consulta)) {
            $datosArray[] = $reg;
        }
    
        return $datosArray;
    }



    public function crearUsuario(Usuarios $usuario)
    {
        $sql = "INSERT INTO usuarios (nombreUsuario, email, contrasena) VALUES (?, ?, ?)";

        // Preparar la declaración SQL
        $stmt = $this->conexion->prepare($sql);

        // Verificar si la preparación tiene éxito
        if ($stmt) {
            // Obtener las propiedades del objeto Usuarios
            $nombre = $usuario->getNombreUsuario();
            $email = $usuario->getEmail();
            $contrasena = $usuario->getContrasena();


            // Vincular los parámetros con los valores proporcionados
            $stmt->bind_param("sss", $nombre, $email, $contrasena);

            // Ejecutar la declaración
            $resultado = $stmt->execute();

            // Verificar si la ejecución tuvo éxito
            if ($resultado) {
                return $resultado;
            } else {
            }
        } else {
            // Si la preparación falla, devolver un mensaje de error
            return "Error al preparar la consulta";
        }
    }
    public function eliminarUsuario(Usuarios $usuario)
    {
    }
    public function actualizarNombre($nombre)
    {
    }
}
