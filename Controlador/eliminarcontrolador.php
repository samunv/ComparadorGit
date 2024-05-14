<?php
require_once "../Modelo/SistemaOperativo.php";
require_once "../Modelo/SistemaOperativoDAOImplementar.php";

$nombre = $_GET["nombre"];

// Instanciar el DAO
$daoSoImp = new SistemaOperativoDAOimplementar();


$datos = $daoSoImp->eliminar($nombre); 

// Crear un array para almacenar los datos de respuesta
$array = array();

if (!empty($nombre)) {
    // Si se elimina
    $array["exito"] = "exito";
} else {
    // Si no se elimina
    $array["error"] = "Error";
}

// Convertir el array de respuesta como JSON y enviarlo como respuesta
echo json_encode($array);

?>