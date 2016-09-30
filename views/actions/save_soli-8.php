<?php
//var_dump($_POST);

include("../../includes/db.class.php");
include("../../includes/setting.conf.php");

$db = new DB();
$db->conectar();
 	
$error = "<font color=red><center>";
$finerror = "</center></font>";

$cago = false;

$nro_asd 						= mysql_real_escape_string(stripslashes($_POST['nro_asd']));
$soli_nombre 					= mysql_real_escape_string(stripslashes($_POST['soli_nombre']));
$soli_ap_pat    				= mysql_real_escape_string(stripslashes($_POST['soli_ap_pat']));
$soli_ap_mat    				= mysql_real_escape_string(stripslashes($_POST['soli_ap_mat']));
$soli_rut						= mysql_real_escape_string(stripslashes($_POST['soli_rut']));
$soli_dv						= mysql_real_escape_string(stripslashes($_POST['soli_dv']));
$soli_calle						= mysql_real_escape_string(stripslashes($_POST['soli_calle']));
$soli_numero					= mysql_real_escape_string(stripslashes($_POST['soli_numero']));
$soli_resto						= mysql_real_escape_string(stripslashes($_POST['soli_resto']));
$soli_region					= mysql_real_escape_string(stripslashes($_POST['soli_region']));
$soli_ciudad					= mysql_real_escape_string(stripslashes($_POST['soli_ciudad']));
$soli_comuna 					= mysql_real_escape_string(stripslashes($_POST['soli_comuna']));
$soli_telefono					= mysql_real_escape_string(stripslashes($_POST['soli_telefono']));
$soli_celular 					= mysql_real_escape_string(stripslashes($_POST['soli_celular']));
$soli_email						= mysql_real_escape_string(stripslashes($_POST['soli_email']));
$rep_leg_nombre					= mysql_real_escape_string(stripslashes($_POST['rep_leg_nombre']));
$rep_leg_ap_pat					= mysql_real_escape_string(stripslashes($_POST['rep_leg_ap_pat']));
$rep_leg_ap_mat					= mysql_real_escape_string(stripslashes($_POST['rep_leg_ap_mat']));
$rep_leg_rut					= mysql_real_escape_string(stripslashes($_POST['rep_leg_rut']));
$rep_leg_dv						= mysql_real_escape_string(stripslashes($_POST['rep_leg_dv']));
$rep_leg_telefono				= mysql_real_escape_string(stripslashes($_POST['rep_leg_telefono']));
$rep_leg_celular				= mysql_real_escape_string(stripslashes($_POST['rep_leg_celular']));
$rep_leg_email					= mysql_real_escape_string(stripslashes($_POST['rep_leg_email']));
$instalacion_origen_tipo		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_tipo']));
$instalacion_origen_calle		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_calle']));
$instalacion_origen_numero		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_numero']));
$instalacion_origen_resto		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_resto']));
$instalacion_origen_region		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_region']));
$instalacion_origen_ciudad		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_ciudad']));
$instalacion_origen_comuna		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_comuna']));
$instalacion_origen_num_res		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_num_res']));
$instalacion_origen_fecha		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_fecha']));
$instalacion_origen_seremi		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_seremi']));
$instalacion_destino_nombre		= mysql_real_escape_string(stripslashes($_POST['instalacion_destino_nombre']));
$instalacion_destino_rut		= mysql_real_escape_string(stripslashes($_POST['instalacion_destino_rut']));
$instalacion_destino_dv			= mysql_real_escape_string(stripslashes($_POST['instalacion_destino_dv']));
$instalacion_destino_calle		= mysql_real_escape_string(stripslashes($_POST['instalacion_destino_calle']));
$instalacion_destino_numero		= mysql_real_escape_string(stripslashes($_POST['instalacion_destino_numero']));
$instalacion_destino_resto		= mysql_real_escape_string(stripslashes($_POST['instalacion_destino_resto']));
$instalacion_destino_ciudad		= mysql_real_escape_string(stripslashes($_POST['instalacion_destino_ciudad']));
$instalacion_destino_pais		= mysql_real_escape_string(stripslashes($_POST['instalacion_destino_pais'])); 
$instalacion_destino_telefono	= mysql_real_escape_string(stripslashes($_POST['instalacion_destino_telefono']));
$instalacion_destino_email		= mysql_real_escape_string(stripslashes($_POST['instalacion_destino_email']));
$sustancia_radioiso				= mysql_real_escape_string(stripslashes($_POST['sustancia_radioiso']));
$sustancia_num_serie			= mysql_real_escape_string(stripslashes($_POST['sustancia_num_serie']));
$sustancia_bq					= mysql_real_escape_string(stripslashes($_POST['sustancia_bq']));
$sustancia_calibracion			= mysql_real_escape_string(stripslashes($_POST['sustancia_calibracion']));
$sustancia_bq_actual			= mysql_real_escape_string(stripslashes($_POST['sustancia_bq_actual']));
$sustancia_bq_fecha				= mysql_real_escape_string(stripslashes($_POST['sustancia_bq_fecha']));
$fecha_ingreso					= mysql_real_escape_string(stripslashes($_POST['fecha_ingreso']));

if(empty($nro_asd)) { echo $error."El campo <b>Numero ASDigital</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_nombre)) { echo $error."El campo <b>Nombre</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_ap_pat)) { echo $error."El campo <b>Apellido Paterno</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_ap_mat)) { echo $error."El campo <b>Apellido Materno</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_rut)) { echo $error."El campo <b>RUT</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_dv)) { echo $error."El campo <b>Digito Verificador (DV)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_calle)) { echo $error."El campo <b>Calle</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_numero)) { echo $error."El campo <b>Número</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_region)) { echo $error."El campo <b>Región</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_ciudad)) { echo $error."El campo <b>Ciudad</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_comuna)) { echo $error."El campo <b>Comuna</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_telefono)) { echo $error."El campo <b>Teléfono</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_celular)) { echo $error."El campo <b>Celular</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_email)) { echo $error."El campo <b>Email</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_nombre)) { echo $error."El campo <b>Nombre del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_ap_pat)) { echo $error."El campo <b>Apellido Paterno del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_ap_mat)) { echo $error."El campo <b>Apellido Materno del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_rut)) { echo $error."El campo <b>RUT del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_dv)) { echo $error."El campo <b>Digito Verificador (DV) del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_telefono)) { echo $error."El campo <b>Teléfono del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_celular)) { echo $error."El campo <b>Celular Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_email)) { echo $error."El campo <b>Email Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_tipo)) { echo $error."El campo <b>Tipo de Instalación</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_calle)) { echo $error."El campo <b>Calle Instalación de Origen</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_numero)) { echo $error."El campo <b>Número Instalación de Origen</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_region)) { echo $error."El campo <b>Región de Instalación de Origen</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_ciudad)) { echo $error."El campo <b>Ciudad de Instalación de Origen</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_comuna)) { echo $error."El campo <b>Comuna Instalación de Origen</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_num_res)) { echo $error."El campo <b>Número de Resolución (Instalación de Origen)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_fecha)) { echo $error."El campo <b>Fecha (Instalación de Origen)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_seremi)) { echo $error."El campo <b>SEREMI Salud que Otorga (Instalación de Origen)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_destino_nombre)) { echo $error."El campo <b>Fecha de Ingreso</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_destino_rut)) { echo $error."El campo <b>RUT (Instalación de Destino)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_destino_dv)) { echo $error."El campo <b>Digito Verificador (Instalación de Destino)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_destino_calle)) { echo $error."El campo <b>Calle Instalación de Destino</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_destino_numero)) { echo $error."El campo <b>Número Instalación de Destino</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_destino_ciudad)) { echo $error."El campo <b>Ciudad Instalación de Destino</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_destino_pais)) { echo $error."El campo <b>Pais Instalación de Destino</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_destino_telefono)) { echo $error."El campo <b>Teléfono Instalación de Destino/b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_destino_email)) { echo $error."El campo <b>Email Instalación de Destino</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($sustancia_radioiso)) { echo $error."El campo <b>Radioisótopo 1</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($sustancia_num_serie)) { echo $error."El campo <b>Número de Serie</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($sustancia_bq)) { echo $error."El campo <b>Actividad Inicial en Bq</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($sustancia_calibracion)) { echo $error."El campo <b>Fecha de Calibración</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($sustancia_bq_actual)) { echo $error."El campo <b>Actividad Actual en Bq</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($sustancia_bq_fecha)) { echo $error."El campo <b>Fecha (Sustancia Radiactiva a Desechar)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($fecha_ingreso)) { echo $error."El campo <b>Fecha de Ingreso</b> no puede quedar vacio".$finerror; $cago = true; }
else {
	//echo $error."Error 41: Contacte al administrador".$finerror; $cago = true;
	if($cago == false) {
	//inserta la mierda
		$sql = "INSERT INTO 	l_7 (
            nro_asd, soli_nombre, soli_ap_pat, soli_ap_mat, soli_rut, 
            soli_dv, soli_calle, soli_numero, soli_resto, soli_region, soli_ciudad, 
            soli_telefono, soli_email, soli_inst_ed_sup, soli_nivel, fecha_ingreso)
    VALUES ('$nro_asd', '$soli_nombre', '$soli_ap_pat', '$soli_ap_mat', '$soli_rut', '$soli_dv', 
            '$soli_calle', '$soli_numero', '$soli_resto', '$soli_region', '$soli_ciudad', '$soli_telefono', 
            '$soli_email', '$soli_inst_ed_sup', '$soli_nivel', '$fecha_ingreso')";
	pg_query("$sql");
	echo "Insertó la wea";

	}
	else{
	echo $error."Error 42: Contacte al administrador [No se guardo el registro]".$finerror; $cago = true;	
	}
}
?>