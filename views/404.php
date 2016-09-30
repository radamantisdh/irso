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
  <style type="text/css">
    body{background: #F5F5F5;}
  </style>
  </head>
  <body>

    <div class="error-pages">

        <img src="views/img/404.png" alt="404" class="icon" width="400" height="260">
        <h1>Lo sentimos pero no hemos podido encontrar esta página</h1>
        <h4>Parece que esta página no existe o ha sido eliminada.</h4>
        <form>
          <input type="text" class="form-control" placeholder="Search for Page">
          <i class="fa fa-search"></i>
        </form>

        <div class="bottom-links">
          <a href="<?php echo $GLOBALS['base']; ?>/salir.php" class="btn btn-default">Go Back</a>
          <a href="<?php  echo $GLOBALS['base']; ?>?modulo=inicio" class="btn btn-light">Go Homepage</a>
        </div>

    </div>

</body>
</html>