<?php
$nombre = $_POST["nombre"];
$contrasena = $_POST["contrasena"];
require_once "../Modelo/UsuarioDAOimplementar.php";
$daoUsuarioImp = new UsuarioDAOimplementar();

$usuario = $daoUsuarioImp->leerUsuario($nombre, $contrasena);

// Crear un array para almacenar los datos de respuesta
$array = array();

if (!empty($usuario)) {
    // Si se encuentra el usuario, se añaden sus datos al array de respuesta
    $array["usuario"] = $usuario;

} else {
    // Si no encuentra un usuario con esos datos, mandar un error
    $array["error"] = "Error";
}

// Convertir el array de respuesta como JSON y enviarlo como respuesta
echo json_encode($array);
