<?php
/**
 * @param UsuarioDAOimplementar $daoUsuarioImp Objeto de la clase SistemaOperativoDAOimplementar
 * @param String $nombre Almacena el nombre en el array $_POST
 * @param String $contrasena Almacena la contraseña en el array $_POST  
 * @param array $datosUsuario Almacena el array obtenido del objeto $daoUsuarioImp
 * @param array $datos array en formato json de los datos obtenidos de la funcion leerSO() del objeto $daoSoImp
 */

$nombre = $_POST["nombre"];
$contrasena = $_POST["contrasena"];

require_once "../Modelo/UsuarioDAOimplementar.php";
$daoUsuarioImp = new UsuarioDAOimplementar();

$datosUsuario = $daoUsuarioImp->leerUsuario($nombre, $contrasena);

// Crear un array para almacenar los datos de respuesta
$array = array();

if (!empty($datosUsuario)) {
    // Si se encuentra el usuario, se añaden sus datos al array
    $array["usuario"] = $datosUsuario;
} else {
    // Si no encuentra un usuario con esos datos, mandar un error
    $array["error"] = "Error";
}

// Convertir el array de respuesta como JSON y enviarlo como respuesta
echo json_encode($array);
