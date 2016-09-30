<?php
session_start();


	include("includes/db.class.php");
	include("includes/setting.conf.php");
	include("includes/functions.php");

	$db = new DB();
	$db->conectar();

	$logged = 0;

	// Consulta SQL
	if($_SESSION['loggedin'] == true){

		if(!empty($_GET['modulo'])) {

			if(file_exists($GLOBALS['vistas']."/".$_GET['modulo'].".php")) {
				include_once($GLOBALS['vistas']."/".$_GET['modulo'].".php");
			}
			else {
				include_once($GLOBALS['vistas']."/404.php");	
			}
		}
		else {
			include_once($GLOBALS['vistas']."/inicio.php");
		}
		
	}
	else {
		include("login.php");
	}

	$db->desconectar();

?>
