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
$soli_ap_pat    	      = mysql_real_escape_string(stripslashes($_POST['soli_ap_pat']));
$soli_ap_mat    	      = mysql_real_escape_string(stripslashes($_POST['soli_ap_mat']));
$soli_rut			= mysql_real_escape_string(stripslashes($_POST['soli_rut']));
$soli_dv			= mysql_real_escape_string(stripslashes($_POST['soli_dv']));
$soli_calle			= mysql_real_escape_string(stripslashes($_POST['soli_calle']));
$soli_numero		= mysql_real_escape_string(stripslashes($_POST['soli_numero']));
$soli_resto			= mysql_real_escape_string(stripslashes($_POST['soli_resto']));
$soli_region		= mysql_real_escape_string(stripslashes($_POST['soli_region']));
$soli_ciudad		= mysql_real_escape_string(stripslashes($_POST['soli_ciudad']));
$soli_comuna 		= mysql_real_escape_string(stripslashes($_POST['soli_comuna']));
$soli_telefono		= mysql_real_escape_string(stripslashes($_POST['soli_telefono']));
$soli_celular 		= mysql_real_escape_string(stripslashes($_POST['soli_celular']));
$soli_email			= mysql_real_escape_string(stripslashes($_POST['soli_email']));
$rep_leg_nombre		= mysql_real_escape_string(stripslashes($_POST['rep_leg_nombre']));
$rep_leg_ap_pat		= mysql_real_escape_string(stripslashes($_POST['rep_leg_ap_pat']));
$rep_leg_ap_mat		= mysql_real_escape_string(stripslashes($_POST['rep_leg_ap_mat']));
$rep_leg_rut		= mysql_real_escape_string(stripslashes($_POST['rep_leg_rut']));
$rep_leg_dv			= mysql_real_escape_string(stripslashes($_POST['rep_leg_dv']));
$rep_leg_telefono	      = mysql_real_escape_string(stripslashes($_POST['rep_leg_telefono']));
$rep_leg_celular	      = mysql_real_escape_string(stripslashes($_POST['rep_leg_celular']));
$rep_leg_email		= mysql_real_escape_string(stripslashes($_POST['rep_leg_email']));
$estab_nombre		= mysql_real_escape_string(stripslashes($_POST['estab_nombre']));
$estab_calle		= mysql_real_escape_string(stripslashes($_POST['estab_calle']));
$estab_numero		= mysql_real_escape_string(stripslashes($_POST['estab_numero']));
$estab_resto		= mysql_real_escape_string(stripslashes($_POST['estab_resto']));
$estab_region		= mysql_real_escape_string(stripslashes($_POST['estab_region']));
$estab_ciudad		= mysql_real_escape_string(stripslashes($_POST['estab_ciudad']));
$estab_comuna		= mysql_real_escape_string(stripslashes($_POST['estab_comuna']));
$estab_telefono		= mysql_real_escape_string(stripslashes($_POST['estab_telefono']));
$estab_celular		= mysql_real_escape_string(stripslashes($_POST['estab_celular']));
$estab_email		= mysql_real_escape_string(stripslashes($_POST['estab_email']));
$curso_numero		= mysql_real_escape_string(stripslashes($_POST['curso_numero']));
$curso_nombre		= mysql_real_escape_string(stripslashes($_POST['curso_nombre']));
$curso_fecha		= mysql_real_escape_string(stripslashes($_POST['curso_fecha']));
$curso_horario          = mysql_real_escape_string(stripslashes($_POST['curso_horario']));
$curso_numero1		= mysql_real_escape_string(stripslashes($_POST['curso_numero1']));
$curso_nombre1		= mysql_real_escape_string(stripslashes($_POST['curso_nombre1']));
$curso_fecha1		= mysql_real_escape_string(stripslashes($_POST['curso_fecha1']));
$curso_horario1         = mysql_real_escape_string(stripslashes($_POST['curso_horario1']));
$curso_numero2		= mysql_real_escape_string(stripslashes($_POST['curso_numero2']));
$curso_nombre2		= mysql_real_escape_string(stripslashes($_POST['curso_nombre2']));
$curso_fecha2		= mysql_real_escape_string(stripslashes($_POST['curso_fecha2']));
$curso_horario2         = mysql_real_escape_string(stripslashes($_POST['curso_horario2']));
$relatores_nombre	      = mysql_real_escape_string(stripslashes($_POST['relatores_nombre']));
$relatores_rut		= mysql_real_escape_string(stripslashes($_POST['relatores_rut']));
$relatores_dv		= mysql_real_escape_string(stripslashes($_POST['relatores_dv']));
$relatores_nombre1	= mysql_real_escape_string(stripslashes($_POST['relatores_nombre1']));
$relatores_rut1		= mysql_real_escape_string(stripslashes($_POST['relatores_rut1']));
$relatores_dv1		= mysql_real_escape_string(stripslashes($_POST['relatores_dv1']));
$relatores_nombre2	= mysql_real_escape_string(stripslashes($_POST['relatores_nombre2']));
$relatores_rut2		= mysql_real_escape_string(stripslashes($_POST['relatores_rut2']));
$relatores_dv2		= mysql_real_escape_string(stripslashes($_POST['relatores_dv2']));
$fecha_ingreso		= mysql_real_escape_string(stripslashes($_POST['fecha_ingreso']));

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
elseif(empty($estab_nombre)) { echo $error."El campo <b>Nombre del Establecimiento</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($estab_calle)) { echo $error."El campo <b>Calle del Establecimiento</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($estab_numero)) { echo $error."El campo <b>Número del Establecimiento</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($estab_region)) { echo $error."El campo <b>Región del Establecimiento</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($estab_ciudad)) { echo $error."El campo <b>Ciudad del Establecimiento</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($estab_comuna)) { echo $error."El campo <b>Comuna del Establecimiento</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($estab_telefono)) { echo $error."El campo <b>Teléfono Fijo del Establecimiento</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($estab_email)) { echo $error."El campo <b>Email del Establecimiento</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($curso_numero)) { echo $error."El campo <b>N° de Cursos</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($curso_nombre)) { echo $error."El campo <b>Nombre del Curso</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($curso_fecha)) { echo $error."El campo <b>Fecha del Curso</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($relatores_nombre)) { echo $error."El campo <b>Nombre del Relator del Curso</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($relatores_rut)) { echo $error."El campo <b>RUT del Relator del Curso</b> no puede quedar vacio".$finerror; $cago = true; }
//elseif(empty($relatores_dv)) { echo $error."El campo <b>Digito Verificador (DV) del Relator del Curso</b> no puede quedar vacio".$finerror; $cago = true; }
elseif(empty($fecha_ingreso)) { echo $error."El campo <b>Fecha de Ingreso</b> no puede quedar vacio".$finerror; $cago = true; }
else {
	//echo $error."Error 41: Contacte al administrador".$finerror; $cago = true;
	if($cago == false) {
		$pieces = explode(" - ", $curso_fecha);
		$pieces1 = explode(" - ", $curso_fecha1);
		$pieces2 = explode(" - ", $curso_fecha2);

            $numeros = array("0", "15", "14", "13", "12", "11", "10", "1", "2", "3", "4", "5", "6", "7", "8", "9");
            $regiones = array("seleccione region", "XV Region, Arica y Parinacota.", "XIV Region, Los Rios.", "RM, Metropolitana de Santiago.", 
                  "XII Región, Magallanes y de la Antártica Chilena.", "XI Region, Aisen del General Carlos Ibañez del Campo.", "X Región, Los Lagos.", "I Region, Tarapacá.", 
                  "II Region, Antofagasta.", "III Region, Atacama.", "IV Region, Coquimbo.", "V Region, Valparaiso.", "VI Region, Libertador General Bernardo O\ Higgins.",
            "VII Region, Maule.", "VIII Region, Biobio.", "IX Region, La Araucania.");
            $frase1 = str_replace($numeros, $regiones, $soli_region);
            $frase2 = str_replace("_", " ", $soli_ciudad);
            $frase3 = str_replace("_", " ", $soli_comuna );
            
            $frase4 = str_replace($numeros, $regiones, $estab_region);
            $frase5 = str_replace("_", " ", $estab_ciudad);
            $frase6 = str_replace("_", " ", $estab_comuna);

	//inserta la mierda
		$sql = "INSERT INTO 	soli_3(
            nro_asd, soli_nombre, soli_ap_pat, soli_ap_mat, soli_rut, 
            soli_dv, soli_calle, soli_numero, soli_resto, soli_region, soli_ciudad, 
            soli_comuna, soli_telefono, soli_celular, soli_email, rep_leg_nombre, 
            rep_leg_ap_pat, rep_leg_ap_mat, rep_leg_rut, rep_leg_dv, rep_leg_telefono, 
            rep_leg_celular, rep_leg_email, estab_nombre, estab_calle, estab_numero, 
            estab_resto, estab_region, estab_ciudad, estab_comuna, estab_telefono, 
            estab_celular, estab_email, curso_numero, curso_nombre, curso_fecha_inicio, 
            curso_fecha_termino, curso_horario, curso_numero1, curso_nombre1, 
            curso_fecha1_inicio, curso_fecha1_termino, curso_horario1, curso_numero2, 
            curso_nombre2, curso_fecha2_inicio, curso_fecha2_termino, curso_horario2, 
            relatores_nombre, relatores_rut, relatores_dv, relatores_nombre1, 
            relatores_rut1, relatores_dv1, relatores_nombre2, relatores_rut2, 
            relatores_dv2, fecha_ingreso)
    VALUES ('$nro_asd', '$soli_nombre', '$soli_ap_pat', '$soli_ap_mat', '$soli_rut', 
            '$soli_dv', '$soli_calle', '$soli_numero', '$soli_resto', '$frase1', '$frase2', 
            '$frase3', '$soli_telefono', '$soli_celular', '$soli_email', '$rep_leg_nombre', 
            '$rep_leg_ap_pat', '$rep_leg_ap_mat', '$rep_leg_rut', '$rep_leg_dv', '$rep_leg_telefono', 
            '$rep_leg_celular', '$rep_leg_email', '$estab_nombre', '$estab_calle', '$estab_numero', 
            '$estab_resto', '$frase4', '$frase5', '$frase6', '$estab_telefono', 
            '$estab_celular', '$estab_email', '$curso_numero', '$curso_nombre', '$pieces[0]', 
            '$pieces[1]', '$curso_horario', '$curso_numero1', '$curso_nombre1', 
            '$pieces1[0]', '$pieces1[1]', '$curso_horario1', '$curso_numero2', 
            '$curso_nombre2', '$pieces2[0]', '$pieces2[1]', '$curso_horario2', 
            '$relatores_nombre', '$relatores_rut', '$relatores_dv', '$relatores_nombre1', 
            '$relatores_rut1', '$relatores_dv1', '$relatores_nombre2', '$relatores_rut2', 
            '$relatores_dv2', '$fecha_ingreso')";
	pg_query("$sql");
	echo "<script>alert('Formulario enviado exitosamente.'); location.href='?modulo=save'</script>";

      }
      else{
      echo $error."<font color=red><center>Error 42: Contacte al administrador [No se guardo el registro]</center></font>".$finerror; $cago = true;   
      }
}
?>