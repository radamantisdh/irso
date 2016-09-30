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
                <li><a href="#">L-7</a></li>
                <li><a href="<?php  echo $GLOBALS['base']; ?>?modulo=L-7">Solicitud inscripción y registro de expertos en prevención de riesgos profesionales.</a></li>
            </ol>
            <!-- Start Page Header Right Div -->
            <div class="right">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="<?php echo $GLOBALS['base']; ?>/salir.php" class="btn btn-light">Salir</a>
                    <a href="<?php  echo $GLOBALS['base']; ?>?modulo=L-7" class="btn btn-light"><i class="fa fa-refresh"></i></a>
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
                            <form action="views/actions/save_L-7.php" class="form-horizontal" id="save_l7" method="post">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label"><b>Numero ASDigital:</b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input11" placeholder="Ingrese N°" name="nro_asd" required>
                                    </div>
                                </div>
                                <div class="panel-title">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <p class="form-control-static">1 .- Persona natural que solicita la licencia: </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Nombre:</label>
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
                                    <label class="col-sm-3 control-label form-label">Domicilio:</label>
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
                                        <select class="selectpicker" name="soli_region">
                                            <option value="">Seleccione Región:</option>
                                            <option value="I Región, Tarapacá.">I Región, Tarapacá.</option>
                                            <option value="II Región, Antofagasta.">II Región, Antofagasta.</option>
                                            <option value="III Región, Atacama.">III Región, Atacama.</option>
                                            <option value="IV Región, Coquimbo.">IV Región, Coquimbo.</option>
                                            <option value="V Región, Valparaiso.">V Región, Valparaiso.</option>
                                            <option value="RM, Metropolitana de Santiago.">RM, Metropolitana de Santiago.</option>
                                            <option value="VI Región, Libertador General Bernardo O\ Higgins.">VI Región, Libertador General Bernardo O\ Higgins.</option>
                                            <option value="VII Región, Maule.">VII Región, Maule.</option>
                                            <option value="VIII Región, Biobío.">VIII Región, Biobío.</option>
                                            <option value="IX Región, La Araucanía.">IX Región, La Araucanía.</option>
                                            <option value="X Región, Los Lagos.">X Región, Los Lagos.</option>
                                            <option value="XI Región, Aisén del General Carlos Ibáñez del Campo.">XI Región, Aisén del General Carlos Ibáñez del Campo.</option>
                                            <option value="XII Región, Magallanes y de la Antártica Chilena.">XII Región, Magallanes y de la Antártica Chilena.</option>
                                            <option value="XIV Región, Los Ríos.">XIV Región, Los Ríos.</option>
                                            <option value="XV Región, Arica y Parinacota.">XV Región, Arica y Parinacota.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Ciudad:</label>
                                    <div class="col-sm-8 ">
                                        <select class="selectpicker" name="soli_ciudad">
                                            <option value="">Seleccione ciudad</option>
                                            <option>ciudad 1</option>
                                            <option>ciudad 2</option>
                                            <option>ciudad 3</option>
                                            <option>ciudad 4</option>
                                            <option>ciudad 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Teléfono:</label>
                                    <div class="col-sm-8">
                                        <input type="tel" maxlength="9" class="form-control" id="input11" placeholder="ej:56912345678" name="soli_telefono" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Email:</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="input11" placeholder="direccionemail@ejemplo.com" name="soli_email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Institución de educación superior que otorga el título:</label>
                                    <div class="col-sm-8 ">
                                        <select class="selectpicker" name="soli_inst_ed_sup">
                                            <option value="">Seleccione institución</option>
                                            <option>institución 1</option>
                                            <option>institución 2</option>
                                            <option>institución 3</option>
                                            <option>institución 4</option>
                                            <option>institución 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label form-label">Nivel:</label>
                                    <div class="radio radio-info radio-inline col-sm-4">
                                        <input type="radio" id="inlineRadio1" value="Profesional" name="soli_nivel" required>
                                        <label for="inlineRadio1"> Profesional </label>
                                    </div>
                                    <div class="radio radio-info radio-inline col-sm-4">
                                        <input type="radio" id="inlineRadio2" value="Técnico" name="soli_nivel" required>
                                        <label for="inlineRadio2"> Técnico </label>
                                    </div>
                                </div>
                                <div class="panel-title">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <p class="form-control-static">2 .- Fecha de ingreso: </p>
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
                                                            <input type="text" id="date-picker" class="form-control" value="<?php echo date("d-m-Y"); ?>" name="fecha_ingreso" required/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                </div>
                                <div class="panel-title">
                                    DOCUMENTACIÓN ADJUNTA
                                    <ul class="panel-tools">
                                        <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                                        <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                                        <!--<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>-->
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label"> Certificado de Título ( o copia legalizada ante notario):</label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static">
                                                <input type="file" style="border: 0px !important;" >
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label"> Fotos tamaño carnet a Color (2,5 Cm. De ancho X 3,0 cms. de alto) : </label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static">
                                                <input type="file" style="border: 0px !important;" >
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label">Fotocopia de cédula de identidad (ambos lados)</label>
                                        <div class="col-sm-7">
                                            <p class="form-control-static">
                                                <input type="file" style="border: 0px !important;" >
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="col-sm-5 control-label form-label">Comprobante arancel correspondiente: </label>
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
                        <BR>
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
    </script>

    <script type="text/javascript">
    var frm = $('#save_l7');
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
