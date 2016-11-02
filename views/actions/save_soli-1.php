<?php
//var_dump($_POST);

include("../../includes/db.class.php");
include("../../includes/setting.conf.php");

$db = new DB();
$db->conectar(); //metodo que esta dando problema al enviar datos. al querer enviar tira el error del primer if (campo vacio)

$error = "<font color=red><center>";
$finerror = "</center></font>";

$cago = false;

$nro_asd 					= mysql_real_escape_string(stripslashes($_POST['nro_asd']));
$solicitud_tipo 			= mysql_real_escape_string(stripslashes($_POST['solicitud_tipo']));
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
$capacitacion_nombre		= mysql_real_escape_string(stripslashes($_POST['capacitacion_nombre']));
$capacitacion_num_res		= mysql_real_escape_string(stripslashes($_POST['capacitacion_num_res']));
$capacitacion_fecha 		= mysql_real_escape_string(stripslashes($_POST['capacitacion_fecha']));
$capacitacion_seremi_ot 	= mysql_real_escape_string(stripslashes($_POST['capacitacion_seremi_ot']));
$capacitacion_duracion 		= mysql_real_escape_string(stripslashes($_POST['capacitacion_duracion']));
$capacitacion_institucion 	= mysql_real_escape_string(stripslashes($_POST['capacitacion_institucion']));
$fecha_ingreso				= mysql_real_escape_string(stripslashes($_POST['fecha_ingreso']));

if(empty($nro_asd)) { echo $error."El campo <b>Numero ASDigital</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($solicitud_tipo)) { echo $error."El campo <b>Tipo de Solicitud</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_nombre)) { echo $error."El campo <b>Nombre del Solicitante</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_ap_pat)) { echo $error."El campo <b>Apellido Paterno del Solicitante</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_ap_mat)) { echo $error."El campo <b>Apellido Materno del Solicitante</b> no puede quedar vacio".$finerror; $cago = true; }
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
elseif(empty($capacitacion_nombre)) { echo $error."El campo <b>Nombre del Curso</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($capacitacion_num_res)) { echo $error."El campo <b>Número de Resolución</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($capacitacion_fecha)) { echo $error."El campo <b>Fecha de Capacitación</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($capacitacion_seremi_ot)) { echo $error."El campo <b>SEREMI que la otorga</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($capacitacion_duracion)) { echo $error."El campo <b>Duración de la Capacitación</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($capacitacion_institucion)) { echo $error."El campo <b>Institución que Impartió el Curso</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($fecha_ingreso)) { echo $error."El campo <b>Fecha de Ingreso</b> no puede quedar vacio".$finerror; $cago = true; }
else {
	//echo $error."Error 41: Contacte al administrador".$finerror; $cago = true;
	if($cago == false) {
            
      $frase = str_replace("_", " ", $solicitud_tipo);
      $numeros = array("0", "15", "14", "13", "12", "11", "10", "1", "2", "3", "4", "5", "6", "7", "8", "9");
            $regiones = array("seleccione region", "XV Region, Arica y Parinacota.", "XIV Region, Los Rios.", "RM, Metropolitana de Santiago.", 
                  "XII Región, Magallanes y de la Antártica Chilena.", "XI Region, Aisen del General Carlos Ibañez del Campo.", "X Región, Los Lagos.", "I Region, Tarapacá.", 
                  "II Region, Antofagasta.", "III Region, Atacama.", "IV Region, Coquimbo.", "V Region, Valparaiso.", "VI Region, Libertador General Bernardo O\ Higgins.",
                  "VII Region, Maule.", "VIII Region, Biobio.", "IX Region, La Araucania.");
      $frase1 = str_replace($numeros, $regiones, $soli_region);
      $frase2 = str_replace("_", " ", $soli_ciudad);
      $frase3 = str_replace("_", " ", $soli_comuna );

	//inserta la mierda
		$sql = "INSERT INTO 	soli_1(
            nro_asd, solicitud_tipo, soli_nombre, soli_ap_pat, 
            soli_ap_mat, soli_rut, soli_dv, soli_calle, soli_numero, soli_resto, 
            soli_region, soli_ciudad, soli_comuna, soli_telefono, soli_celular, 
            soli_email, capacitacion_nombre, capacitacion_num_res, capacitacion_fecha, 
            capacitacion_seremi_ot, capacitacion_duracion, capacitacion_institucion, 
            fecha_ingreso)
    VALUES ('$nro_asd', '$frase', '$soli_nombre', '$soli_ap_pat', 
            '$soli_ap_mat', '$soli_rut', '$soli_dv', '$soli_calle', '$soli_numero', '$soli_resto', 
            '$frase1', '$frase2', '$frase3', '$soli_telefono', '$soli_celular', 
            '$soli_email', '$capacitacion_nombre', '$capacitacion_num_res', '$capacitacion_fecha', 
            '$capacitacion_seremi_ot', '$capacitacion_duracion', '$capacitacion_institucion', 
            '$fecha_ingreso')";
	pg_query("$sql");
	echo "<script>alert('Formulario enviado exitosamente.'); location.href='?modulo=save'</script>";

	}
	else{
	echo $error."<font color=red><center>Error 42: Contacte al administrador [No se guardo el registro]</center></font>".$finerror; $cago = true;	
	}
}
?>
