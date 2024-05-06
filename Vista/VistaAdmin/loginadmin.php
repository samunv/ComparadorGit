<?php
// Verificar si se ha enviado el formulario de inicio de sesión
if (isset($_POST["nombre"]) && isset($_POST["contrasena"])) {
    $servidor = "localhost";
    $usuario_bd = "Jorge";
    $contrasena_bd = "12345";
    $nombre_bd = "comparadorPrueba";

    // Establecer conexión con la base de datos
    $conexion = new mysqli($servidor, $usuario_bd, $contrasena_bd, $nombre_bd);

    // Verificar si hay errores de conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    require_once "../Dao/AdministradorDAOimplementar.php";

    $adminDao = new AdministradorDAOimplementar();


    $administradores = $adminDao->leerAdministrador();
    $inputNombre = $_POST["nombre"];
    $inputContrasena = $_POST["contrasena"];
    $adminEncontrado = false;

    for ($i = 0; $i < count($administradores) && !$adminEncontrado; $i++) {
        $administrador = $administradores[$i];
        if ($administrador->getNombreAdministrador() == $inputNombre && $administrador->getContrasena() == $inputContrasena) {
            $adminEncontrado = true;
        }
    }
    if ($adminEncontrado) {
        echo "¡Inicio de sesión exitoso $inputNombre!";
        header("location: inicioAdmin.php");
    } else {
        echo "¡Administrador no encontrado o contraseña incorrecta!";
    }
} else {
    header("Location: ../loginPrincipal.html");
    exit();
}
