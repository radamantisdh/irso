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

    <div class="login-form">
      <form id="login" action="login_do.php" method="POST">
        <div class="top">
          <img src="views/img/logo.jpg" alt="icon" class="icon">
          <h1>IRSO</h1>
          <h4>Ingreso y tramitación de resoluciones salud ocupacional</h4>
        </div>
        <div class="form-area">
          <div id="respuesta"></div>
          <div class="group">
            <input type="text" class="form-control" placeholder="Ingrese usuario" name="usuario">
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <i class="fa fa-key"></i>
          </div>
          <div class="checkbox checkbox-primary">
            <input id="checkbox101" type="checkbox" checked>
            <label for="checkbox101"> Recordarme</label>
          </div>
		  <input type="submit" value="Ingresar" class="btn btn-default btn-block">
          
        </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="#"><i class="fa fa-external-link"></i> Solicitar registro</a></div>
        <div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i> Olvide la contraseña</a></div>
      </div>
    </div>
<!-- ================================================
jQuery Library
================================================ -->
    <script type="text/javascript" src="views/js/jquery.min.js"></script>


<script type="text/javascript">
    var frm = $('#login');
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