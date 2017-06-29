<?php 

require_once 'config/global.php'; //cargamos las constantes

//Base para los controladores
require_once 'core/ControladorBase.php'; //dentro de controladorBase estamos cragando entida y modelo base

//Funciones para el controlador frontal 
require_once 'core/FrontController.php';

//Cargamos controladores y acciones
if(isset($_GET["controller"])){//si existe controller
	// carga el controlador que le pasamos por la url
	$controllerObj = cargarControlador($_GET["controller"]); //pasamos el controlador
	lanzarAccion($controllerObj); //y lanzamos la accion de este
	
}else{ //y si no,carga por defecto
	$controllerObj = cargarControlador(controller_default); //cargamos por defecto
	lanzarAccion($controllerObj); //y lanzamos la accion de este
}



 ?>