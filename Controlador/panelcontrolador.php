<?php
require_once "../Modelo/SistemaOperativoDAOImplementar.php";
require_once "../Modelo/UsuarioDAOimplementar.php";

$daoSoImp = new SistemaOperativoDAOimplementar();
$daoUsuario = new UsuarioDAOimplementar(); 



$datos = $daoSoImp->leerSO();


echo $datos;
