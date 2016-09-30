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
$actividad_rubro	= mysql_real_escape_string(stripslashes($_POST['actividad_rubro']));
$estab_calle		= mysql_real_escape_string(stripslashes($_POST['estab_calle']));
$estab_numero		= mysql_real_escape_string(stripslashes($_POST['estab_numero']));
$estab_resto		= mysql_real_escape_string(stripslashes($_POST['estab_resto']));
$estab_telefono		= mysql_real_escape_string(stripslashes($_POST['estab_telefono']));
$estab_region		= mysql_real_escape_string(stripslashes($_POST['estab_region']));
$estab_ciudad		= mysql_real_escape_string(stripslashes($_POST['estab_ciudad']));
$propie_nombre		= mysql_real_escape_string(stripslashes($_POST['propie_nombre']));
$propie_ap_pat		= mysql_real_escape_string(stripslashes($_POST['propie_ap_pat']));
$propie_ap_mat		= mysql_real_escape_string(stripslashes($_POST['propie_ap_mat']));
$propie_rut			= mysql_real_escape_string(stripslashes($_POST['propie_rut']));
$propie_dv			= mysql_real_escape_string(stripslashes($_POST['propie_dv']));
$propie_calle		= mysql_real_escape_string(stripslashes($_POST['propie_calle']));
$propie_numero		= mysql_real_escape_string(stripslashes($_POST['propie_numero']));
$propie_resto		= mysql_real_escape_string(stripslashes($_POST['propie_resto']));
$propie_region		= mysql_real_escape_string(stripslashes($_POST['propie_region']));
$propie_ciudad		= mysql_real_escape_string(stripslashes($_POST['propie_region']));
$rep_leg_nombre		= mysql_real_escape_string(stripslashes($_POST['rep_leg_nombre']));
$rep_leg_ap_pat		= mysql_real_escape_string(stripslashes($_POST['rep_leg_ap_pat']));
$rep_leg_ap_mat		= mysql_real_escape_string(stripslashes($_POST['rep_leg_ap_mat']));
$rep_leg_rut		= mysql_real_escape_string(stripslashes($_POST['rep_leg_rut']));
$rep_leg_dv			= mysql_real_escape_string(stripslashes($_POST['rep_leg_dv']));
$rep_leg_calle		= mysql_real_escape_string(stripslashes($_POST['rep_leg_calle']));
$rep_leg_numero		= mysql_real_escape_string(stripslashes($_POST['rep_leg_numero']));
$rep_leg_resto		= mysql_real_escape_string(stripslashes($_POST['rep_leg_resto']));
$rep_leg_region		= mysql_real_escape_string(stripslashes($_POST['rep_leg_region']));
$rep_leg_ciudad		= mysql_real_escape_string(stripslashes($_POST['rep_leg_ciudad']));
$rep_leg_telefono	= mysql_real_escape_string(stripslashes($_POST['rep_leg_telefono']));
$rep_leg_email		= mysql_real_escape_string(stripslashes($_POST['rep_leg_email']));
$fecha_ingreso		= mysql_real_escape_string(stripslashes($_POST['fecha_ingreso']));

if(empty($nro_asd)) { echo $error."El campo <b>Numero ASDigital</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($actividad_rubro)) { echo $error."El campo <b>Actividad o Rubro</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($estab_calle)) { echo $error."El campo <b>Calle del Establecimiento</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($estab_numero)) { echo $error."El campo <b>Número del Establecimiento</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($estab_telefono)) { echo $error."El campo <b>Teléfono del Establecimiento</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($estab_region)) { echo $error."El campo <b>Región del Establecimiento</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($estab_ciudad)) { echo $error."El campo <b>Ciudad del Establecimiento</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($propie_nombre)) { echo $error."El campo <b>Nombre del Propietario</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($propie_ap_pat)) { echo $error."El campo <b>Apellido Paterno del Propietario</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($propie_ap_mat)) { echo $error."El campo <b>Apellido Materno del Propietario</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($propie_rut)) { echo $error."El campo <b>RUT del Propietario</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($propie_dv)) { echo $error."El campo <b>Digito verificador (DV) del Propietario</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($propie_calle)) { echo $error."El campo <b>Calle del Propietario</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($propie_numero)) { echo $error."El campo <b>Número del Propietario</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($propie_region)) { echo $error."El campo <b>Región del Propietario</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($propie_ciudad)) { echo $error."El campo <b>Ciudad del Propietario</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_nombre)) { echo $error."El campo <b>Nombre del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_ap_pat)) { echo $error."El campo <b>Apellido Paterno del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_ap_mat)) { echo $error."El campo <b>Apellido Materno del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_rut)) { echo $error."El campo <b>RUT del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_dv)) { echo $error."El campo <b>Digito Verificador (DV) del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_calle)) { echo $error."El campo <b>Calle del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_numero)) { echo $error."El campo <b>Número del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_region)) { echo $error."El campo <b>Región del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_ciudad)) { echo $error."El campo <b>Ciudad del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_telefono)) { echo $error."El campo <b>Teléfono del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_email)) { echo $error."El campo <b>Email del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($fecha_ingreso)) { echo $error."El campo <b>Fecha de Ingreso</b> no puede quedar vacio".$finerror; $cago = true; }
else {
	//echo $error."Error 41: Contacte al administrador".$finerror; $cago = true;
	if($cago == false) {
	//inserta la mierda
		$sql = "INSERT INTO 	l_9(
            nro_asd, actividad_rubro, estab_calle, estab_numero, 
            estab_resto, estab_telefono, estab_region, estab_ciudad, propie_nombre, 
            propie_ap_pat, propie_ap_mat, propie_rut, propie_dv, propie_calle, 
            propie_numero, propie_resto, propie_region, propie_ciudad, rep_leg_nombre, 
            rep_leg_ap_pat, rep_leg_ap_mat, rep_leg_rut, rep_leg_dv, rep_leg_calle, 
            rep_leg_numero, rep_leg_resto, rep_leg_region, rep_leg_ciudad, 
            rep_leg_telefono, rep_leg_email, fecha_ingreso)
    VALUES ('$nro_asd', '$actividad_rubro', '$estab_calle', '$estab_numero', 
            '$estab_resto', '$estab_telefono', '$estab_region', '$estab_ciudad', '$propie_nombre', 
            '$propie_ap_pat', '$propie_ap_mat', '$propie_rut', '$propie_dv', '$propie_calle', 
            '$propie_numero', '$propie_resto', '$propie_region', '$propie_ciudad', '$rep_leg_nombre', 
            '$rep_leg_ap_pat', '$rep_leg_ap_mat', '$rep_leg_rut', '$rep_leg_dv', '$rep_leg_calle', 
            '$rep_leg_numero', '$rep_leg_resto', '$rep_leg_region', '$rep_leg_ciudad', 
            '$rep_leg_telefono', '$rep_leg_email', '$fecha_ingreso')";
	pg_query("$sql");
	echo "Insertó la wea";

	}
	else{
	echo $error."Error 42: Contacte al administrador [No se guardo el registro]".$finerror; $cago = true;	
	}
}
?>