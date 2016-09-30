<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
    <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
    <title>IRSO - Ingreso y tramitación de resoluciones salud ocupacional</title>
    <style type="text/css">
          html {
        height: 100%;
      }
      
      body {
          height: 100%;
          margin-top: 0px;
        }
        
        #contenedor {
            height: 100%;
          }
    </style>
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
    <div class="content" id="contenedor">
        <!-- Start Page Header -->
        <div class="page-header">
            <h1 class="title">Bienvenido <?php echo $db->leer_un_dato("SELECT * FROM usuarios Where usuario='".$_SESSION['usuario']."'", "nombre"); ?>
            </h1>
            <ol class="breadcrumb">
                <li class="active">Sistema de ingreso y tramitación de resoluciones de salud ocupacional</li>
            </ol>
            <!-- Start Page Header Right Div -->
            <div class="right">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="<?php echo $GLOBALS['base']; ?>/salir.php" class="btn btn-light">Salir</a>
                    <a href="<?php  echo $GLOBALS['base']; ?>?modulo=inicio" class="btn btn-light"><i class="fa fa-refresh"></i></a>
                </div>
            </div>
            <!-- End Page Header Right Div -->
        </div>
        <!-- End Page Header -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTAINER -->
        <div class="container-widget">
            <div class="row">
                <!-- End Chart Daily -->
                <!-- Start Files -->
                <div class="col-md-12">
                    <div class="panel panel-widget">
                        <div class="panel-title">
                            Solicitudes <span class="label label-danger">Salud ocupacional</span>
                            <ul class="panel-tools">
                                <li><a class="icon"><i class="fa fa-refresh"></i></a></li>
                                <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <!-- Start left -->
                            <div class="col-md-12 col-lg-12">
                                <a href="<?php  echo $GLOBALS['base']; ?>?modulo=simulacion" class="btn btn-primary btn-block btn-xl">Simulación de Solicitudes</a>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="col-md-12 col-lg-12">
                                <a href="<?php  echo $GLOBALS['base']; ?>?modulo=dasboard" class="btn btn-primary btn-block btn-xl">Ingreso de Solicitudes</a>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="col-md-12 col-lg-12">
                            <a href="<?php  echo $GLOBALS['base']; ?>?modulo=administrativo" class="btn btn-primary btn-block btn-xl">Revisión de Solicitudes</a>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="col-md-12 col-lg-12">
                            <a href="<?php  echo $GLOBALS['base']; ?>?modulo=500" class="btn btn-primary btn-block btn-xl">Solicitudes con Observaciones</a>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="col-md-12 col-lg-12">
                            <a href="<?php  echo $GLOBALS['base']; ?>?modulo=500" class="btn btn-primary btn-block btn-xl">Tramites Finalizados</a>
                            </div>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Files -->
        </div>
        <!-- End First Row -->
        <!-- Start Second Row -->
        <br>
        
        <!-- End Fifth Row -->
    
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
Bootstrap WYSIHTML5
================================================ -->
    <!-- main file -->
    <script type="text/javascript" src="views/js/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js"></script>
    <!-- bootstrap file -->
    <script type="text/javascript" src="views/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
    <!-- ================================================
Summernote
================================================ -->
    <script type="text/javascript" src="views/js/summernote/summernote.min.js"></script>
    <!-- ================================================
Flot Chart
================================================ -->
    <!-- main file -->
    <script type="text/javascript" src="views/js/flot-chart/flot-chart.js"></script>
    <!-- time.js -->
    <script type="text/javascript" src="views/js/flot-chart/flot-chart-time.js"></script>
    <!-- stack.js -->
    <script type="text/javascript" src="views/js/flot-chart/flot-chart-stack.js"></script>
    <!-- pie.js -->
    <script type="text/javascript" src="views/js/flot-chart/flot-chart-pie.js"></script>
    <!-- demo codes -->
    <script type="text/javascript" src="views/js/flot-chart/flot-chart-plugin.js"></script>
    <!-- ================================================
Chartist
================================================ -->
    <!-- main file -->
    <script type="text/javascript" src="views/js/chartist/chartist.js"></script>
    <!-- demo codes -->
    <script type="text/javascript" src="views/js/chartist/chartist-plugin.js"></script>
    <!-- ================================================
Easy Pie Chart
================================================ -->
    <!-- main file -->
    <script type="text/javascript" src="views/js/easypiechart/easypiechart.js"></script>
    <!-- demo codes -->
    <script type="text/javascript" src="views/js/easypiechart/easypiechart-plugin.js"></script>
    <!-- ================================================
Sparkline
================================================ -->
    <!-- main file -->
    <script type="text/javascript" src="views/js/sparkline/sparkline.js"></script>
    <!-- demo codes -->
    <script type="text/javascript" src="views/js/sparkline/sparkline-plugin.js"></script>
    <!-- ================================================
Rickshaw
================================================ -->
    <!-- d3 -->
    <script src="views/js/rickshaw/d3.v3.js"></script>
    <!-- main file -->
    <script src="views/js/rickshaw/rickshaw.js"></script>
    <!-- demo codes -->
    <script src="views/js/rickshaw/rickshaw-plugin.js"></script>
    <!-- ================================================
Data Tables
================================================ -->
    <script src="views/js/datatables/datatables.min.js"></script>
    <!-- ================================================
Sweet Alert
================================================ -->
    <script src="views/js/sweet-alert/sweet-alert.min.js"></script>
    <!-- ================================================
Kode Alert
================================================ -->
    <script src="views/js/kode-alert/main.js"></script>
    <!-- ================================================
Gmaps
================================================ -->
    <!-- google maps api -->
    <script src="views/http://maps.google.com/maps/api/js?sensor=true"></script>
    <!-- main file -->
    <script src="views/js/gmaps/gmaps.js"></script>
    <!-- demo codes -->
    <script src="views/js/gmaps/gmaps-plugin.js"></script>
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
Below codes are only for index widgets
================================================ -->
    <!-- Today Sales -->
    <script>
    // set up our data series with 50 random data points

    var seriesData = [
        [],
        [],
        []
    ];
    var random = new Rickshaw.Fixtures.RandomData(20);

    for (var i = 0; i < 110; i++) {
        random.addData(seriesData);
    }

    // instantiate our graph!

    var graph = new Rickshaw.Graph({
        element: document.getElementById("todaysales"),
        renderer: 'bar',
        series: [{
            color: "#33577B",
            data: seriesData[0],
            name: 'Photodune'
        }, {
            color: "#77BBFF",
            data: seriesData[1],
            name: 'Themeforest'
        }, {
            color: "#C1E0FF",
            data: seriesData[2],
            name: 'Codecanyon'
        }]
    });

    graph.render();

    var hoverDetail = new Rickshaw.Graph.HoverDetail({
        graph: graph,
        formatter: function(series, x, y) {
            var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
            var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
            var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
            return content;
        }
    });
    </script>
    <!-- Today Activity -->
    <script>
    // set up our data series with 50 random data points

    var seriesData = [
        [],
        [],
        []
    ];
    var random = new Rickshaw.Fixtures.RandomData(20);

    for (var i = 0; i < 50; i++) {
        random.addData(seriesData);
    }

    // instantiate our graph!

    var graph = new Rickshaw.Graph({
        element: document.getElementById("todayactivity"),
        renderer: 'area',
        series: [{
            color: "#9A80B9",
            data: seriesData[0],
            name: 'London'
        }, {
            color: "#CDC0DC",
            data: seriesData[1],
            name: 'Tokyo'
        }]
    });

    graph.render();

    var hoverDetail = new Rickshaw.Graph.HoverDetail({
        graph: graph,
        formatter: function(series, x, y) {
            var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
            var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
            var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
            return content;
        }
    });
    </script>
</body>

</html>
