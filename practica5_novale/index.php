<?php 
	//El INDEX: en él mostraremos la salida de las vistas al usuario y tambien a través de él enviaremos las distintas acciónes que el usuario envíe al controlador
	
	REQUIRE_ONCE "controllers/controller.php";
	REQUIRE_ONCE "models/model.php";

	$mvc = new mvcController();
	$mvc->plantilla();
?>