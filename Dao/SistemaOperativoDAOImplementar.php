<?php
require_once "SistemaOperativoDAO.php";
class SistemaOperativoDAOimplementar implements SistemaOperativoDAO
{

    private $conexion;

    public function __construct()
    {
        $servidor = "localhost";
        $usuario = "samu";
        $contrasena_bd = "12345";
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
        require_once '../Modelo/SistemaOperativo.php';
        $sql = "SELECT * FROM so";
        $resultado = $this->conexion->query($sql);

        $sistemasOperativos = array(); // Array para guardar los objetos SistemaOperativo

        if ($resultado && $resultado->num_rows > 0) {
            while ($columna = $resultado->fetch_assoc()) {
                // Crear un objeto SistemaOperativo con los datos de la columna y añadirlo al array
                $so = new SistemaOperativo(
                    $columna['nombre'],
                    $columna['fabricante'],
                    $columna['arquitectura'],
                    $columna['comunidad'],
                    $columna['seguridad'],
                    $columna['version'],
                    $columna['dispositivos'],
                    $columna['imagen'],
                    $columna['gratis']
                );
                $sistemasOperativos[] = $so;
            }
            return $sistemasOperativos;
        } else {
            return "No se encontraron sistemas operativos.";
        }
    }

    public function leerSOpornombre($nombre)
    {
        require_once '../Modelo/SistemaOperativo.php';
        $sql = "SELECT * FROM so WHERE nombre = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("s", $nombre);
        $stmt->execute();

        $resultado = $stmt->get_result();

        $sistemasOperativos = array(); // Array para guardar los objetos SistemaOperativo

        // Verificar si se encontraron resultados
        if ($resultado && $resultado->num_rows > 0) {
            while ($columna = $resultado->fetch_assoc()) {
                // Crear un objeto SistemaOperativo con los datos de la columna y añadirlo al array
                $so = new SistemaOperativo(
                    $columna['nombre'],
                    $columna['fabricante'],
                    $columna['arquitectura'],
                    $columna['comunidad'],
                    $columna['seguridad'],
                    $columna['version'],
                    $columna['dispositivos'],
                    $columna['imagen'],
                    $columna['gratis']
                );
                $sistemasOperativos[] = $so;
            }
            return $sistemasOperativos;
        } else {
            return "No se encontraron sistemas operativos con el nombre '$nombre'.";
        }
    }

    public function subirSO(SistemaOperativo $so)
    {
        $sql = "INSERT INTO so (nombre, fabricante, arquitectura, comunidad, seguridad, version, dispositivos, imagen, gratis) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

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

    public function eliminar(SistemaOperativo $so)
    {
    }
}
