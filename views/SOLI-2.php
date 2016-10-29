<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
    <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
    <title>IRSO - Ingreso y tramitación de resoluciones salud ocupacional</title>
    <!-- ========== Css Files ========== -->
    <link href="views/css/root.css" rel="stylesheet">
</head>

<body>
    <!-- Start Page Loading -->
    <div class="loading"><img src="views/img/loading.gif" alt="loading-img"></div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START TOP -->
    <div id="top" class="clearfix">
        <!-- Start App Logo -->
        <div class="applogo">
            <a href="<?php  echo $GLOBALS['base']; ?>?modulo=inicio" class="logo">IRSO</a>
        </div>
        <!-- End App Logo -->
        <!-- Start Sidebar Show Hide Button -->
        <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
        <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
        <!-- End Sidebar Show Hide Button -->
        <!-- Start Searchbox -->
        <form class="searchform">
            <input type="text" class="searchbox" id="searchbox" placeholder="Buscar">
            <span class="searchbutton"><i class="fa fa-search"></i></span>
        </form>
        <!-- End Searchbox -->
        <!-- Start Top Menu -->
        <ul class="topmenu">
            <li><a href="#">Files</a></li>
            <li><a href="#">Authors</a></li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">My Files <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Pictures</a></li>
                    <li><a href="#">Blog Posts</a></li>
                </ul>
            </li>
        </ul>
        <!-- End Top Menu -->
        <!-- Start Sidepanel Show-Hide Button -->
        <a href="#sidepanel" class="sidepanel-open-button"><i class="fa fa-outdent"></i></a>
        <!-- End Sidepanel Show-Hide Button -->
        <!-- Start Top Right -->
        <ul class="top-right">
            <li class="dropdown link">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle hdbutton">Crear nueva Tramite<span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-list">
                    <li><a href="<?php  echo $GLOBALS['base']; ?>?modulo=simulacion"><i class="fa falist fa-paper-plane-o"></i>Simulación de Solicitudes</a></li>
                    <li><a href="<?php  echo $GLOBALS['base']; ?>?modulo=dasboard"><i class="fa falist fa-paper-plane-o"></i>Ingreso de Solicitudes</a></li>
                    <li><a href="<?php  echo $GLOBALS['base']; ?>?modulo=administrativo"><i class="fa falist fa-paper-plane-o"></i>Revisión de Solicitudes</a></li>
                    <li><a href="<?php  echo $GLOBALS['base']; ?>?modulo=500"><i class="fa falist fa-paper-plane-o"></i>Solicitudes con Observaciones</a></li>
                    <li><a href="<?php  echo $GLOBALS['base']; ?>?modulo=500"><i class="fa falist fa-paper-plane-o"></i>Tramites Finalizados</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- END TOP -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START SIDEBAR -->
    <div class="sidebar clearfix">
        <ul class="sidebar-panel nav">
            <li><a href="<?php  echo $GLOBALS['base']; ?>?modulo=inicio"><span class="icon color5"><i class="fa fa-home"></i></span>Inicio<span class="label label-default"></span></a></li>
            <li><a href="#"><span class="icon color11"><i class="fa fa-file-text-o"></i></span>Tramites<span class="caret"></span></a>
                <ul>
                    <li><a href="<?php  echo $GLOBALS['base']; ?>?modulo=simulacion">Simulación de Solicitudes</a></li>
                    <li><a href="<?php  echo $GLOBALS['base']; ?>?modulo=dasboard">Ingreso de Solicitudes</a></li>
                    <li><a href="<?php  echo $GLOBALS['base']; ?>?modulo=administrativo">Revisión de Solicitudes</a></li>
                    <li><a href="<?php  echo $GLOBALS['base']; ?>?modulo=500">Solicitudes con Observaciones</a></li>
                    <li><a href="<?php  echo $GLOBALS['base']; ?>?modulo=500">Tramites Finalizados</a></li>
                </ul>
            </li>
        </ul>
        <ul class="sidebar-panel nav">
            <li class="sidetitle">Más</li>
            <li><a href="http://seremi9.redsalud.gob.cl"><span class="icon color15"><i class="fa fa-columns"></i></span>Seremi IX</a></li>
            <li><a href="http://asdigital.minsal.cl/asdigital/"><span class="icon color7"><i class="fa fa-map-marker"></i></span>ASDigital</a></li>
        </ul>
        <div class="sidebar-plan">
            cualquier cosa<a href="#" class="link">link</a>
        </div>
    </div>
    </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START CONTENT -->
    <div class="content">
        <!-- Start Page Header -->
        <div class="page-header">
            <h1 class="title">Solicitudes</h1>
            <ol class="breadcrumb">
                <li><a href="<?php  echo $GLOBALS['base']; ?>?modulo=dasboard">Solicitudes</a></li>
                <li><a href="#">2</a></li>
                <li><a href="<?php  echo $GLOBALS['base']; ?>?modulo=soli-2">Solicitud de autorización de operaciones de instalaciones radioactivas y equipos de 2ª y 3ª categoría.</a></li>
            </ol>
            <!-- Start Page Header Right Div -->
            <div class="right">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="<?php echo $GLOBALS['base']; ?>/salir.php" class="btn btn-light">Salir</a>
                    <a href="<?php  echo $GLOBALS['base']; ?>?modulo=soli-2" class="btn btn-light"><i class="fa fa-refresh"></i></a>
                </div>
            </div>
            <!-- End Page Header Right Div -->
        </div>
        <!-- End Page Header -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTAINER -->
        <div class="container-padding">
            <!-- Start Row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-title">
                            ANTECEDENTES
                            <div class="form-group">
                                <div class="col-sm-10">
                                </div>
                            </div>
                            <ul class="panel-tools">
                                <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                                <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <form action="views/actions/save_soli-2.php" class="form-horizontal" id="save_soli2" method="post">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label"><b>Numero ASDigital:</b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese N°" name="nro_asd" required>
                                    </div>
                                </div>
                                <div class="panel-title">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <p class="form-control-static">1 .- Institución o Empresa/Persona natural: </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Nombre o Razón social:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese Nombres" name="soli_nombre" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="input11" placeholder="Ap. Paterno" name="soli_ap_pat" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="input11" placeholder="Ap. Materno" name="soli_ap_mat" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Rut:</label>
                                    <div class="col-sm-6">
                                        <input type="text" maxlength="8" class="form-control" id="input11" placeholder="ej:12345678" name="soli_rut" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" maxlength="1" class="form-control" id="input11" placeholder="Ingrese dv" name="soli_dv" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Dirección:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="input11" placeholder="Calle" name="soli_calle" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="input11" placeholder="Número" name="soli_numero" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-8">
                                        <input type="text" class="form-control" id="input11" placeholder="Poblacion, departamento, etc" name="soli_resto">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Región:</label>
                                    <div class="col-sm-8 ">
                                        <select class="selectpicker" name="soli_region"  id="soli_region">
                                            <option value="0">Seleccione Región:</option>
                                            <option value="15">XV Región, Arica y Parinacota.</option>
                                            <option value="1">I Región, Tarapacá.</option>
                                            <option value="2">II Región, Antofagasta.</option>
                                            <option value="3">III Región, Atacama.</option>
                                            <option value="4">IV Región, Coquimbo.</option>
                                            <option value="5">V Región, Valparaiso.</option>
                                            <option value="13">RM, Metropolitana de Santiago.</option>
                                            <option value="6">VI Región, Libertador General Bernardo O\ Higgins.</option>
                                            <option value="7">VII Región, Maule.</option>
                                            <option value="8">VIII Región, Biobío.</option>
                                            <option value="9">IX Región, La Araucanía.</option>
                                            <option value="14">XIV Región, Los Ríos.</option>
                                            <option value="10">X Región, Los Lagos.</option>
                                            <option value="11">XI Región, Aisén del General Carlos Ibáñez del Campo.</option>
                                            <option value="12">XII Región, Magallanes y de la Antártica Chilena.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Ciudad:</label>
                                    <div class="col-sm-8 ">
                                        <select class="selectpicker" name="soli_ciudad"  id="soli_ciudad">
                                            <option value="">Seleccione ciudad</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Comuna:</label>
                                    <div class="col-sm-8 ">
                                        <select class="selectpicker" name="soli_comuna" id="soli_comuna">
                                            <option value="">Seleccione comuna</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Teléfono fijo:</label>
                                    <div class="col-sm-8">
                                        <input type="tel" maxlength="9" class="form-control" id="input11" placeholder="ej:56912345678" name="soli_telefono" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Teléfono celular:</label>
                                    <div class="col-sm-8">
                                        <input type="tel" maxlength="9" class="form-control" id="input11" placeholder="ej:56912345678" name="soli_celular" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">correo electronico:</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="input11" placeholder="direccionemail@ejemplo.com" name="soli_email" required>
                                    </div>
                                </div>
                                <div class="panel-title">
                                    2 .- REPRESENTANTE LEGAL
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Nombre y Apellido:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese nombres" name="rep_leg_nombre" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="input11" placeholder="Ap. Paterno" name="rep_leg_ap_pat" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="input11" placeholder="Ap. Materno" name="rep_leg_ap_mat" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Rut:</label>
                                    <div class="col-sm-6">
                                        <input type="text" maxlength="8" class="form-control" id="input11" placeholder="ej:12345678" name="rep_leg_rut" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" maxlength="1" class="form-control" id="input11" placeholder="Ingrese dv" name="rep_leg_dv" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Teléfono fijo:</label>
                                    <div class="col-sm-8">
                                        <input type="tel" maxlength="9" class="form-control" id="input11" placeholder="ej:56912345678" name="rep_leg_telefono" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Teléfono celular:</label>
                                    <div class="col-sm-8">
                                        <input type="tel" maxlength="9" class="form-control" id="input11" placeholder="ej:56912345678" name="rep_leg_celular" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">correo electronico:</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="input11" placeholder="direccionemail@ejemplo.com" name="rep_leg_email" required>
                                    </div>
                                </div>
                                <div class="panel-title">
                                    3 .- INSTALACIÓN RADIACTIVA O EQUIPO
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Dirección:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="input11" placeholder="Calle" name="inst_radio_calle" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="input11" placeholder="Número" name="inst_radio_numero" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-8">
                                        <input type="text" class="form-control" id="input11" placeholder="Poblacion, departamento, etc" name="inst_radio_resto">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Región:</label>
                                    <div class="col-sm-8 ">
                                        <select class="selectpicker" name="inst_radio_region" id="inst_radio_region">
                                            <option value="0">Seleccione Región:</option>
                                            <option value="15">XV Región, Arica y Parinacota.</option>
                                            <option value="1">I Región, Tarapacá.</option>
                                            <option value="2">II Región, Antofagasta.</option>
                                            <option value="3">III Región, Atacama.</option>
                                            <option value="4">IV Región, Coquimbo.</option>
                                            <option value="5">V Región, Valparaiso.</option>
                                            <option value="13">RM, Metropolitana de Santiago.</option>
                                            <option value="6">VI Región, Libertador General Bernardo O\ Higgins.</option>
                                            <option value="7">VII Región, Maule.</option>
                                            <option value="8">VIII Región, Biobío.</option>
                                            <option value="9">IX Región, La Araucanía.</option>
                                            <option value="14">XIV Región, Los Ríos.</option>
                                            <option value="10">X Región, Los Lagos.</option>
                                            <option value="11">XI Región, Aisén del General Carlos Ibáñez del Campo.</option>
                                            <option value="12">XII Región, Magallanes y de la Antártica Chilena.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Ciudad:</label>
                                    <div class="col-sm-9 ">
                                        <select class="selectpicker" name="inst_radio_ciudad" id="inst_radio_ciudad">
                                            <option value="">Seleccione ciudad</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Comuna:</label>
                                    <div class="col-sm-9 ">
                                        <select class="selectpicker" name="inst_radio_comuna" id="inst_radio_comuna">
                                            <option value="">Seleccione comuna</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-7 control-label form-label"><b>Coordenadas UTM WGS84, las que contienen 6 y 7 cifras respectivamente (sólo para instalaciones fijas con fuentes radiactivas):</b></label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="input11" placeholder="X" name="inst_radio_coordenadax" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="input11" placeholder="Y" name="inst_radio_coordenaday" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label"><b>Ámbito:</b></label>
                                    <div class="col-sm-2 ">
                                        <select class="selectpicker1" name="inst_radio_ambito">
                                            <option value="">Seleccione Ámbito</option>
                                            <option value="Medico">Médico</option>
                                            <option value="Dental">Dental</option>
                                            <option value="Veterinario">Veterinario</option>
                                            <option value="Industrial">Industrial</option>
                                            <option value="Minero">Minero</option>
                                            <option value="Investigacion">Investigación</option>
                                            <option value="Otro_Ambito">Otro</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-3 control-label form-label"><b>Uso:</b></label>
                                    <div class="col-sm-2 ">
                                        <select class="selectpicker2" name="inst_radio_uso">
                                            <option value="">Seleccione Uso</option>
                                            <option value="Rayos x">Rayos X</option>
                                            <option value="Medicina nuclear">Medicina Nuclear</option>
                                            <option value="Radioinmunanalisis">Radioinmunoanálisis(RIA)</option>
                                            <option value="Obras viales">Obras viales</option>
                                            <option value="Control de equipaje">Control de equipaje</option>
                                            <option value="Almacenamiento transitorio">Almacenamiento transitorio</option>
                                            <option value="Otro_Uso">Otro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <section id="Otro_Ambito">
                                    <label class="col-sm-3 control-label form-label">Otro:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese otro Ámbito" name="inst_radio_ambito_otro" >
                                    </div>
                                    </section>
                                    <section id="Otro_Uso">
                                    <label class="col-sm-2 control-label form-label">Otro:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese otro Uso" name="inst_radio_uso_otro" >
                                    </div>
                                    </section>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label"><b>Tipo de instalación o equipo:</b></label>
                                    <div class="col-sm-2 radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio11" value="Fijo" name="inst_radio_tipo" required>
                                        <label for="inlineRadio11"> Fijo </label>
                                    </div>
                                    <div class="col-sm-2 radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio12" value="Movil" name="inst_radio_tipo" required>
                                        <label for="inlineRadio12"> Móvil </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                </div>
                                <div class="panel-title">
                                    4.- CARACTERÍSTICAS DEL EQUIPO
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <p class="form-control-static"><b>4.1 .- PARA EL CASO DE GENERADORES DE RAYOS X: </b></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label form-label">Equipo:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese Nombre Equipo" name="equipo_nombre1" >
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Marca" name="equipo_marca1" >
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Modelo" name="equipo_modelo1" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label form-label">N° de Serie:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese N° de serie" name="equipo_num_serie1" >
                                    </div>
                                    <label class="col-sm-3 control-label form-label">Año de fabricación:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese Año" name="equipo_anio1" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label form-label">N° serie tubo:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese N° de serie" name="equipo_num_tubo" >
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="kV máx." name="equipo_kv_max" >
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="mA máx." name="equipo_ma_max" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <p class="form-control-static"><b>4.2 .- PARA EL CASO DE FUENTE (S) RADIACTIVA(S): </b></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label form-label">Equipo:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese equipo" name="equipo_nombre2" >
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Marca" name="equipo_marca2" >
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Modelo" name="equipo_modelo2" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label form-label">N° de Serie:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese N° de serie" name="equipo_num_serie2" >
                                    </div>
                                    <label class="col-sm-3 control-label form-label">Año de fabricación:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese Año" name="equipo_anio2" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label form-label"><b>Radioisótopo 1:</b></label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" name="equipo_radioiso1" >
                                    </div>
                                    <label class="col-sm-3 control-label form-label">Actividad inicial en Bq:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" name="equipo_bq1" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label form-label">Fecha de calibración:</label>
                                    <div class="col-sm-3">
                                        <fieldset>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <div class="input-prepend input-group">
                                                        <span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        <input type="text" id="date-picker" class="form-control" value="<?php echo date("d-m-Y"); ?>" name="equipo_calibracion1"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <label class="col-sm-3 control-label form-label">N° de Serie:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese Número de serie" name="equipo_num_serie_r1" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label form-label"><b>Radioisótopo 2:</b></label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" name="equipo_radioiso2" >
                                    </div>
                                    <label class="col-sm-3 control-label form-label">Actividad inicial en Bq:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" name="equipo_bq2" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label form-label">Fecha de calibración:</label>
                                    <div class="col-sm-3">
                                        <fieldset>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <div class="input-prepend input-group">
                                                        <span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        <input type="text" id="date-picker1" class="form-control" value="<?php echo date("d-m-Y"); ?>" name="equipo_calibracion2"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <label class="col-sm-3 control-label form-label">N° de Serie:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese Número de serie" name="equipo_num_serie_r2" >
                                    </div>
                                </div>
                                <div class="panel-title">
                                    5 .- RESPONSABLE DE LA SEGURIDAD RADIOLÓGICA
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Nombre y Apellido:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese nombres" name="seg_radio_nombre" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="input11" placeholder="Ap. Paterno" name="seg_radio_pat" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="input11" placeholder="Ap. Materno" name="seg_radio_mat" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Rut:</label>
                                    <div class="col-sm-6">
                                        <input type="text" maxlength="8" class="form-control" id="input11" placeholder="ej:12345678" name="seg_radio_rut" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" maxlength="1" class="form-control" id="input11" placeholder="Ingrese dv" name="seg_radio_dv" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Teléfono fijo:</label>
                                    <div class="col-sm-8">
                                        <input type="tel" maxlength="9" class="form-control" id="input11" placeholder="ej:56912345678" name="seg_radio_telefono" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Teléfono celular:</label>
                                    <div class="col-sm-8">
                                        <input type="tel" maxlength="9" class="form-control" id="input11" placeholder="ej:56912345678" name="seg_radio_celular" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">correo electronico:</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="input11" placeholder="direccionemail@ejemplo.com" name="seg_radio_email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Profesión:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese Profesión" name="seg_radio_profesion" required>
                                    </div>
                                    <label class="col-sm-2 control-label form-label"><b>Nº Resolución:</b></label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese N° Resolución" name="seg_radio_num_res" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label"><b>Fecha:</b></label>
                                    <div class="col-sm-3">
                                        <fieldset>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <div class="input-prepend input-group">
                                                        <span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        <input type="text" id="date-picker2" class="form-control" value="<?php echo date("d-m-Y"); ?>" name="seg_radio_fecha"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <label class="col-sm-2 control-label form-label"><b>SEREMI de Salud que la otorga:</b></label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese SEREMI que otorga" name="seg_radio_seremi_ot" required>
                                    </div>
                                </div>
                                <div class="panel-title">
                                    6 .- SERVICIOS PRESTADOS POR TERCEROS
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <p class="form-control-static"><b>6.1 .- Dosimetría personal:</b></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Nombre Empresa: </label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese empresa" name="dosimetria_nombre" required>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="input11" placeholder="Dirección" name="dosimetria_direccion" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Teléfono:</label>
                                    <div class="col-sm-8">
                                        <input type="tel" maxlength="9" class="form-control" id="input11" placeholder="ej:56912345678" name="dosimetria_telefono" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <p class="form-control-static"><b>6.2 .- Mantención equipos:</b></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Nombre Empresa: </label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese empresa" name="mantencion_nombre" required>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="input11" placeholder="Dirección" name="mantencion_direccion" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Teléfono:</label>
                                    <div class="col-sm-8">
                                        <input type="tel" maxlength="9" class="form-control" id="input11" placeholder="ej:56912345678" name="mantencion_telefono" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <p class="form-control-static"><b>6.3 .- Disposición de residuos: </b></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Nombre Empresa: </label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese empresa" name="residuos_nombre" required>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="input11" placeholder="Dirección" name="residuos_direccion" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Teléfono:</label>
                                    <div class="col-sm-8">
                                        <input type="tel" maxlength="9" class="form-control" id="input11" placeholder="ej:56912345678" name="residuos_telefono" required>
                                    </div>
                                </div>
                                <div class="panel-title">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <p class="form-control-static">7.-Fecha de ingreso: </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body" style="margin-top:12px;">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label form-label">Seleccione Fecha de ingreso:</label>
                                        <div class="col-sm-8">
                                            <fieldset>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <div class="input-prepend input-group">
                                                            <span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <input type="text" id="date-picker3" class="form-control" value="<?php echo date("d-m-Y"); ?>" name="fecha_ingreso"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-title">
                                    DOCUMENTACIÓN ADJUNTA
                                </div>
                                <div class="panel-body">
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label">Acreditar cedula de identidad (fotocopia) del representante legal:</label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static">
                                                <input type="file" style="border: 0px !important;" >
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label">Plano o croquis general de planta de la instalación radiactiva, indicando: dimensiones; partes blindadas; ubicación del equipo; uso de las áreas delimitadas por la instalación; uso de las áreas colindantes, para el caso de almacenamientos transitorios de fuentes radiactivas deberá acreditar memoria de cálculo de blindaje: </label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static">
                                                <input type="file" style="border: 0px !important;" >
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label">Copia del manual de operación del equipo en español (especificaciones técnicas), si corresponde:</label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static">
                                                <input type="file" style="border: 0px !important;" >
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label">Procedimientos de protección radiológica operacional y procedimiento para emergencia radiactivas: </label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static">
                                                <input type="file" style="border: 0px !important;" >
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label">Copias de las autorizaciones de desempeño vigente de todo el personal: </label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static">
                                                <input type="file" style="border: 0px !important;" >
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label">Último informe dosimétrico o contrato de dosimetría de todo el personal ocupacionalmente expuesto: </label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static">
                                                <input type="file" style="border: 0px !important;" >
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label">En el caso que la práctica genere residuos peligrosos, se debe indicar la forma de su gestión y disposición final: </label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static">
                                                <input type="file" style="border: 0px !important;" >
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label">En instalaciones con manipulación de sustancias radiactivas, como RIA, Medicina nuclear, investigación, etc.; y de equipos con fuentes radiactivas selladas, fijas o móviles, como medidores de densidad, medidores de humedad, lectores de asfaltos, medidores de nivel, etc.; debe entregar un Procedimiento para la gestión de los desechos radiactivos:</label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static">
                                                <input type="file" style="border: 0px !important;" >
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label">En el caso de equipos con fuentes radiactivas selladas, se debe acreditar la copia la autorización sanitaria de importación, copia de factura y copia de autorización sanitaria para el almacenamiento transitorio del material radiactivo:</label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static">
                                                <input type="file" style="border: 0px !important;" >
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label">Certificado de garantía o mantención del equipo, en el caso de equipos generadores de radiaciones ionizantes (Rayos X):</label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static">
                                                <input type="file" style="border: 0px !important;" >
                                            </p>
                                        </div>
                                    </div>
                                    <div id="respuesta">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-8">&nbsp;</div>
                                        <div class="col-sm-3">
                                            <button type="submit" href="save.html" class="btn btn-default" style="float:right;">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer -->
            <div class="row footer">
                <div class="col-md-6 text-left">
                    Copyright © 2015 <a href="http://themeforest.net/user/egemem/portfolio" target="_blank">Egemem</a> All rights reserved.
                </div>
                <div class="col-md-6 text-right">
                    Design and Developed by <a href="http://themeforest.net/user/egemem/portfolio" target="_blank">Egemem</a>
                </div>
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Row -->
        <!-- END CONTAINER -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
    </div>
    <!-- End Content -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START SIDEPANEL -->
    <div role="tabpanel" class="sidepanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#today" aria-controls="today" role="tab" data-toggle="tab">TODAY</a></li>
            <li role="presentation"><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">TASKS</a></li>
            <li role="presentation"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">CHAT</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Start Today -->
            <div role="tabpanel" class="tab-pane active" id="today">
                <div class="sidepanel-m-title">
                    Today
                    <span class="left-icon"><a href="#"><i class="fa fa-refresh"></i></a></span>
                    <span class="right-icon"><a href="#"><i class="fa fa-file-o"></i></a></span>
                </div>
                <div class="gn-title">NEW</div>
                <ul class="list-w-title">
                    <li>
                        <a href="#">
                            <span class="label label-danger">ORDER</span>
                            <span class="date">9 hours ago</span>
                            <h4>New Jacket 2.0</h4> Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-success">COMMENT</span>
                            <span class="date">14 hours ago</span>
                            <h4>Bill Jackson</h4> Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-info">MEETING</span>
                            <span class="date">at 2:30 PM</span>
                            <h4>Developer Team</h4> Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-warning">EVENT</span>
                            <span class="date">3 days left</span>
                            <h4>Birthday Party</h4> Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Today -->
            <!-- Start Tasks -->
            <div role="tabpanel" class="tab-pane" id="tasks">
                <div class="sidepanel-m-title">
                    To-do List
                    <span class="left-icon"><a href="#"><i class="fa fa-pencil"></i></a></span>
                    <span class="right-icon"><a href="#"><i class="fa fa-trash"></i></a></span>
                </div>
                <div class="gn-title">TODAY</div>
                <ul class="todo-list">
                    <li class="checkbox checkbox-primary">
                        <input id="checkboxside1" type="checkbox">
                        <label for="checkboxside1">Add new products</label>
                    </li>
                    <li class="checkbox checkbox-primary">
                        <input id="checkboxside2" type="checkbox">
                        <label for="checkboxside2"><b>May 12, 6:30 pm</b> Meeting with Team</label>
                    </li>
                    <li class="checkbox checkbox-warning">
                        <input id="checkboxside3" type="checkbox">
                        <label for="checkboxside3">Design Facebook page</label>
                    </li>
                    <li class="checkbox checkbox-info">
                        <input id="checkboxside4" type="checkbox">
                        <label for="checkboxside4">Send Invoice to customers</label>
                    </li>
                    <li class="checkbox checkbox-danger">
                        <input id="checkboxside5" type="checkbox">
                        <label for="checkboxside5">Meeting with developer team</label>
                    </li>
                </ul>
                <div class="gn-title">TOMORROW</div>
                <ul class="todo-list">
                    <li class="checkbox checkbox-warning">
                        <input id="checkboxside6" type="checkbox">
                        <label for="checkboxside6">Redesign our company blog</label>
                    </li>
                    <li class="checkbox checkbox-success">
                        <input id="checkboxside7" type="checkbox">
                        <label for="checkboxside7">Finish client work</label>
                    </li>
                    <li class="checkbox checkbox-info">
                        <input id="checkboxside8" type="checkbox">
                        <label for="checkboxside8">Call Johnny from Developer Team</label>
                    </li>
                </ul>
            </div>
            <!-- End Tasks -->
            <!-- Start Chat -->
            <div role="tabpanel" class="tab-pane" id="chat">
                <div class="sidepanel-m-title">
                    Friend List
                    <span class="left-icon"><a href="#"><i class="fa fa-pencil"></i></a></span>
                    <span class="right-icon"><a href="#"><i class="fa fa-trash"></i></a></span>
                </div>
                <div class="gn-title">ONLINE MEMBERS (3)</div>
                <ul class="group">
                    <li class="member">
                        <a href="#"><img src="views/img/profileimg.png" alt="img"><b>Allice Mingham</b>Los Angeles</a><span class="status online"></span></li>
                    <li class="member">
                        <a href="#"><img src="views/img/profileimg2.png" alt="img"><b>James Throwing</b>Las Vegas</a><span class="status busy"></span></li>
                    <li class="member">
                        <a href="#"><img src="views/img/profileimg3.png" alt="img"><b>Fred Stonefield</b>New York</a><span class="status away"></span></li>
                    <li class="member">
                        <a href="#"><img src="views/img/profileimg4.png" alt="img"><b>Chris M. Johnson</b>California</a><span class="status online"></span></li>
                </ul>
                <div class="gn-title">OFFLINE MEMBERS (8)</div>
                <ul class="group">
                    <li class="member">
                        <a href="#"><img src="views/img/profileimg5.png" alt="img"><b>Allice Mingham</b>Los Angeles</a><span class="status offline"></span></li>
                    <li class="member">
                        <a href="#"><img src="views/img/profileimg6.png" alt="img"><b>James Throwing</b>Las Vegas</a><span class="status offline"></span></li>
                </ul>
                <form class="search">
                    <input type="text" class="form-control" placeholder="Search a Friend...">
                </form>
            </div>
            <!-- End Chat -->
        </div>
    </div>
    <!-- END SIDEPANEL -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- ================================================
    jQuery Library
================================================ -->
    <script type="text/javascript" src="views/js/jquery.min.js"></script>
    <!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
    <script src="views/js/bootstrap/bootstrap.min.js"></script>
    <!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
    <script type="text/javascript" src="views/js/plugins.js"></script>
    <!-- ================================================
Bootstrap Select
================================================ -->
    <!--<script type="text/javascript" src="views/js/bootstrap-select/bootstrap-select.js"></script>-->
    <!-- ================================================
Bootstrap Toggle
================================================ -->
    <script type="text/javascript" src="views/js/bootstrap-toggle/bootstrap-toggle.min.js"></script>
    <!-- ================================================
Sweet Alert
================================================ -->
    <script src="views/js/sweet-alert/sweet-alert.min.js"></script>
    <!-- ================================================
Kode Alert
================================================ -->
    <script src="views/js/kode-alert/main.js"></script>
    <!-- ================================================
jQuery UI
================================================ -->
    <script type="text/javascript" src="views/js/jquery-ui/jquery-ui.min.js"></script>
    <!-- ================================================
Moment.js
================================================ -->
    <script type="text/javascript" src="views/js/moment/moment.min.js"></script>
    <!-- ================================================
Full Calendar
================================================ -->
    <script type="text/javascript" src="views/js/full-calendar/fullcalendar.js"></script>
    <!-- ================================================
Bootstrap Date Range Picker
================================================ -->
    <script type="text/javascript" src="views/js/date-range-picker/daterangepicker.js"></script>
    <!-- ================================================
Moment.js
================================================ -->
    <script type="text/javascript" src="views/js/moment/moment.min.js"></script>
    <!-- ================================================
Bootstrap Date Range Picker
================================================ -->
    <script type="text/javascript" src="views/js/date-range-picker/daterangepicker.js"></script>
    <!-- Basic Date Range Picker -->
    <script type="text/javascript">
    $(document).ready(function() {

        $('#soli_region').on('change', function() {
            var region = $(this).val();
            $('#soli_ciudad').load("views/modales/ciudades.php?region=" + region);
            console.log("Region Cargada: " + region);
            $("#soli_ciudad").find('option').first().attr('selected','selected');

            $('#soli_comuna').load("views/modales/comunas.php?region=" + region);
            console.log("Comuna Cargada: " + region);
            $("#soli_comuna").find('option').first().attr('selected','selected');
        });

        $('#inst_radio_region').on('change', function() {
            var region = $(this).val();
            $('#inst_radio_ciudad').load("views/modales/ciudades.php?region=" + region);
            console.log("Region Cargada: " + region);
            $("#inst_radio_ciudad").find('option').first().attr('selected','selected');

            $('#inst_radio_comuna').load("views/modales/comunas.php?region=" + region);
            console.log("Comuna Cargada: " + region);
            $("#inst_radio_comuna").find('option').first().attr('selected','selected');
        });

        $('#date-range-picker').daterangepicker(null, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
    </script>
    <!-- Basic Single Date Picker -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('#date-picker').daterangepicker({
            singleDatePicker: true
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#date-picker1').daterangepicker({
            singleDatePicker: true
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#date-picker2').daterangepicker({
            singleDatePicker: true
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#date-picker3').daterangepicker({
            singleDatePicker: true
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
    </script>
    <!-- Date Range and Time Picker -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('#date-range-and-time-picker').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            format: 'DD-MM-YYYY h:mm A'
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });

    $("#Otro_Ambito").hide();
        
        $(".selectpicker1").on("click", function() {
            var valor = $(this).val();
            $("#Otro_Ambito").hide();
            
            if (valor == "Otro_Ambito") {
                $("#Otro_Ambito").show();
            } 
        });
        $("#Otro_Uso").hide();
        
        $(".selectpicker2").on("click", function() {
            var valor = $(this).val();
            $("#Otro_Uso").hide();
            
            if (valor == "Otro_Uso") {
                $("#Otro_Uso").show();
            } 
        });

    </script>
    <script type="text/javascript">
    var frm = $('#save_soli2');
    frm.submit(function (ev) {
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
                $("#respuesta").html(data);
            }
        });

        ev.preventDefault();
    });
</script>
</body>

</html>
