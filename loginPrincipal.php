<?php
// Verificar si se ha enviado el formulario de inicio de sesión
if (isset($_POST["nombre"]) && isset($_POST["contrasena"])) {
    require_once "Dao/UsuarioDAOimplementar.php"; // Incluir la clase UsuarioDAOimplementar

    // Crear una instancia de UsuarioDAOimplementar
    $usuarioDAO = new UsuarioDAOimplementar();

    // Verificar si el usuario existe y la contraseña es correcta
    $usuarios = $usuarioDAO->leerUsuario();
    $inputNombre = $_POST["nombre"];
    $inputContrasena = $_POST["contrasena"];
    $usuarioEncontrado = false;

    for ($i = 0; $i < count($usuarios) && !$usuarioEncontrado; $i++) {
        $usuario = $usuarios[$i];
        if ($usuario->getNombreUsuario() == $inputNombre && $usuario->getContrasena() == $inputContrasena) {
            $usuarioEncontrado = true;
        }
    }

    if ($usuarioEncontrado) {
        echo "¡Inicio de sesión exitoso $inputNombre!";
        header("location: VistaUsuario/inicio.php"); 
        
    } else {
        echo "¡Usuario no encontrado o contraseña incorrecta!";
    }
} else {
    // Si los datos del formulario no han sido enviados, redirigir al formulario de inicio de sesión
    header("Location: loginPrincipal.html");
    exit();
}