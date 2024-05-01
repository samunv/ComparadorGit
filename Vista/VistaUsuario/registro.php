<?php

if (isset($_POST["nombreNuevo"]) && isset($_POST["contrasenaNueva"]) && isset($_POST["email"])) {
    require_once "../Dao/UsuarioDAOimplementar.php";
    require_once "../Modelo/Usuarios.php";

    // Crear una instancia de UsuarioDAOimplementar
    $usuarioDAO = new UsuarioDAOimplementar();

    // Obtener los datos del formulario
    $inputNombre = $_POST["nombreNuevo"];
    $inputContrasena = $_POST["contrasenaNueva"];
    $inputEmail = $_POST["email"];

    // Crear un nuevo objeto Usuario
    $nuevoUsuario = new Usuarios($inputNombre, $inputEmail, $inputContrasena);

    // Llamar al método crearUsuario para agregar el nuevo usuario a la base de datos
    $resultado = $usuarioDAO->crearUsuario($nuevoUsuario);

    // Verificar el resultado de la operación y redirigir según sea necesario
    if ($resultado) {
        header("location: ../VistaUsuario/inicio.php");
    }
    
} else {
    echo "Error al registrar usuario. Por favor, inténtalo de nuevo.";
}
