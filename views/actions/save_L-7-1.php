<?php
//var_dump($_POST);

include("../../includes/db.class.php");
include("../../includes/setting.conf.php");

$db = new DB();
$db->conectar();
 	
$error = "<font color=red><center>";
$finerror = "</center></font>";

$cago = false;

$nro_asd 				= mysql_real_escape_string(stripslashes($_POST['nro_asd']));
$soli_nombre 			= mysql_real_escape_string(stripslashes($_POST['soli_nombre']));
$soli_ap_pat    		= mysql_real_escape_string(stripslashes($_POST['soli_ap_pat']));
$soli_ap_mat    	  	= mysql_real_escape_string(stripslashes($_POST['soli_ap_mat']));
$soli_rut			  	= mysql_real_escape_string(stripslashes($_POST['soli_rut']));
$soli_dv			  	= mysql_real_escape_string(stripslashes($_POST['soli_dv']));
$soli_calle			  	= mysql_real_escape_string(stripslashes($_POST['soli_calle']));
$soli_numero		  	= mysql_real_escape_string(stripslashes($_POST['soli_numero']));
$soli_resto			  	= mysql_real_escape_string(stripslashes($_POST['soli_resto']));
$soli_region		  	= mysql_real_escape_string(stripslashes($_POST['soli_region']));
$soli_ciudad		  	= mysql_real_escape_string(stripslashes($_POST['soli_ciudad']));
$soli_telefono		  	= mysql_real_escape_string(stripslashes($_POST['soli_telefono']));
$soli_email			  	= mysql_real_escape_string(stripslashes($_POST['soli_email']));
$soli_inst_ed_sup	  	= mysql_real_escape_string(stripslashes($_POST['soli_inst_ed_sup']));
$soli_nivel			  	= mysql_real_escape_string(stripslashes($_POST['soli_nivel']));
$soli_num_res_expert	= mysql_real_escape_string(stripslashes($_POST['soli_num_res_expert']));
$soli_num_reg			= mysql_real_escape_string(stripslashes($_POST['soli_num_reg']));
$fecha_ingreso		  	= mysql_real_escape_string(stripslashes($_POST['fecha_ingreso']));

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
elseif(empty($soli_telefono)) { echo $error."El campo <b>Teléfono</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_email)) { echo $error."El campo <b>Email</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_inst_ed_sup)) { echo $error."El campo <b>Institución de Educación Superior</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_nivel)) { echo $error."El campo <b>Nivel</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_num_res_expert)) { echo $error."El campo <b>Número de Resolución de Experto</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($soli_num_reg)) { echo $error."El campo <b>Número de Registro</b> no puede quedar vacio".$finerror; $cago = true; }
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

	//inserta la mierda
		$sql = "INSERT INTO 	l_7_1(
            nro_asd, soli_nombre, soli_ap_pat, soli_ap_mat, soli_rut, 
            soli_dv, soli_calle, soli_numero, soli_resto, soli_region, soli_ciudad, 
            soli_telefono, soli_email, soli_inst_ed_sup, soli_nivel, soli_num_res_expert, 
            soli_num_reg, fecha_ingreso)
    VALUES ('$nro_asd', '$soli_nombre', '$soli_ap_pat', '$soli_ap_mat', '$soli_rut', 
            '$soli_dv', '$soli_calle', '$soli_numero', '$soli_resto', '$frase1', '$frase2', 
            '$soli_telefono', '$soli_email', '$soli_inst_ed_sup', '$soli_nivel', '$soli_num_res_expert', 
            '$soli_num_reg', '$fecha_ingreso')";
	pg_query("$sql");
	echo "<script>alert('Formulario enviado exitosamente.'); location.href='?modulo=save'</script>";

	}
	else{
	echo $error."<font color=red><center>Error 42: Contacte al administrador [No se guardo el registro]</center></font>".$finerror; $cago = true;	
	}
}
?>