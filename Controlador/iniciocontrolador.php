<?php
/**
 * @param SistemaOperativoDAOimplementar $daoSoImp Objeto de la clase SistemaOperativoDAOimplementar
 * @param array $datos array en formato json de los datos obtenidos de la funcion leerSO() del objeto $daoSoImp
 */
require_once "../Modelo/SistemaOperativoDAOImplementar.php"; 

$daoSoImp = new SistemaOperativoDAOimplementar(); 

$datos = $daoSoImp->leerSO(); 

echo $datos; 
?>
