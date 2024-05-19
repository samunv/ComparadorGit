<?php
require_once '../Modelo/Comentario.php';
require_once '../Modelo/ComentarioDAOImplementar.php';

$idUsuario = $_POST["idUsuario"];
$contenido = $_POST["contenido"];
$nombreUsuario = $_POST["nombreUsuario"];

// Crear un nuevo objeto comentario con los datos del comentario
$comentario = new Comentario($idUsuario, $contenido, $nombreUsuario);

// Crear una instancia del DAO
$comentDao = new ComentarioDAOimplementar();


$mensaje = $comentDao->subirComentario($comentario);



// Mostrar un mensaje al usuario
echo json_encode($mensaje);
?>