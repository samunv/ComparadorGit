<?php
header("ContentType: text/text: charset = utf-8"); 

$modeloRecogido = $_POST["descripcion"]; 
$conex = mysqli_connect("localhost", "root", "12345", "phpbd") or
die ("error"); 

//$resultConsulta = mysqli_query($conex, "SELECT codigo, descripcion, precio FROM moviles"); 

$resultConsulta = mysqli_query($conex, "SELECT codigo, descripcion, precio FROM moviles WHERE descripcion = '".$modeloRecodigo."'"); 
die ("error en consulta". mysqli_error($conex)); 

while ($reg = mysqli_fetch_array($resultConsulta)){
    $datosArr[] = $reg; 
}

$datsJson = json_encode($datosArr); 

echo($datsJson); 


?>