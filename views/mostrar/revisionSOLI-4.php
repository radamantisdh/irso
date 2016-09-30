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
                <li><a href="#">4</a></li>
                <li><a href="<?php  echo $GLOBALS['base']; ?>?modulo=soli-4">Solicitud de autorización de transporte de sustancia radioactiva de 2ª y 3ª categoría.</a></li>
            </ol>
            <!-- Start Page Header Right Div -->
            <div class="right">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="<?php echo $GLOBALS['base']; ?>/salir.php" class="btn btn-light">Salir</a>
                    <a href="<?php  echo $GLOBALS['base']; ?>?modulo=soli-4" class="btn btn-light"><i class="fa fa-refresh"></i></a>
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
                            <ul class="panel-tools">
                                <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                                <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <form action="save.html" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label"><b>Numero ASDigital:</b></label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="panel-title">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <p class="form-control-static">1 .- Propietario de la sustancia radiactiva: </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Nombre o Razón social:</label>
                                    <div class="col-sm-4">
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Rut:</label>
                                    <div class="col-sm-6">
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Dirección:</label>
                                    <div class="col-sm-6">
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Región:</label>
                                    <div class="col-sm-8 ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Ciudad:</label>
                                    <div class="col-sm-8 ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Comuna:</label>
                                    <div class="col-sm-8 ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Teléfono fijo:</label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Teléfono celular:</label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">correo electronico:</label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="panel-title">
                                    2 .- REPRESENTANTE LEGAL
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Nombre y Apellido:</label>
                                    <div class="col-sm-4">
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Rut:</label>
                                    <div class="col-sm-6">
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Teléfono fijo:</label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Teléfono celular:</label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">correo electronico:</label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="panel-title">
                                    3 .- INSTALACIÓN DE ORIGEN (ALMACENAMIENTO TRANSITORIO)
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Dirección:</label>
                                    <div class="col-sm-6">
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Región:</label>
                                    <div class="col-sm-8 ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Ciudad:</label>
                                    <div class="col-sm-2 ">
                                    </div>
                                    <label class="col-sm-3 control-label form-label">Comuna:</label>
                                    <div class="col-sm-2 ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label"><b>Nº Resolución:</b></label>
                                    <div class="col-sm-3">
                                    </div>
                                    <label class="col-sm-2 control-label form-label"><b>Fecha:</b></label>
                                    <div class="col-sm-3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label"><b>SEREMI de Salud que la otorga:</b></label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="panel-title">
                                    4 .- INSTALACIÓN DE DESTINO (ALMACENAMIENTO TRANSITORIO)
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Dirección:</label>
                                    <div class="col-sm-6">
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Región:</label>
                                    <div class="col-sm-8 ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Ciudad:</label>
                                    <div class="col-sm-2 ">
                                    </div>
                                    <label class="col-sm-3 control-label form-label">Comuna:</label>
                                    <div class="col-sm-2 ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label"><b>Nº Resolución:</b></label>
                                    <div class="col-sm-3">
                                    </div>
                                    <label class="col-sm-2 control-label form-label"><b>Fecha:</b></label>
                                    <div class="col-sm-3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label"><b>SEREMI de Salud que la otorga:</b></label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="panel-title">
                                    5 .- RESPONSABLE DE LA SEGURIDAD RADIOLÓGICA
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Nombre y apellido:</label>
                                    <div class="col-sm-4">
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Rut:</label>
                                    <div class="col-sm-6">
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Teléfono fijo:</label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Teléfono celular:</label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">correo electronico:</label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Profesión:</label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label"><b>Nº Resolución:</b></label>
                                    <div class="col-sm-3">
                                    </div>
                                    <label class="col-sm-2 control-label form-label"><b>Fecha:</b></label>
                                    <div class="col-sm-3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label"><b>SEREMI de Salud que la otorga:</b></label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="panel-title">
                                    6 .- ANTECEDENTES DEL TRANSPORTE
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Vía de Transporte:</label>
                                    <div class="col-sm-2 ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Ruta a seguir:</label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="panel-title">
                                    7 .- SUSTANCIA RADIACTIVA O EQUIPO
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <p class="form-control-static"><b>7.1.- PARA EL CASO DE SUSTANCIA RADIACTIVA (completar solamente cuando se trate de fuentes radiactivas selladas o abiertas no insertas en equipos): </b></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Radioisótopo:</label>
                                    <div class="col-sm-2">
                                    </div>
                                    <label class="col-sm-3 control-label form-label">Actividad inicial en Bq:</label>
                                    <div class="col-sm-3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Fecha de calibración:</label>
                                    <div class="col-sm-2">
                                    </div>
                                    <label class="col-sm-3 control-label form-label">N° de Serie:</label>
                                    <div class="col-sm-3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Uso del radioisótopo:</label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <p class="form-control-static"><b>7.2.- PARA EL CASO DE EQUIPO (completar solamente cuando se trate de equipo con fuente radiactiva  sellada): </b></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Equipo:</label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Marca:</label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Modelo:</label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">N° de Serie:</label>
                                    <div class="col-sm-2">
                                    </div>
                                    <label class="col-sm-3 control-label form-label">Año de fabricación:</label>
                                    <div class="col-sm-3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label"><b>Radioisótopo 1:</b></label>
                                    <div class="col-sm-2">
                                    </div>
                                    <label class="col-sm-3 control-label form-label">Actividad inicial en Bq:</label>
                                    <div class="col-sm-3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Fecha de calibración:</label>
                                    <div class="col-sm-2">
                                    </div>
                                    <label class="col-sm-3 control-label form-label">N° de Serie:</label>
                                    <div class="col-sm-3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label"><b>Radioisótopo 2:</b></label>
                                    <div class="col-sm-2">
                                    </div>
                                    <label class="col-sm-3 control-label form-label">Actividad inicial en Bq:</label>
                                    <div class="col-sm-3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Fecha de calibración:</label>
                                    <div class="col-sm-2">
                                    </div>
                                    <label class="col-sm-3 control-label form-label">N° de Serie:</label>
                                    <div class="col-sm-3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Uso del equipo:</label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <p class="form-control-static"><b>7.3.- CATEGORÍA DEL BULTO E ÍNDICE DE TRANSPORTE : </b></p>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-3 radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio11" value="option1" name="categoria_bulto" required>
                                        <label for="inlineRadio11"> I - BLANCA </label>
                                    </div>
                                    <div class="col-sm-3 radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio12" value="option1" name="categoria_bulto" required>
                                        <label for="inlineRadio12"> II - AMARILLA </label>
                                    </div>
                                    <div class="col-sm-3 radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio13" value="option1" name="categoria_bulto" required>
                                        <label for="inlineRadio13">III - ROJA </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Índice de transporte:</label>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="panel-title">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <p class="form-control-static">8.-Fecha de ingreso: </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                    </div>
                                </div>
                                <div class="panel-title">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <p class="form-control-static">ANTECEDENTES A ADJUNTAR: </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label">Autorización de Importación (para equipo recién ingresado al país) o Autorización de Operación del Equipo (para equipo móvil ya en uso):</label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label">Autorización de Instalación de almacenamiento de Origen y Destino del transporte. (En el caso que la bodega de destino sea de otra empresa, esta deberá indicar por escrito que autoriza el almacenamiento del equipo en sus instalaciones): </label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label">Autorización de desempeño de la persona responsable del transporte y documento firmado en que declara que actuará como responsable de la protección radiológica del transporte:</label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label">Mandato legal, en el caso de ser presentada por terceros la presente solicitud: </label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label">Otros antecedentes que acrediten la posesión de la sustancia radiactiva o equipo. (ej. contrato de arrendamiento): </label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static">
                                            </p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label form-label">Observaciones:</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" rows="5" id="textarea1" placeholder="Ingrese observaciones en caso de ser rechazada la solicitud." name="observaciones"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="form-group">
                                <div class="col-sm-6">&nbsp;</div>
                                <div class="col-lg-2">
                                    <div class="panel-body">
                                        <button type="submit" class="btn btn-warning" id="button4" href="#" data-toggle="modal" data-target="#myModal" style="float:right;">Rechazar Solicitud</button>
                                        <script>
                                        document.querySelector('#button4').onclick = function() {
                                            swal({
                                                    title: "¿Desea Rechazar Esta Solicitud?",
                                                    text: "Está Ud. apunto de Rechazar esta Solicitud. Especifique motivo de rechazo.",
                                                    type: "warning",
                                                    showCancelButton: true,
                                                    confirmButtonColor: "#DD6B55",
                                                    confirmButtonText: "Si, Rechazar Solicitud",
                                                    closeOnConfirm: false
                                                },
                                                function() {
                                                    swal("Solicitud Rechazada", "Esta solicitud ha sido rechazada exitosamente por falta de documentacion y/o antecedentes.", "error");
                                                });
                                        };
                                        </script>
                                    </div>
                                </div>
                                <!-- End Panel -->
                                <!-- Start Panel -->
                                <div class="col-sm-1">&nbsp;</div>
                                <div class="col-lg-2">
                                    <div class="panel-body">
                                        <button type="submit" class="btn btn-success" id="button5" href="#" data-toggle="modal" data-target="#myModal" style="float:right;">Aceptar Solicitud</button>
                                        <script>
                                        document.querySelector('#button5').onclick = function() {
                                            swal({
                                                    title: "¿Desea Aceptar Esta Solicitud?",
                                                    text: "Está Ud. apunto de enviar esta Solicitud para ser revizada por un Supervisor.",
                                                    type: "warning",
                                                    showCancelButton: true,
                                                    confirmButtonColor: "#1E942F",
                                                    confirmButtonText: "Si, Enviar Solicitud",
                                                    closeOnConfirm: false
                                                },
                                                function() {
                                                    swal("Solicitud Enviada", "Esta solicitud ha sido enviada exitosamente para ser revisada por un Supervisor.", "success");
                                                });
                                        };
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- END CONTAINER -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
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
    <script type="text/javascript" src="views/js/bootstrap-select/bootstrap-select.js"></script>
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
        $('#date-picker4').daterangepicker({
            singleDatePicker: true
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#date-picker5').daterangepicker({
            singleDatePicker: true
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#date-picker6').daterangepicker({
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
            format: 'DD/MM/YYYY h:mm A'
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
    </script>
</body>

</html>
