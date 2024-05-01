<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    // Redirigir al usuario a la página de login si no ha iniciado sesión
    header("Location: login.php");
    exit;
}

// Verificar si el usuario tiene permisos especiales (administrador)
$usuario_id = $_SESSION['usuario_id'];
$es_administrador = false; // Supongamos que inicialmente no es administrador

// Lógica para verificar si el usuario es administrador
if ($usuario_id == 'ID_DEL_ADMINISTRADOR') {
    $es_administrador = true;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <!-- Agregar cualquier otro recurso necesario, como CSS, etc. -->
</head>

<body>
    <h1>Bienvenido a la página de inicio</h1>

    <!-- Aquí puedes agregar contenido HTML que todos los usuarios verán -->

    <!-- Ahora, utilizando JavaScript, puedes modificar el contenido dependiendo de si el usuario es administrador o no -->
    <script>
        // Verificar si el usuario es administrador
        var esAdministrador = <?php echo json_encode($es_administrador); ?>;

        if (esAdministrador) {
            // Modificar el contenido para administradores
            document.getElementById('contenido-especial').innerHTML = '<p>¡Eres un administrador y puedes ver este contenido especial!</p>';
        }
    </script>

    <!-- Agregar contenido especial para administradores -->
    <div id="contenido-especial">
        <!-- Este contenido solo será visible para administradores -->
    </div>
</body>

</html>