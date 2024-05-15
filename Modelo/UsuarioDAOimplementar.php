<<<<<<< Updated upstream
<<<<<<< Updated upstream
<?php
require_once "UsuarioDAO.php";
require_once "Conexion.php";
class UsuarioDAOimplementar implements UsuarioDAO
{

    /**
     * @var Conexion $conexion almacenar la conexion con la base de datos
     */

    private $conexion;

    public function __construct()
    {
        return $this->conexion = new Conexion();
    }

    /**
     * Función para leer información de usuario desde la base de datos.
     *
     * Esta función realiza una consulta a la base de datos para obtener los datos
     * del usuario que coincidan con el nombre de usuario y la contraseña proporcionados.
     *
     * @param string $nombre El nombre de usuario del usuario que se quiere buscar.
     * @param string $contrasena La contraseña del usuario que se quiere buscar.
     * @return array Devuelve un array con los datos del usuario encontrado,
     *               o un array vacío si no se encuentra ningún usuario con el que coincidan los datos.
     */

    public function leerUsuario($nombre, $contrasena)
    {
        $consulta = mysqli_query($this->conexion->getConexion(), "SELECT * FROM usuarios WHERE nombreUsuario='$nombre' AND contrasena='$contrasena'") or die("Error en consulta: " . mysqli_error($this->conexion->getConexion()));
        $datosArray = array();
        while ($reg = mysqli_fetch_array($consulta)) {
            $datosArray[] = $reg;
        }

        return $datosArray;
    }


    /**
     * Función para crear un nuevo usuario en la base de datos.
     *
     * Esta función prepara y ejecuta una consulta sql para crear un nuevo usuario
     * en la tabla 'usuarios' de la base de datos. Para ello, se utilizan los datos del objeto
     * usuario.
     *
     * @param Usuarios $usuario Objeto Usuarios que contiene la información del usuario.
     * @return bool|string Devuelve true si el usuario se crea correctamente. Si la consulta no se realiza, 
     * devuelve un mensaje de error.
     */

    public function crearUsuario(Usuarios $usuario)
    {
        $sql = "INSERT INTO usuarios (nombreUsuario, email, contrasena) VALUES (?, ?, ?)";

        // Preparar la declaración SQL
        $consulta = $this->conexion->getConexion()->prepare($sql);

        // Verificar si la preparación tiene éxito
        if ($consulta) {
            // Obtener las propiedades del objeto Usuarios
            $nombre = $usuario->getNombreUsuario();
            $email = $usuario->getEmail();
            $contrasena = $usuario->getContrasena();


            // Vincular los parámetros con los valores proporcionados
            $consulta->bind_param("sss", $nombre, $email, $contrasena);

            // Ejecutar la declaración
            $resultado = $consulta->execute();

            // Verificar si la ejecución tuvo éxito
            if ($resultado) {
                return $resultado;
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
=======
<?php
require_once "UsuarioDAO.php";
class UsuarioDAOimplementar implements UsuarioDAO
{

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
>>>>>>> Stashed changes
=======
<?php
require_once "UsuarioDAO.php";
class UsuarioDAOimplementar implements UsuarioDAO
{

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
>>>>>>> Stashed changes
