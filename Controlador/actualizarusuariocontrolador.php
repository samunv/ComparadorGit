<?php

require_once '../Modelo/UsuarioDAOImplementar.php';

// Verificar si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $permisos = $_POST['admin'];
    $idUsuario= $_POST['idUsuario'];
  


    // Crear una instancia del DAO
    $usuarioDAOimp= new UsuarioDAOimplementar();

    // Llamar al método crearSO del DAO para insertar el nuevo sistema operativo
    $mensaje = $usuarioDAOimp->actualizarPermisos($idUsuario, $permisos); 

    // Mostrar un mensaje al usuario
    echo json_encode($mensaje);
}
