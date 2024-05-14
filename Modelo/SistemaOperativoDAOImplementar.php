<?php
require_once "SistemaOperativoDAO.php";
class SistemaOperativoDAOimplementar implements SistemaOperativoDAO
{

    private $conexion;

    public function __construct()
    {
        $servidor = "localhost";
        $usuario = "samu2";
        $contrasena_bd = "123ABC=e";
        $base_de_datos = "comparadorprueba";

        // Establecer conexión con la base de datos
        $this->conexion = new mysqli($servidor, $usuario, $contrasena_bd, $base_de_datos);

        // Verificar la conexión
        if ($this->conexion->connect_error) {
            die("Error de conexión con la base de datos.");
        }
    }

    public function leerSO()
    {
        $consulta = mysqli_query($this->conexion, "SELECT * FROM so") or die("Error en consulta: " . mysqli_error($this->conexion));
        $datosArray = array();
        while ($reg = mysqli_fetch_array($consulta)) {
            $datosArray[] = $reg;
        }
        return json_encode($datosArray);
    }

    public function leerSOporNombre($nombre)
    {
        $consulta = mysqli_query($this->conexion, "SELECT * FROM so WHERE nombre = '$nombre'") or die("Error en consulta: " . mysqli_error($this->conexion));
        $datosArray = array();
        while ($reg = mysqli_fetch_array($consulta)) {
            $datosArray[] = $reg;
        }
        echo json_encode($datosArray);
    }


    public function subirSO(SistemaOperativo $so)
    {
        $sql = "INSERT INTO so (nombre, fabricante, arquitectura, comunidad, seguridad, version, dispositivos, imagen, gratis) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        // Preparar la declaración SQL
        $stmt = $this->conexion->prepare($sql);


        if ($stmt) {

            $nombre = $so->getNombre();
            $fabricante = $so->getFabricante();
            $arquitectura = $so->getArquitectura();
            $comunidad = $so->getComunidad();
            $seguridad = $so->getSeguridad();
            $version = $so->getVersion();
            $dispositivos = $so->getDispositivos();
            $imagen = $so->getImagen();
            $gratis = $so->getGratis();

            // Vincular los parámetros con los valores proporcionados
            $stmt->bind_param("sssiidsss", $nombre, $fabricante, $arquitectura, $comunidad, $seguridad, $version, $dispositivos, $imagen, $gratis);

            // Ejecutar la declaración
            $resultado = $stmt->execute();

            // Verificar si la ejecución tuvo éxito
            if ($resultado) {
                return "Sistema operativo creado exitosamente.";
            } else {
                return "Error al crear el sistema operativo";
            }
        } else {
            // Si la preparación falla, devolver un mensaje de error
            return "Error al preparar la consulta";
        }
    }

    public function actualizarSO(SistemaOperativo $so)
    {
    }

    public function eliminar($nombre)
    {
        // Sentencia SQL con marcador de posición
        $sql = "DELETE FROM so WHERE nombre=?";

        // Preparar la declaración SQL
        $stmt = $this->conexion->prepare($sql);

        if ($stmt) {
            // Asociar parámetro e idSO a la declaración
            $stmt->bind_param("s", $nombre);

            // Ejecutar la declaración
            $resultado = $stmt->execute();

            // Verificar si la ejecución tuvo éxito
            if ($resultado) {
                return "Sistema operativo eliminado exitosamente.";
            } else {
                return "Error al eliminar el sistema operativo";
            }
        } else {
            // Si la preparación falla, devolver un mensaje de error
            return "Error al preparar la consulta";
        }
    }
}
