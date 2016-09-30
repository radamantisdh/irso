<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
//Esta linea es para incluir el archivo con las variables
    include("includes/db.class.php");
    include("includes/setting.conf.php");
//REALIZAR CONSULTA
	$sql = "INSERT INTO tramite VALUES  (NULL,'".$_POST['nro_asd']."','"
            .$_POST['actividad_rubro']."','".$_POST['soli_nombre']."','".$_POST['soli_ap_pat']."','".$_POST['soli_ap_mat']."'
            ,'".$_POST['soli_rut']."','".$_POST['soli_dv']."','".$_POST['rep_leg_nombre']."','".$_POST['soli_ap_pat']."'
            ,'".$_POST['soli_ap_mat']."','".$_POST['soli_rut']."','".$_POST['soli_dv']."','".$_POST['rep_leg_nombre']."'
            ,'".$_POST['rep_leg_ap_pat']."','".$_POST['rep_leg_ap_mat']."','".$_POST['rep_leg_rut']."','".$_POST['rep_leg_dv']."'
            ,'".$_POST['rep_leg_calle']."','".$_POST['rep_leg_numero']."','".$_POST['rep_leg_resto']."','".$_POST['rep_leg_region']."',
            '".$_POST['rep_leg_ciudad']."','".$_POST['rep_leg_telefono']."','".$_POST['rep_leg_email']."','".$_POST['estab_calle']."',
            '".$_POST['estab_numero']."','".$_POST['estab_resto']."','".$_POST['estab_region']."','".$_POST['estab_ciudad']."',
            '".$_POST['estab_telefono']."','".$_POST['estab_email']."','".$_POST['estab_num_trab_h']."','".$_POST['estab_num_trab_m']."',
            '".$_POST['fecha_ingreso']."',)";
                $result = mysql_query($sql);
                if (!$result){
                               echo "La consulta SQL contiene errores.".mysql_error();
                               exit();
                }
				else {echo "<center><font color='RED'>DATOS INSERTADOS CORRECTAMENTE</font><a
							ref='save.html'>Volver</a&gt;";
                }
                ?>
</body>
</html>