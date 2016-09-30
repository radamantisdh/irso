<?php
//var_dump($_POST);

include("../../includes/db.class.php");
include("../../includes/setting.conf.php");

$db = new DB();
$db->conectar();
 	
$error = "<font color=red><center>";
$finerror = "</center></font>";

$cago = false;

$nro_asd 			= mysql_real_escape_string(stripslashes($_POST['nro_asd']));
$soli_nombre 		= mysql_real_escape_string(stripslashes($_POST['soli_nombre']));
$soli_ap_pat    	= mysql_real_escape_string(stripslashes($_POST['soli_ap_pat']));
$soli_ap_mat    	= mysql_real_escape_string(stripslashes($_POST['soli_ap_mat']));
$soli_rut			= mysql_real_escape_string(stripslashes($_POST['soli_rut']));
$soli_dv			= mysql_real_escape_string(stripslashes($_POST['soli_dv']));
$soli_calle			= mysql_real_escape_string(stripslashes($_POST['soli_calle']));
$soli_numero		= mysql_real_escape_string(stripslashes($_POST['soli_numero']));
$soli_resto			= mysql_real_escape_string(stripslashes($_POST['soli_resto']));
$soli_region		= mysql_real_escape_string(stripslashes($_POST['soli_region']));
$soli_ciudad		= mysql_real_escape_string(stripslashes($_POST['soli_ciudad']));
$soli_telefono		= mysql_real_escape_string(stripslashes($_POST['soli_telefono']));
$soli_email			= mysql_real_escape_string(stripslashes($_POST['soli_email']));
$actividad_rubro	= mysql_real_escape_string(stripslashes($_POST['actividad_rubro']));
$rep_leg_nombre		= mysql_real_escape_string(stripslashes($_POST['rep_leg_nombre']));
$rep_leg_ap_pat		= mysql_real_escape_string(stripslashes($_POST['rep_leg_ap_pat']));
$rep_leg_ap_mat		= mysql_real_escape_string(stripslashes($_POST['rep_leg_ap_mat']));
$rep_leg_rut		= mysql_real_escape_string(stripslashes($_POST['rep_leg_rut']));
$rep_leg_dv			= mysql_real_escape_string(stripslashes($_POST['rep_leg_dv']));
$organismo_16744	= mysql_real_escape_string(stripslashes($_POST['organismo_16744']));
$fecha_ingreso		= mysql_real_escape_string(stripslashes($_POST['fecha_ingreso']));

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
elseif(empty($soli_telefono)) { echo $error."El campo <b>Teléfono</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_email)) { echo $error."El campo <b>Email</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($actividad_rubro)) { echo $error."El campo <b>Actividad o rubro</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_nombre)) { echo $error."El campo <b>Nombre del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_ap_pat)) { echo $error."El campo <b>Apellido Paterno del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_ap_mat)) { echo $error."El campo <b>Apellido Materno del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_rut)) { echo $error."El campo <b>RUT del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_dv)) { echo $error."El campo <b>Digito Verificador (DV) del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($organismo_16744)) { echo $error."El campo <b>Organismo Admiistrador Ley 16.744</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($fecha_ingreso)) { echo $error."El campo <b>Fecha de Ingreso</b> no puede quedar vacio".$finerror; $cago = true; }
else {
	//echo $error."Error 41: Contacte al administrador".$finerror; $cago = true;
	if($cago == false) {
	//inserta la mierda
		$sql = "INSERT INTO 	l_6(
            nro_asd, soli_nombre, soli_ap_pat, soli_ap_mat, soli_rut, 
            soli_dv, soli_calle, soli_numero, soli_resto, soli_region, soli_ciudad, 
            soli_telefono, soli_email, actividad_rubro, rep_leg_nombre, rep_leg_ap_pat, 
            rep_leg_ap_mat, rep_leg_rut, rep_leg_dv, organismo_16744, fecha_ingreso)
    VALUES ('$nro_asd', '$soli_nombre', '$soli_ap_pat', '$soli_ap_mat', '$soli_rut', 
            '$soli_dv', '$soli_calle', '$soli_numero', '$soli_resto', '$soli_region', '$soli_ciudad', 
            '$soli_telefono', '$soli_email', '$actividad_rubro', '$rep_leg_nombre', '$rep_leg_ap_pat', 
            '$rep_leg_ap_mat', '$rep_leg_rut', '$rep_leg_dv', '$organismo_16744', '$fecha_ingreso')";
	pg_query("$sql");
	echo "Insertó la wea";

	}
	else{
	echo $error."Error 42: Contacte al administrador [No se guardo el registro]".$finerror; $cago = true;	
	}
}
?>