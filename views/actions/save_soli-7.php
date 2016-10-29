<?php
//var_dump($_POST);

include("../../includes/db.class.php");
include("../../includes/setting.conf.php");

$db = new DB();
$db->conectar();
 	
$error = "<font color=red><center>";
$finerror = "</center></font>";

$cago = false;

$importacion					= mysql_real_escape_string(stripslashes($_POST['importacion']));
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
$instalacion_origen_calle		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_calle']));
$instalacion_origen_numero		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_numero']));
$instalacion_origen_resto		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_resto']));
$instalacion_origen_region		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_region']));
$instalacion_origen_ciudad		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_ciudad']));
$instalacion_origen_comuna		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_comuna']));
$instalacion_origen_num_res		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_num_res']));
$instalacion_origen_fecha		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_fecha']));
$instalacion_origen_seremi		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_seremi']));
$sustancia_cantidad1			= mysql_real_escape_string(stripslashes($_POST['sustancia_cantidad1']));
$sustancia_uso1					= mysql_real_escape_string(stripslashes($_POST['sustancia_uso1']));
$sustancia_radioiso1			= mysql_real_escape_string(stripslashes($_POST['sustancia_radioiso1']));
$sustancia_marca1				= mysql_real_escape_string(stripslashes($_POST['sustancia_marca1']));
$sustancia_modelo1				= mysql_real_escape_string(stripslashes($_POST['sustancia_modelo1']));
$sustancia_numero1				= mysql_real_escape_string(stripslashes($_POST['sustancia_numero1']));
$sustancia_act_bq1				= mysql_real_escape_string(stripslashes($_POST['sustancia_act_bq1']));
$sustancia_cantidad2			= mysql_real_escape_string(stripslashes($_POST['sustancia_cantidad2']));
$sustancia_uso2					= mysql_real_escape_string(stripslashes($_POST['sustancia_uso2']));
$sustancia_radioiso2			= mysql_real_escape_string(stripslashes($_POST['sustancia_radioiso2']));
$sustancia_marca2				= mysql_real_escape_string(stripslashes($_POST['sustancia_marca2']));
$sustancia_modelo2				= mysql_real_escape_string(stripslashes($_POST['sustancia_modelo2']));
$sustancia_numero2				= mysql_real_escape_string(stripslashes($_POST['sustancia_numero2']));
$sustancia_act_bq2				= mysql_real_escape_string(stripslashes($_POST['sustancia_act_bq2']));
$sustancia_cantidad3			= mysql_real_escape_string(stripslashes($_POST['sustancia_cantidad3']));
$sustancia_uso3					= mysql_real_escape_string(stripslashes($_POST['sustancia_uso3']));
$sustancia_radioiso3			= mysql_real_escape_string(stripslashes($_POST['sustancia_radioiso3']));
$sustancia_marca3				= mysql_real_escape_string(stripslashes($_POST['sustancia_marca3']));
$sustancia_modelo3				= mysql_real_escape_string(stripslashes($_POST['sustancia_modelo3']));
$sustancia_numero3				= mysql_real_escape_string(stripslashes($_POST['sustancia_numero3']));
$sustancia_act_bq3				= mysql_real_escape_string(stripslashes($_POST['sustancia_act_bq3']));
$sustancia_cantidad4			= mysql_real_escape_string(stripslashes($_POST['sustancia_cantidad4']));
$sustancia_uso4					= mysql_real_escape_string(stripslashes($_POST['sustancia_uso4']));
$sustancia_radioiso4			= mysql_real_escape_string(stripslashes($_POST['sustancia_radioiso4']));
$sustancia_marca4				= mysql_real_escape_string(stripslashes($_POST['sustancia_marca4']));
$sustancia_modelo4				= mysql_real_escape_string(stripslashes($_POST['sustancia_modelo4']));
$sustancia_numero4				= mysql_real_escape_string(stripslashes($_POST['sustancia_numero4']));
$sustancia_act_bq4				= mysql_real_escape_string(stripslashes($_POST['sustancia_act_bq4']));
$sustancia_cantidad5			= mysql_real_escape_string(stripslashes($_POST['sustancia_cantidad5']));
$sustancia_uso5					= mysql_real_escape_string(stripslashes($_POST['sustancia_uso5']));
$sustancia_radioiso5			= mysql_real_escape_string(stripslashes($_POST['sustancia_radioiso5']));
$sustancia_marca5				= mysql_real_escape_string(stripslashes($_POST['sustancia_marca5']));
$sustancia_modelo5				= mysql_real_escape_string(stripslashes($_POST['sustancia_modelo5']));
$sustancia_numero5				= mysql_real_escape_string(stripslashes($_POST['sustancia_numero5']));
$sustancia_act_bq5				= mysql_real_escape_string(stripslashes($_POST['sustancia_act_bq5']));
$equipo_eq_cantidad1			= mysql_real_escape_string(stripslashes($_POST['equipo_eq_cantidad1']));
$equipo_eq_tipo1				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_tipo1']));
$equipo_eq_marca1				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_marca1']));
$equipo_eq_modelo1				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_modelo1']));
$equipo_eq_serie1				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_serie1']));
$equipo_el_radioiso1			= mysql_real_escape_string(stripslashes($_POST['equipo_el_radioiso1']));
$equipo_el_marca1				= mysql_real_escape_string(stripslashes($_POST['equipo_el_marca1']));
$equipo_el_modelo1				= mysql_real_escape_string(stripslashes($_POST['equipo_el_modelo1']));
$equipo_el_serie1				= mysql_real_escape_string(stripslashes($_POST['equipo_el_serie1']));
$equipo_el_bq1					= mysql_real_escape_string(stripslashes($_POST['equipo_el_bq1']));
$equipo_eq_cantidad2			= mysql_real_escape_string(stripslashes($_POST['equipo_eq_cantidad2']));
$equipo_eq_tipo2				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_tipo2']));
$equipo_eq_marca2				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_marca2']));
$equipo_eq_modelo2				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_modelo2']));
$equipo_eq_serie2				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_serie2']));
$equipo_el_radioiso2			= mysql_real_escape_string(stripslashes($_POST['equipo_el_radioiso2']));
$equipo_el_marca2				= mysql_real_escape_string(stripslashes($_POST['equipo_el_marca2']));
$equipo_el_modelo2				= mysql_real_escape_string(stripslashes($_POST['equipo_el_modelo2']));
$equipo_el_serie2				= mysql_real_escape_string(stripslashes($_POST['equipo_el_serie2']));
$equipo_el_bq2					= mysql_real_escape_string(stripslashes($_POST['equipo_el_bq2']));
$equipo_eq_cantidad3			= mysql_real_escape_string(stripslashes($_POST['equipo_eq_cantidad3']));
$equipo_eq_tipo3				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_tipo3']));
$equipo_eq_marca3				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_marca3']));
$equipo_eq_modelo3				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_modelo3']));
$equipo_eq_serie3				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_serie3']));
$equipo_el_radioiso3			= mysql_real_escape_string(stripslashes($_POST['equipo_el_radioiso3']));
$equipo_el_marca3				= mysql_real_escape_string(stripslashes($_POST['equipo_el_marca3']));
$equipo_el_modelo3				= mysql_real_escape_string(stripslashes($_POST['equipo_el_modelo3']));
$equipo_el_serie3				= mysql_real_escape_string(stripslashes($_POST['equipo_el_serie3']));
$equipo_el_bq3					= mysql_real_escape_string(stripslashes($_POST['equipo_el_bq3']));
$equipo_eq_cantidad4			= mysql_real_escape_string(stripslashes($_POST['equipo_eq_cantidad4']));
$equipo_eq_tipo4				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_tipo4']));
$equipo_eq_marca4				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_marca4']));
$equipo_eq_modelo4				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_modelo4']));
$equipo_eq_serie4				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_serie4']));
$equipo_el_radioiso4			= mysql_real_escape_string(stripslashes($_POST['equipo_el_radioiso4']));
$equipo_el_marca4				= mysql_real_escape_string(stripslashes($_POST['equipo_el_marca4']));
$equipo_el_modelo4				= mysql_real_escape_string(stripslashes($_POST['equipo_el_modelo4']));
$equipo_el_serie4				= mysql_real_escape_string(stripslashes($_POST['equipo_el_serie4']));
$equipo_el_bq4					= mysql_real_escape_string(stripslashes($_POST['equipo_el_bq4']));
$equipo_eq_cantidad5			= mysql_real_escape_string(stripslashes($_POST['equipo_eq_cantidad5']));
$equipo_eq_tipo5				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_tipo5']));
$equipo_eq_marca5				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_marca5']));
$equipo_eq_modelo5				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_modelo5']));
$equipo_eq_serie5				= mysql_real_escape_string(stripslashes($_POST['equipo_eq_serie5']));
$equipo_el_radioiso5			= mysql_real_escape_string(stripslashes($_POST['equipo_el_radioiso5']));
$equipo_el_marca5				= mysql_real_escape_string(stripslashes($_POST['equipo_el_marca5']));
$equipo_el_modelo5				= mysql_real_escape_string(stripslashes($_POST['equipo_el_modelo5']));
$equipo_el_serie5				= mysql_real_escape_string(stripslashes($_POST['equipo_el_serie5']));
$equipo_el_bq5					= mysql_real_escape_string(stripslashes($_POST['equipo_el_bq5']));
$aduana							= mysql_real_escape_string(stripslashes($_POST['aduana']));
$pais_procedencia				= mysql_real_escape_string(stripslashes($_POST['pais_procedencia']));
$fabricante						= mysql_real_escape_string(stripslashes($_POST['fabricante']));
$representante_vendedor			= mysql_real_escape_string(stripslashes($_POST['representante_vendedor']));
$valor_cif						= mysql_real_escape_string(stripslashes($_POST['valor_cif']));
$observaciones					= mysql_real_escape_string(stripslashes($_POST['observaciones']));
$fecha_ingreso					= mysql_real_escape_string(stripslashes($_POST['fecha_ingreso']));

if(empty($importacion)) { echo $error."El campo <b>Tipo de Importación</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($nro_asd)) { echo $error."El campo <b>Numero ASDigital</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_nombre)) { echo $error."El campo <b>Nombre</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_ap_pat)) { echo $error."El campo <b>Apellido Paterno</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_ap_mat)) { echo $error."El campo <b>Apellido Materno</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_rut)) { echo $error."El campo <b>RUT</b> no puede quedar vacio".$finerror; $cago = true; }
//elseif(empty($soli_dv)) { echo $error."El campo <b>Digito Verificador (DV)</b> no puede quedar vacio".$finerror; $cago = true; }
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
//elseif(empty($rep_leg_dv)) { echo $error."El campo <b>Digito Verificador (DV) del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_telefono)) { echo $error."El campo <b>Teléfono del Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_celular)) { echo $error."El campo <b>Celular Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($rep_leg_email)) { echo $error."El campo <b>Email Representate Legal</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_calle)) { echo $error."El campo <b>Calle Instalación de Origen</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_numero)) { echo $error."El campo <b>Número Instalación de Origen</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_region)) { echo $error."El campo <b>Región Instalación de Origen</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_ciudad)) { echo $error."El campo <b>Ciudad Instalación de Origen</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_comuna)) { echo $error."El campo <b>Comúna Instalación de Origen</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_num_res)) { echo $error."El campo <b>Número Resolución (Punto 3)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_fecha)) { echo $error."El campo <b>Fecha (Punto 3)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_seremi)) { echo $error."El campo <b>SEREMI que Autoriza (Punto 3)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($aduana)) { echo $error."El campo <b>Aduana donde Arrivarán los Productos</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($pais_procedencia)) { echo $error."El campo <b>País Procedencia</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($fabricante)) { echo $error."El campo <b>Fabricante</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($representante_vendedor)) { echo $error."El campo <b>Representante o Vendedor</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($valor_cif)) { echo $error."El campo <b>Valor CIF</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($fecha_ingreso)) { echo $error."El campo <b>Fecha de Ingreso</b> no puede quedar vacio".$finerror; $cago = true; }
else {
	//echo $error."Error 41: Contacte al administrador".$finerror; $cago = true;
	if($cago == false) {
		$frase = str_replace("_", " ", $importacion);

		$numeros = array("0", "15", "14", "13", "12", "11", "10", "1", "2", "3", "4", "5", "6", "7", "8", "9");
            $regiones = array("seleccione region", "XV Region, Arica y Parinacota.", "XIV Region, Los Rios.", "RM, Metropolitana de Santiago.", 
                  "XII Región, Magallanes y de la Antártica Chilena.", "XI Region, Aisen del General Carlos Ibañez del Campo.", "X Región, Los Lagos.", "I Region, Tarapacá.", 
                  "II Region, Antofagasta.", "III Region, Atacama.", "IV Region, Coquimbo.", "V Region, Valparaiso.", "VI Region, Libertador General Bernardo O\ Higgins.",
            "VII Region, Maule.", "VIII Region, Biobio.", "IX Region, La Araucania.");
            $frase1 = str_replace($numeros, $regiones, $soli_region);
            $frase2 = str_replace("_", " ", $soli_ciudad);
            $frase3 = str_replace("_", " ", $soli_comuna);
            
            $frase4 = str_replace($numeros, $regiones, $instalacion_origen_region);
            $frase5 = str_replace("_", " ", $instalacion_origen_ciudad);
            $frase6 = str_replace("_", " ", $instalacion_origen_comuna);
            
	//inserta la mierda
		$sql = "INSERT INTO 	soli_7(
            importacion, nro_asd, soli_nombre, soli_ap_pat, soli_ap_mat, 
            soli_rut, soli_dv, soli_calle, soli_numero, soli_resto, soli_region, 
            soli_ciudad, soli_comuna, soli_telefono, soli_celular, soli_email, 
            rep_leg_nombre, rep_leg_ap_pat, rep_leg_ap_mat, rep_leg_rut, 
            rep_leg_dv, rep_leg_telefono, rep_leg_celular, rep_leg_email, 
            instalacion_origen_calle, instalacion_origen_numero, instalacion_origen_resto, 
            instalacion_origen_region, instalacion_origen_ciudad, instalacion_origen_comuna, 
            instalacion_origen_num_res, instalacion_origen_fecha, instalacion_origen_seremi, 
            sustancia_cantidad1, sustancia_uso1, sustancia_radioiso1, sustancia_marca1, 
            sustancia_modelo1, sustancia_numero1, sustancia_act_bq1, sustancia_cantidad2, 
            sustancia_uso2, sustancia_radioiso2, sustancia_marca2, sustancia_modelo2, 
            sustancia_numero2, sustancia_act_bq2, sustancia_cantidad3, sustancia_uso3, 
            sustancia_radioiso3, sustancia_marca3, sustancia_modelo3, sustancia_numero3, 
            sustancia_act_bq3, sustancia_cantidad4, sustancia_uso4, sustancia_radioiso4, 
            sustancia_marca4, sustancia_modelo4, sustancia_numero4, sustancia_act_bq4, 
            sustancia_cantidad5, sustancia_uso5, sustancia_radioiso5, sustancia_marca5, 
            sustancia_modelo5, sustancia_numero5, sustancia_act_bq5, equipo_eq_cantidad1, 
            equipo_eq_tipo1, equipo_eq_marca1, equipo_eq_modelo1, equipo_eq_serie1, 
            equipo_el_radioiso1, equipo_el_marca1, equipo_el_modelo1, equipo_el_serie1, 
            equipo_el_bq1, equipo_eq_cantidad2, equipo_eq_tipo2, equipo_eq_marca2, 
            equipo_eq_modelo2, equipo_eq_serie2, equipo_el_radioiso2, equipo_el_marca2, 
            equipo_el_modelo2, equipo_el_serie2, equipo_el_bq2, equipo_eq_cantidad3, 
            equipo_eq_tipo3, equipo_eq_marca3, equipo_eq_modelo3, equipo_eq_serie3, 
            equipo_el_radioiso3, equipo_el_marca3, equipo_el_modelo3, equipo_el_serie3, 
            equipo_el_bq3, equipo_eq_cantidad4, equipo_eq_tipo4, equipo_eq_marca4, 
            equipo_eq_modelo4, equipo_eq_serie4, equipo_el_radioiso4, equipo_el_marca4, 
            equipo_el_modelo4, equipo_el_serie4, equipo_el_bq4, equipo_eq_cantidad5, 
            equipo_eq_tipo5, equipo_eq_marca5, equipo_eq_modelo5, equipo_eq_serie5, 
            equipo_el_radioiso5, equipo_el_marca5, equipo_el_modelo5, equipo_el_serie5, 
            equipo_el_bq5, aduana, pais_procedencia, fabricante, representante_vendedor, 
            valor_cif, observaciones, fecha_ingreso)
    VALUES ('$frase', '$nro_asd', '$soli_nombre', '$soli_ap_pat', '$soli_ap_mat', 
            '$soli_rut', '$soli_dv', '$soli_calle', '$soli_numero', '$soli_resto', '$frase1', 
            '$frase2', '$frase3', '$soli_telefono', '$soli_celular', '$soli_email', 
            '$rep_leg_nombre', '$rep_leg_ap_pat', '$rep_leg_ap_mat', '$rep_leg_rut', 
            '$rep_leg_dv', '$rep_leg_telefono', '$rep_leg_celular', '$rep_leg_email', 
            '$instalacion_origen_calle', '$instalacion_origen_numero', '$instalacion_origen_resto', 
            '$frase4', '$frase5', '$frase6', 
            '$instalacion_origen_num_res', '$instalacion_origen_fecha', '$instalacion_origen_seremi', 
            '$sustancia_cantidad1', '$sustancia_uso1', '$sustancia_radioiso1', '$sustancia_marca1', 
            '$sustancia_modelo1', '$sustancia_numero1', '$sustancia_act_bq1', '$sustancia_cantidad2', 
            '$sustancia_uso2', '$sustancia_radioiso2', '$sustancia_marca2', '$sustancia_modelo2', 
            '$sustancia_numero2', '$sustancia_act_bq2', '$sustancia_cantidad3', '$sustancia_uso3', 
            '$sustancia_radioiso3', '$sustancia_marca3', '$sustancia_modelo3', '$sustancia_numero3', 
            '$sustancia_act_bq3', '$sustancia_cantidad4', '$sustancia_uso4', '$sustancia_radioiso4', 
            '$sustancia_marca4', '$sustancia_modelo4', '$sustancia_numero4', '$sustancia_act_bq4', 
            '$sustancia_cantidad5', '$sustancia_uso5', '$sustancia_radioiso5', '$sustancia_marca5', 
            '$sustancia_modelo5', '$sustancia_numero5', '$sustancia_act_bq5', '$equipo_eq_cantidad1', 
            '$equipo_eq_tipo1', '$equipo_eq_marca1', '$equipo_eq_modelo1', '$equipo_eq_serie1', 
            '$equipo_el_radioiso1', '$equipo_el_marca1', '$equipo_el_modelo1', '$equipo_el_serie1', 
            '$equipo_el_bq1', '$equipo_eq_cantidad2', '$equipo_eq_tipo2', '$equipo_eq_marca2', 
            '$equipo_eq_modelo2', '$equipo_eq_serie2', '$equipo_el_radioiso2', '$equipo_el_marca2', 
            '$equipo_el_modelo2', '$equipo_el_serie2', '$equipo_el_bq2', '$equipo_eq_cantidad3', 
            '$equipo_eq_tipo3', '$equipo_eq_marca3', '$equipo_eq_modelo3', '$equipo_eq_serie3', 
            '$equipo_el_radioiso3', '$equipo_el_marca3', '$equipo_el_modelo3', '$equipo_el_serie3', 
            '$equipo_el_bq3', '$equipo_eq_cantidad4', '$equipo_eq_tipo4', '$equipo_eq_marca4', 
            '$equipo_eq_modelo4', '$equipo_eq_serie4', '$equipo_el_radioiso4', '$equipo_el_marca4', 
            '$equipo_el_modelo4', '$equipo_el_serie4', '$equipo_el_bq4', '$equipo_eq_cantidad5', 
            '$equipo_eq_tipo5', '$equipo_eq_marca5', '$equipo_eq_modelo5', '$equipo_eq_serie5', 
            '$equipo_el_radioiso5', '$equipo_el_marca5', '$equipo_el_modelo5', '$equipo_el_serie5', 
            '$equipo_el_bq5', '$aduana', '$pais_procedencia', '$fabricante', '$representante_vendedor', 
            '$valor_cif', '$observaciones', '$fecha_ingreso')";
	pg_query("$sql");
	echo "<script>alert('Formulario enviado exitosamente.'); location.href='?modulo=save'</script>";

	}
	else{
	echo $error."<font color=red><center>Error 42: Contacte al administrador [No se guardo el registro]</center></font>".$finerror; $cago = true;	
	}
}
?>