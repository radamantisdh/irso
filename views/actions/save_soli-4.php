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
$soli_ap_pat    				= mysql_real_escape_string(stripslashes($_POST['soli_ap_pat']));
$soli_ap_mat    				= mysql_real_escape_string(stripslashes($_POST['soli_ap_mat']));
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
$rep_leg_telefono				= mysql_real_escape_string(stripslashes($_POST['rep_leg_telefono']));
$rep_leg_celular				= mysql_real_escape_string(stripslashes($_POST['rep_leg_celular']));
$rep_leg_email				= mysql_real_escape_string(stripslashes($_POST['rep_leg_email']));
$instalacion_origen_calle		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_calle']));
$instalacion_origen_numero		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_numero']));
$instalacion_origen_resto		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_resto']));
$instalacion_origen_region		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_region']));
$instalacion_origen_ciudad		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_ciudad']));
$instalacion_origen_comuna		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_comuna']));
$instalacion_origen_num_res		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_num_res']));
$instalacion_origen_fecha		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_fecha']));
$instalacion_origen_seremi		= mysql_real_escape_string(stripslashes($_POST['instalacion_origen_seremi']));
$instalacion_destino_calle		= mysql_real_escape_string(stripslashes($_POST['instalacion_destino_calle']));
$instalacion_destino_numero		= mysql_real_escape_string(stripslashes($_POST['instalacion_destino_numero']));
$instalacion_destino_resto		= mysql_real_escape_string(stripslashes($_POST['instalacion_destino_resto']));
$instalacion_destino_region		= mysql_real_escape_string(stripslashes($_POST['instalacion_destino_region']));
$instalacion_destino_ciudad		= mysql_real_escape_string(stripslashes($_POST['instalacion_destino_ciudad']));
$instalacion_destino_comuna		= mysql_real_escape_string(stripslashes($_POST['instalacion_destino_comuna']));
$instalacion_destino_num_res	      = mysql_real_escape_string(stripslashes($_POST['instalacion_destino_num_res']));
$instalacion_destino_fecha		= mysql_real_escape_string(stripslashes($_POST['instalacion_destino_fecha']));
$instalacion_destino_seremi		= mysql_real_escape_string(stripslashes($_POST['instalacion_destino_seremi']));
$seg_radio_nombre				= mysql_real_escape_string(stripslashes($_POST['seg_radio_nombre']));
$seg_radio_ap_pat				= mysql_real_escape_string(stripslashes($_POST['seg_radio_ap_pat']));
$seg_radio_ap_mat				= mysql_real_escape_string(stripslashes($_POST['seg_radio_ap_mat']));
$seg_radio_rut				= mysql_real_escape_string(stripslashes($_POST['seg_radio_rut']));
$seg_radio_dv				= mysql_real_escape_string(stripslashes($_POST['seg_radio_dv']));
$seg_radio_telefono			= mysql_real_escape_string(stripslashes($_POST['seg_radio_telefono']));
$seg_radio_celular			= mysql_real_escape_string(stripslashes($_POST['seg_radio_celular']));
$seg_radio_email				= mysql_real_escape_string(stripslashes($_POST['seg_radio_email']));
$seg_radio_profesion			= mysql_real_escape_string(stripslashes($_POST['seg_radio_profesion']));
$seg_radio_num_res			= mysql_real_escape_string(stripslashes($_POST['seg_radio_num_res']));
$seg_radio_fecha				= mysql_real_escape_string(stripslashes($_POST['seg_radio_fecha']));
$seg_radio_seremi_ot			= mysql_real_escape_string(stripslashes($_POST['seg_radio_seremi_ot']));
$transporte_via				= mysql_real_escape_string(stripslashes($_POST['transporte_via']));
$transporte_ruta				= mysql_real_escape_string(stripslashes($_POST['transporte_ruta']));
$sustancia_radioiso			= mysql_real_escape_string(stripslashes($_POST['sustancia_radioiso']));
$sustancia_bq				= mysql_real_escape_string(stripslashes($_POST['sustancia_bq']));
$sustancia_calibracion			= mysql_real_escape_string(stripslashes($_POST['sustancia_calibracion']));
$sustancia_num_serie			= mysql_real_escape_string(stripslashes($_POST['sustancia_num_serie']));
$sustancia_uso				= mysql_real_escape_string(stripslashes($_POST['sustancia_uso']));
$equipo_nombre1				= mysql_real_escape_string(stripslashes($_POST['equipo_nombre1']));
$equipo_marca1				= mysql_real_escape_string(stripslashes($_POST['equipo_marca1']));
$equipo_modelo1				= mysql_real_escape_string(stripslashes($_POST['equipo_modelo1']));
$equipo_num_serie				= mysql_real_escape_string(stripslashes($_POST['equipo_num_serie']));
$equipo_anio1				= mysql_real_escape_string(stripslashes($_POST['equipo_anio1']));
$equipo_radioiso1				= mysql_real_escape_string(stripslashes($_POST['equipo_radioiso1']));
$equipo_bq1					= mysql_real_escape_string(stripslashes($_POST['equipo_bq1']));	
$equipo_calibracion1			= mysql_real_escape_string(stripslashes($_POST['equipo_calibracion1']));
$equipo_num_serie1			= mysql_real_escape_string(stripslashes($_POST['equipo_num_serie1']));
$equipo_radioiso2				= mysql_real_escape_string(stripslashes($_POST['equipo_radioiso2']));
$equipo_bq2					= mysql_real_escape_string(stripslashes($_POST['equipo_bq2']));
$equipo_calibracion2			= mysql_real_escape_string(stripslashes($_POST['equipo_calibracion2']));
$equipo_num_serie2			= mysql_real_escape_string(stripslashes($_POST['equipo_num_serie2']));
$equipo_uso					= mysql_real_escape_string(stripslashes($_POST['equipo_uso']));
$categoria_bulto				= mysql_real_escape_string(stripslashes($_POST['categoria_bulto']));
$transporte_indice			= mysql_real_escape_string(stripslashes($_POST['transporte_indice']));
$fecha_ingreso				= mysql_real_escape_string(stripslashes($_POST['fecha_ingreso']));

if(empty($nro_asd)) { echo $error."El campo <b>Numero ASDigital</b> no puede quedar vacio".$finerror; $cago = true; }
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
elseif(empty($instalacion_origen_region)) { echo $error."El campo <b>Región de Instalación de Origen</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_ciudad)) { echo $error."El campo <b>Ciudad de Instalación de Origen</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_comuna)) { echo $error."El campo <b>Comuna Instalación de Origen</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_num_res)) { echo $error."El campo <b>Número de Resolución (Instalación de Origen)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_fecha)) { echo $error."El campo <b>Fecha (Instalación de Origen)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_origen_seremi)) { echo $error."El campo <b>SEREMI Salud que Otorga (Instalación de Origen)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_destino_calle)) { echo $error."El campo <b>Calle Instalación de Destino</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_destino_numero)) { echo $error."El campo <b>Número Instalación de Destino</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_destino_region)) { echo $error."El campo <b>Región Instalación de Destino</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_destino_ciudad)) { echo $error."El campo <b>Ciudad Instalación de Destino</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_destino_comuna)) { echo $error."El campo <b>Comuna Instalación de Destino</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_destino_num_res)) { echo $error."El campo <b>Número de Resolución (Instalacion de Destino)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_destino_fecha)) { echo $error."El campo <b>Fecha (Instalación de Destino)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($instalacion_destino_seremi)) { echo $error."El campo <b>SEREMI que Otorga (Instalación de Destino)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_nombre)) { echo $error."El campo <b>Nombre Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_ap_pat)) { echo $error."El campo <b>Apellido Paterno Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_ap_mat)) { echo $error."El campo <b>Apellido Materno Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_rut)) { echo $error."El campo <b>RUT Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
//elseif(empty($seg_radio_dv)) { echo $error."El campo <b>Digito Verificador (DV) Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_telefono)) { echo $error."El campo <b>Teléfono Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_celular)) { echo $error."El campo <b>Celular Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_email)) { echo $error."El campo <b>Email Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_profesion)) { echo $error."El campo <b>Profesión Responsable de la Seguridad Radiológica</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_num_res)) { echo $error."El campo <b>Número de Resolución (Responsable de la Seguridad Radiológica)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_fecha)) { echo $error."El campo <b>Fecha (Responsable de la Seguridad Radiológica)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($seg_radio_seremi_ot)) { echo $error."El campo <b>SEREMI que Otorga (Responsable de la Seguridad Radiológica)</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($transporte_via)) { echo $error."El campo <b>Vía de Transporte</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($transporte_ruta)) { echo $error."El campo <b>Ruta a Seguir</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($categoria_bulto)) { echo $error."El campo <b>Categoría del Bulto</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($transporte_indice)) { echo $error."El campo <b>Índice de Transporte</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($fecha_ingreso)) { echo $error."El campo <b>Fecha de Ingreso</b> no puede quedar vacio".$finerror; $cago = true; }
else {
	//echo $error."Error 41: Contacte al administrador".$finerror; $cago = true;
	if($cago == false) {

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

            $frase7 = str_replace($numeros, $regiones, $instalacion_destino_region);
            $frase8 = str_replace("_", " ", $instalacion_destino_ciudad);
            $frase9 = str_replace("_", " ", $instalacion_destino_comuna);

	//inserta la mierda
		$sql = "INSERT INTO 	soli_4(
            nro_asd, soli_nombre, soli_ap_pat, soli_ap_mat, soli_rut, 
            soli_dv, soli_calle, soli_numero, soli_resto, soli_region, soli_ciudad, 
            soli_comuna, soli_telefono, soli_celular, soli_email, rep_leg_nombre, 
            rep_leg_ap_pat, rep_leg_ap_mat, rep_leg_rut, rep_leg_dv, rep_leg_telefono, 
            rep_leg_celular, rep_leg_email, instalacion_origen_calle, instalacion_origen_numero, 
            instalacion_origen_resto, instalacion_origen_region, instalacion_origen_ciudad, 
            instalacion_origen_comuna, instalacion_origen_num_res, instalacion_origen_fecha, 
            instalacion_origen_seremi, instalacion_destino_calle, instalacion_destino_numero, 
            instalacion_destino_resto, instalacion_destino_region, instalacion_destino_ciudad, 
            instalacion_destino_comuna, instalacion_destino_num_res, instalacion_destino_fecha, 
            instalacion_destino_seremi, seg_radio_nombre, seg_radio_ap_pat, 
            seg_radio_ap_mat, seg_radio_rut, seg_radio_dv, seg_radio_telefono, 
            seg_radio_celular, seg_radio_email, seg_radio_profesion, seg_radio_num_res, 
            seg_radio_fecha, seg_radio_seremi_ot, transporte_via, transporte_ruta, 
            sustancia_radioiso, sustancia_bq, sustancia_calibracion, sustancia_num_serie, 
            sustancia_uso, equipo_nombre1, equipo_marca1, equipo_modelo1, 
            equipo_num_serie, equipo_anio1, equipo_radioiso1, equipo_bq1, 
            equipo_calibracion1, equipo_num_serie1, equipo_radioiso2, equipo_bq2, 
            equipo_calibracion2, equipo_num_serie2, equipo_uso, categoria_bulto, 
            transporte_indice, fecha_ingreso)
    VALUES ('$nro_asd', '$soli_nombre', '$soli_ap_pat', '$soli_ap_mat', '$soli_rut', 
            '$soli_dv', '$soli_calle', '$soli_numero', '$soli_resto', '$frase1', '$frase2', 
            '$frase3', '$soli_telefono', '$soli_celular', '$soli_email', '$rep_leg_nombre', 
            '$rep_leg_ap_pat', '$rep_leg_ap_mat', '$rep_leg_rut', '$rep_leg_dv', '$rep_leg_telefono', 
            '$rep_leg_celular', '$rep_leg_email', '$instalacion_origen_calle', '$instalacion_origen_numero', 
            '$instalacion_origen_resto', '$frase4', '$frase5', 
            '$frase6', '$instalacion_origen_num_res', '$instalacion_origen_fecha', 
            '$instalacion_origen_seremi', '$instalacion_destino_calle', '$instalacion_destino_numero', 
            '$instalacion_destino_resto', '$frase7', '$frase8', 
            '$frase9', '$instalacion_destino_num_res', '$instalacion_destino_fecha', 
            '$instalacion_destino_seremi', '$seg_radio_nombre', '$seg_radio_ap_pat', 
            '$seg_radio_ap_mat', '$seg_radio_rut', '$seg_radio_dv', '$seg_radio_telefono', 
            '$seg_radio_celular', '$seg_radio_email', '$seg_radio_profesion', '$seg_radio_num_res', 
            '$seg_radio_fecha', '$seg_radio_seremi_ot', '$transporte_via', '$transporte_ruta', 
            '$sustancia_radioiso', '$sustancia_bq', '$sustancia_calibracion', '$sustancia_num_serie', 
            '$sustancia_uso', '$equipo_nombre1', '$equipo_marca1', '$equipo_modelo1', 
            '$equipo_num_serie', '$equipo_anio1', '$equipo_radioiso1', '$equipo_bq1', 
            '$equipo_calibracion1', '$equipo_num_serie1', '$equipo_radioiso2', '$equipo_bq2', 
            '$equipo_calibracion2', '$equipo_num_serie2', '$equipo_uso', '$categoria_bulto', 
            '$transporte_indice', '$fecha_ingreso')";
	pg_query("$sql");
	echo "<script>alert('Formulario enviado exitosamente.'); location.href='?modulo=save'</script>";

      }
      else{
      echo $error."<font color=red><center>Error 42: Contacte al administrador [No se guardo el registro]</center></font>".$finerror; $cago = true;   
      }
}
?>