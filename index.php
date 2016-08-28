<?php
session_start();
require_once("includes/config.php");
	//Funciones para el controlador
require_once("includes/enrutador.php");
	//Cargamos controladores y acciones
if(isset($_GET["controller"])){
    $controllerObj=cargarControlador($_GET["controller"]);
    lanzarAccion($controllerObj);
}else{
    $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
    lanzarAccion($controllerObj);
}
error_reporting(E_ALL);
ini_set('display_errors', true);
?>