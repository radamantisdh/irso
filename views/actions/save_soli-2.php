<?php
//var_dump($_POST);

include("../../includes/db.class.php");
include("../../includes/setting.conf.php");

$db = new DB();
$db->conectar();
 	
$error = "<font color=red><center>";
$finerror = "</center></font>";

$cago = false;

$nro_asd 					= mysql_real_escape_string(stripslashes($_POST['nro_asd']));
$soli_nombre 				= mysql_real_escape_string(stripslashes($_POST['soli_nombre']));
$soli_ap_pat    			= mysql_real_escape_string(stripslashes($_POST['soli_ap_pat']));
$soli_ap_mat    			= mysql_real_escape_string(stripslashes($_POST['soli_ap_mat']));
$soli_rut					= mysql_real_escape_string(stripslashes($_POST['soli_rut']));
$soli_dv					= mysql_real_escape_string(stripslashes($_POST['soli_dv']));
$soli_calle					= mysql_real_escape_string(stripslashes($_POST['soli_calle']));
$soli_numero				= mysql_real_escape_string(stripslashes($_POST['soli_numero']));
$soli_resto					= mysql_real_escape_string(stripslashes($_POST['soli_resto']));
$soli_region				= mysql_real_escape_string(stripslashes($_POST['soli_region']));
$soli_ciudad				= mysql_real_escape_string(stripslashes($_POST['soli_ciudad']));
$soli_comuna 				= mysql_real_escape_string(stripslashes($_POST['soli_comuna']));
$soli_telefono				= mysql_real_escape_string(stripslashes($_POST['soli_telefono']));
$soli_celular 				= mysql_real_escape_string(stripslashes($_POST['soli_celular']));
$soli_email					= mysql_real_escape_string(stripslashes($_POST['soli_email']));
$rep_leg_nombre				= mysql_real_escape_string(stripslashes($_POST['rep_leg_nombre']));
$rep_leg_ap_pat				= mysql_real_escape_string(stripslashes($_POST['rep_leg_ap_pat']));
$rep_leg_ap_mat				= mysql_real_escape_string(stripslashes($_POST['rep_leg_ap_mat']));
$rep_leg_rut				= mysql_real_escape_string(stripslashes($_POST['rep_leg_rut']));
$rep_leg_dv					= mysql_real_escape_string(stripslashes($_POST['rep_leg_dv']));
$rep_leg_telefono			= mysql_real_escape_string(stripslashes($_POST['rep_leg_telefono']));
$rep_leg_celular			= mysql_real_escape_string(stripslashes($_POST['rep_leg_celular']));
$rep_leg_email				= mysql_real_escape_string(stripslashes($_POST['rep_leg_email']));
$inst_radio_calle			= mysql_real_escape_string(stripslashes($_POST['inst_radio_calle']));
$inst_radio_numero			= mysql_real_escape_string(stripslashes($_POST['inst_radio_numero']));
$inst_radio_resto			= mysql_real_escape_string(stripslashes($_POST['inst_radio_resto']));
$inst_radio_region			= mysql_real_escape_string(stripslashes($_POST['inst_radio_region']));
$inst_radio_ciudad			= mysql_real_escape_string(stripslashes($_POST['inst_radio_ciudad']));
$inst_radio_comuna			= mysql_real_escape_string(stripslashes($_POST['inst_radio_comuna']));
$inst_radio_coordenadax		= mysql_real_escape_string(stripslashes($_POST['inst_radio_coordenadax']));
$inst_radio_coordenaday		= mysql_real_escape_string(stripslashes($_POST['inst_radio_coordenaday']));
$inst_radio_ambito			= mysql_real_escape_string(stripslashes($_POST['inst_radio_ambito']));
$inst_radio_ambito_otro   	= mysql_real_escape_string(stripslashes($_POST['inst_radio_ambito_otro']));
$inst_radio_uso				= mysql_real_escape_string(stripslashes($_POST['inst_radio_uso']));
$inst_radio_uso_otro 		= mysql_real_escape_string(stripslashes($_POST['inst_radio_uso_otro']));
$inst_radio_tipo			= mysql_real_escape_string(stripslashes($_POST['inst_radio_tipo']));
$equipo_nombre1				= mysql_real_escape_string(stripslashes($_POST['equipo_nombre1']));
$equipo_marca1				= mysql_real_escape_string(stripslashes($_POST['equipo_marca1']));
$equipo_modelo1				= mysql_real_escape_string(stripslashes($_POST['equipo_modelo1']));
$equipo_num_serie1			= mysql_real_escape_string(stripslashes($_POST['equipo_num_serie1']));
$equipo_anio1				= mysql_real_escape_string(stripslashes($_POST['equipo_anio1']));
$equipo_num_tubo			= mysql_real_escape_string(stripslashes($_POST['equipo_num_tubo']));
$equipo_kv_max				= mysql_real_escape_string(stripslashes($_POST['equipo_kv_max']));
$equipo_ma_max				= mysql_real_escape_string(stripslashes($_POST['equipo_ma_max']));
$equipo_nombre2				= mysql_real_escape_string(stripslashes($_POST['equipo_nombre2']));
$equipo_marca2				= mysql_real_escape_string(stripslashes($_POST['equipo_marca2']));
$equipo_modelo2				= mysql_real_escape_string(stripslashes($_POST['equipo_modelo2']));
$equipo_num_serie2			= mysql_real_escape_string(stripslashes($_POST['equipo_num_serie2']));
$equipo_anio2				= mysql_real_escape_string(stripslashes($_POST['equipo_anio2']));
$equipo_radioiso1			= mysql_real_escape_string(stripslashes($_POST['equipo_radioiso1']));
$equipo_bq1					= mysql_real_escape_string(stripslashes($_POST['equipo_bq1']));
$equipo_calibracion1		= mysql_real_escape_string(stripslashes($_POST['equipo_calibracion1']));
$equipo_num_serie_r1		= mysql_real_escape_string(stripslashes($_POST['equipo_num_serie_r1']));
$equipo_radioiso2			= mysql_real_escape_string(stripslashes($_POST['equipo_radioiso2']));
$equipo_bq2					= mysql_real_escape_string(stripslashes($_POST['equipo_bq2']));
$equipo_calibracion2		= mysql_real_escape_string(stripslashes($_POST['equipo_calibracion2']));
$equipo_num_serie_r2		= mysql_real_escape_string(stripslashes($_POST['equipo_num_serie_r2']));
$seg_radio_nombre			= mysql_real_escape_string(stripslashes($_POST['seg_radio_nombre']));
$seg_radio_pat				= mysql_real_escape_string(stripslashes($_POST['seg_radio_pat']));
$seg_radio_mat				= mysql_real_escape_string(stripslashes($_POST['seg_radio_mat']));
$seg_radio_rut				= mysql_real_escape_string(stripslashes($_POST['seg_radio_rut']));
$seg_radio_dv				= mysql_real_escape_string(stripslashes($_POST['seg_radio_dv']));
$seg_radio_telefono			= mysql_real_escape_string(stripslashes($_POST['seg_radio_telefono']));
$seg_radio_celular			= mysql_real_escape_string(stripslashes($_POST['seg_radio_celular']));
$seg_radio_email			= mysql_real_escape_string(stripslashes($_POST['seg_radio_email']));
$seg_radio_profesion		= mysql_real_escape_string(stripslashes($_POST['seg_radio_profesion']));
$seg_radio_num_res			= mysql_real_escape_string(stripslashes($_POST['seg_radio_num_res']));
$seg_radio_fecha			= mysql_real_escape_string(stripslashes($_POST['seg_radio_fecha']));
$seg_radio_seremi_ot		= mysql_real_escape_string(stripslashes($_POST['seg_radio_seremi_ot']));
$dosimetria_nombre			= mysql_real_escape_string(stripslashes($_POST['dosimetria_nombre']));
$dosimetria_direccion		= mysql_real_escape_string(stripslashes($_POST['dosimetria_direccion']));
$dosimetria_telefono		= mysql_real_escape_string(stripslashes($_POST['dosimetria_telefono']));
$mantencion_nombre			= mysql_real_escape_string(stripslashes($_POST['mantencion_nombre']));
$mantencion_direccion		= mysql_real_escape_string(stripslashes($_POST['mantencion_direccion']));
$mantencion_telefono		= mysql_real_escape_string(stripslashes($_POST['mantencion_telefono']));
$residuos_nombre			= mysql_real_escape_string(stripslashes($_POST['residuos_nombre']));
$residuos_direccion			= mysql_real_escape_string(stripslashes($_POST['residuos_direccion']));
$residuos_telefono			= mysql_real_escape_string(stripslashes($_POST['residuos_telefono']));
$fecha_ingreso				= mysql_real_escape_string(stripslashes($_POST['fecha_ingreso']));

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
elseif(empty($inst_radio_calle)) { echo $error."El campo <b>Calle Instalaciones Radiactivas</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($inst_radio_numero)) { echo $error."El campo <b>Número de Instalaciones Radiactivas</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($inst_radio_region)) { echo $error."El campo <b>Región Instalaciones Radiactivas</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($inst_radio_ciudad)) { echo $error."El campo <b>Ciudad Instalaciones Radiactivas</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($inst_radio_comuna)) { echo $error."El campo <b>Comuna Instalaciones Radiactivas</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($inst_radio_coordenadax)) { echo $error."El campo <b>Coordenadas X</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($inst_radio_coordenaday)) { echo $error."El campo <b>Coordenadas Y</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($inst_radio_ambito)) { echo $error."El campo <b>Ámbito de las Instalaciones</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($inst_radio_uso)) { echo $error."El campo <b>Uso de Instalaciones o Equipos Radiactivos</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($inst_radio_tipo)) { echo $error."El campo <b>Tipo de Instalaciones o Equipos</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($equipo_nombre1)) { echo $error."El campo <b>Nombre del Equipo Generador de Rayos</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($equipo_marca1)) { echo $error."El campo <b>Marca del Equipo Generador de Rayos</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($equipo_modelo1)) { echo $error."El campo <b>Modelo del Equipo Generador de Rayos</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($equipo_num_serie1)) { echo $error."El campo <b>N° de Serie del Equipo Generador de Rayos</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($equipo_anio1)) { echo $error."El campo <b>Año de Fabricación del Equipo Generador de Rayos</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($equipo_num_tubo)) { echo $error."El campo <b>N° de Serie del Tubo de Equipo Generador de Rayos</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($equipo_kv_max)) { echo $error."El campo <b>kV máx. del Equipo Generador de Rayos</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($equipo_ma_max)) { echo $error."El campo <b>mA máx. del Equipo Generador de Rayos</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($equipo_nombre2)) { echo $error."El campo <b>Nombre del Equipo Para el Caso de Fuentes Radiactivas</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($equipo_marca2)) { echo $error."El campo <b>Marca del Equipo Para el Caso de Fuentes Radiactivas</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($equipo_modelo2)) { echo $error."El campo <b>Modelo del Equipo Para el Caso de Fuentes Radiactivas</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($equipo_num_serie2)) { echo $error."El campo <b>Número de Serie del Equipo Para el Caso de Fuentes Radiactivas</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($equipo_anio2)) { echo $error."El campo <b>Año de Fabricación del Equipo Para el Caso de Fuentes Radiactivas</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($equipo_radioiso1)) { echo $error."El campo <b>Radioisótopo 1</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($equipo_bq1)) { echo $error."El campo <b>Actividad Inicial en Bq Radioisótopo 1</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($equipo_calibracion1)) { echo $error."El campo <b>Fecha de Calibración Radioisótopo 1</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($equipo_num_serie_r1)) { echo $error."El campo <b>Número de Serie Radioisótopo 1</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_nombre)) { echo $error."El campo <b>Nombre del Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_pat)) { echo $error."El campo <b>Apellido Paterno del Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_mat)) { echo $error."El campo <b>Apellido Materno del Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_rut)) { echo $error."El campo <b>RUT del Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_dv)) { echo $error."El campo <b>Dígito Verificador (DV) del Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_telefono)) { echo $error."El campo <b>Teléfono del Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_celular)) { echo $error."El campo <b>Celular del Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_email)) { echo $error."El campo <b>Email del Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_profesion)) { echo $error."El campo <b>Profesión del Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_num_res)) { echo $error."El campo <b>N° de Resolución del Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_fecha)) { echo $error."El campo <b>Fecha en Responsable de Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_seremi_ot)) { echo $error."El campo <b>SEREMI que Otorga a Responsable de Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($dosimetria_nombre)) { echo $error."El campo <b>Nombre Empresa Dosimetría Personal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($dosimetria_direccion)) { echo $error."El campo <b>Dirección Empresa Dosimetría Personal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($dosimetria_telefono)) { echo $error."El campo <b>Teléfono Empresa Dosimetría Personal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($mantencion_nombre)) { echo $error."El campo <b>Nombre Empresa Mantención de Equipos</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($mantencion_direccion)) { echo $error."El campo <b>Dirección de Empresa Mantención de Equipos</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($mantencion_telefono)) { echo $error."El campo <b>Teléfono de Empresa Mantención de Equipos</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($residuos_nombre)) { echo $error."El campo <b>Nombre Empresa Disposición de Residuos</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($residuos_direccion)) { echo $error."El campo <b>Dirección de Empresa Disposición de Residuos</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($residuos_telefono)) { echo $error."El campo <b>Teléfono Empresa Disposición de Residuos</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($fecha_ingreso)) { echo $error."El campo <b>Fecha de Ingreso</b> no puede quedar vacio".$finerror; $cago = true; }
else {
	//echo $error."Error 41: Contacte al administrador".$finerror; $cago = true;
	if($cago == false) {
	//inserta la mierda
		$sql = "INSERT INTO 	soli_2(
            nro_asd, soli_nombre, soli_ap_pat, soli_ap_mat, soli_rut, 
            soli_dv, soli_calle, soli_numero, soli_resto, soli_region, soli_ciudad, 
            soli_comuna, soli_telefono, soli_celular, soli_email, rep_leg_nombre, 
            rep_leg_ap_pat, rep_leg_ap_mat, rep_leg_rut, rep_leg_dv, rep_leg_telefono, 
            rep_leg_celular, rep_leg_email, inst_radio_calle, inst_radio_numero, 
            inst_radio_resto, inst_radio_region, inst_radio_ciudad, inst_radio_comuna, 
            inst_radio_coordenadax, inst_radio_coordenaday, inst_radio_ambito, 
            inst_radio_ambito_otro, inst_radio_uso, inst_radio_uso_otro, 
            inst_radio_tipo, equipo_nombre1, equipo_marca1, equipo_modelo1, 
            equipo_num_serie1, equipo_anio1, equipo_num_tubo, equipo_kv_max, 
            equipo_ma_max, equipo_nombre2, equipo_marca2, equipo_modelo2, 
            equipo_num_serie2, equipo_anio2, equipo_radioiso1, equipo_bq1, 
            equipo_calibracion1, equipo_num_serie_r1, equipo_radioiso2, equipo_bq2, 
            equipo_calibracion2, equipo_num_serie_r2, seg_radio_nombre, seg_radio_pat, 
            seg_radio_mat, seg_radio_rut, seg_radio_dv, seg_radio_telefono, 
            seg_radio_celular, seg_radio_email, seg_radio_profesion, seg_radio_num_res, 
            seg_radio_fecha, seg_radio_seremi_ot, dosimetria_nombre, dosimetria_direccion, 
            dosimetria_telefono, mantencion_nombre, mantencion_direccion, 
            mantencion_telefono, residuos_nombre, residuos_direccion, residuos_telefono, 
            fecha_ingreso)
    VALUES ('$nro_asd', '$soli_nombre', '$soli_ap_pat', '$soli_ap_mat', '$soli_rut', 
            '$soli_dv', '$soli_calle', '$soli_numero', '$soli_resto', '$soli_region', '$soli_ciudad', 
            '$soli_comuna', '$soli_telefono', '$soli_celular', '$soli_email', '$rep_leg_nombre', 
            '$rep_leg_ap_pat', '$rep_leg_ap_mat', '$rep_leg_rut', '$rep_leg_dv', '$rep_leg_telefono', 
            '$rep_leg_celular', '$rep_leg_email', '$inst_radio_calle', '$inst_radio_numero', 
            '$inst_radio_resto', '$inst_radio_region', '$inst_radio_ciudad', '$inst_radio_comuna', 
            '$inst_radio_coordenadax', '$inst_radio_coordenaday', '$inst_radio_ambito', 
            '$inst_radio_ambito_otro', '$inst_radio_uso', '$inst_radio_uso_otro', 
            '$inst_radio_tipo', '$equipo_nombre1', '$equipo_marca1', '$equipo_modelo1', 
            '$equipo_num_serie1', '$equipo_anio1', '$equipo_num_tubo', '$equipo_kv_max', 
            '$equipo_ma_max', '$equipo_nombre2', '$equipo_marca2', '$equipo_modelo2', 
            '$equipo_num_serie2', '$equipo_anio2', '$equipo_radioiso1', '$equipo_bq1', 
            '$equipo_calibracion1', '$equipo_num_serie_r1', '$equipo_radioiso2', '$equipo_bq2', 
            '$equipo_calibracion2', '$equipo_num_serie_r2', '$seg_radio_nombre', '$seg_radio_pat', 
            '$seg_radio_mat', '$seg_radio_rut', '$seg_radio_dv', '$seg_radio_telefono', 
            '$seg_radio_celular', '$seg_radio_email', '$seg_radio_profesion', '$seg_radio_num_res', 
            '$seg_radio_fecha', '$seg_radio_seremi_ot', '$dosimetria_nombre', '$dosimetria_direccion', 
            '$dosimetria_telefono', '$mantencion_nombre', '$mantencion_direccion', 
            '$mantencion_telefono', '$residuos_nombre', '$residuos_direccion', '$residuos_telefono', 
            '$fecha_ingreso')";
	pg_query("$sql");
	echo "Insertó la wea";

	}
	else{
	echo $error."Error 42: Contacte al administrador [No se guardo el registro]".$finerror; $cago = true;	
	}
}
?>