<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>Login | UNIS</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <div class="container">
    <div class="row">
        <div class="col-xs-0 col-sm-0 col-md-2 col-lg-3"></div>
        <div class="col-xs-12 col-sm-8 col-md-7 col-lg-6">
            <form method="post" action="" class="form-horizontal" role="form">
            <h2>UNIS</h2>
            <fieldset>
                <legend>Crear nueva cuenta</legend>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="codigo">Código:</label>
                    <div class="col-sm-9"><input type="text" name="codigo" class="form-control"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="nombre">Nombre:</label>
                    <div class="col-sm-9"><input type="text" name="nombre" class="form-control"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="email">E-mail:</label>
                    <div class="col-sm-9"><input type="text" name="email" class="form-control"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="password">Password:</label>
                    <div class="col-sm-9"><input type="password" name="password" class="form-control"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="password">Re-Password:</label>
                    <div class="col-sm-9"><input type="password" name="re-password" class="form-control"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="resolucion">Resolucion:</label>
                    <div class="col-sm-9"><input type="text" name="resolucion" class="form-control"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="ruc">RUC:</label>
                    <div class="col-sm-9"><input type="text" name="ruc" class="form-control"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="direccion">Dirección:</label>
                    <div class="col-sm-9"><input type="text" name="direccion" class="form-control"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="telefono">Telefono:</label>
                    <div class="col-sm-9"><input type="text" name="telefono" class="form-control"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="descripcion">Descripción:</label>
                    <div class="col-sm-9"><textarea name="telefono" class="form-control"></textarea></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" name="crear" class="btn btn-primary" >Registrarse</button>

                    <button type="reset" name="crear" class="btn btn-primary" >Nuevo</button>
                    </div>
                </div>
            </fieldset>
            </form>
    </div>
</div>

    <hr class="featurette-divider">
    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>© 2014 CECI, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
    </div><!-- /.container -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
