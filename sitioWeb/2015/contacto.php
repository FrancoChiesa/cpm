<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comunidad del Padre Misericordioso | Contacto</title>
    <meta name="description" content="Asociación civil católica sin fines de lucro que ayuda a quienes padecen la problemática de las adicciones y viven en situación de calle. Rosario - Argentina." />
<meta name="keywords" content="asociacion, civil, catolica, sin fines de lucro, ong, drogas, rosario, adicciones, salir, calle, personas" />
<link rel="shortcut icon" href="images/favicon.png" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="css/padremisericordioso.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    

  </head>
  <body id="contacto">
    

    <nav class="navbar navbar-default" id="menuprincipal" role="navigation" data-spy="affix" data-offset-top="20">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#linksmenu">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.html" id="logo"><img src="images/logo.png" class="img-responsive" alt="Comunidad del Padre Misericordioso" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="linksmenu">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html"><span class="glyphicon glyphicon-home"></span></a></li>

        <li class="dropdown" id="necesitoAyuda">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Necesito ayuda <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="internacion.html">Internación</a></li>
            <li><a href="centro_de_dia.html">Centro de día</a></li>
            <li><a href="grupo_para_familiares.html">Grupo para familiares</a></li>
            <li><a href="taller_costura.html">Taller de costura</a></li>
            <li><a href="material_de_lectura.html">Material de lectura</a></li>
          </ul>
        </li>

        <li class="dropdown"  id="quieroAyudar">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quiero ayudar <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="voluntariado.html">Voluntariado</a></li>
            <li><a href="donaciones.html">Donación económica</a></li>
          </ul>
        </li>


        <li id="espiritualidad">
          <a href="espiritualidad.html" >Espiritualidad</a>
        </li>


        <li class="dropdown active" id="acercaDe">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acerca de <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="quienes_somos.html">Quienes somos</a></li>
            <li><a href="eventos.html">Eventos</a></li>
            
            <li class="active"><a href="contacto.php">Contacto</a></li>
          </ul>
        </li>


      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    

<div class="container">


<div class="row">
<img src="images/contacto.png" alt="callejeros de la fe" class="img-responsive" id="imagenSeccion" />
  <div class="col-md-9">

    <p class="text-justify">Nuestra sede se encuentra ubicada en Zeballos 668 - Rosario, Argentina.</p>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.8086591923593!2d-60.63442640000004!3d-32.956060799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7ab038ad3a575%3A0xf0c9a975838b4cab!2sE.+Zeballos+668%2C+Rosario%2C+Santa+Fe!5e0!3m2!1ses-419!2sar!4v1408674632918" width="840" height="300" frameborder="0" style="border:0"></iframe>

    <?php if(isset($_POST['enviar'])){

    $mail = $_POST['email'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $conociste = $_POST['conociste'];

    $cabeceras = "From: $nombre" . "\r\n" .
    "Reply-To: $mail" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $mensaje = "- Nombre: " . $_POST['nombre'] . "\n- Telefono: " . $_POST['telefono'] . "\n- Consulta: " . $_POST['consulta'];
      

    if($telefono || $mail){

      if( mail("comunidadpadremisericordioso@gmail.com","Mensaje de la web", $mensaje, $cabeceras) ){
        echo '<div class="enviado" style="background-color: #B1EDB7!important; color: #333!important; text-align: center; padding: 10px; margin-bottom: 25px; text-align: justify;">Muchas gracias por comunicarte.<br />Muy pronto nos pondremos en contacto.</div>';
      }else{
        echo '<div class="enviado" style="background-color: #F3B8B8!important; color: #333!important; text-align: center; padding: 10px; margin-bottom: 25px; text-align: justify;">Disculpe, su mensaje no pudo ser enviado. Si el problema persiste, intente comunicarse telefónicamente o mediante nuestro <a href="https://www.facebook.com/salontweety" target="_blank">Facebook</a></div>';
        $noenviado = true;
      }
  }else{
    echo '<div class="enviado" style="background-color: #F3B8B8!important; color: #333!important; text-align: center; padding: 10px; margin-bottom: 25px; text-align: justify;">Por favor, complete su Teléfono o Correo electrónico</div>';    
  }




  } ?>    
        <form action="contacto.php" method="POST" id="contacto">
    <div class="formContenedor">
      <div class="formIzq"><label for="nombre">Su nombre:</label><br /> <input type="text" name="nombre" id="nombre" /></div>
      <div class="clear"></div>
    </div>
    <div class="formContenedor">
      <div class="formIzq"><label for="telefono">Teléfono fijo o celular: <sup>*</sup></label><br /> <input type="text" name="telefono" id="telefono" /></div>
      <div class="formDer"><label for="email">Correo electrónico: <sup>*</sup></label><br /> <input type="text" name="email" id="email" /></div>
      <div class="clear"></div>
    </div>

    <div class="inputForm"><label for="consulta">Consulta:</label><br /> <textarea rows="5" cols="60" name="consulta" id="consulta"><?php if ($noenviado) echo $_POST['consulta']; ?></textarea></div>

    

    <input type="submit" value="Enviar" name="enviar" id="enviar" />
        </form>
    

  </div><!-- /col-md-9 -->

  <div class="col-md-3">

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Línea directa</h3>
      </div>
      <div class="panel-body text-justify">
        <p>Un profesional aguarda tu llamado</p>
        <h2 class="text-left">(0341) 440 6670</h2>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Horario de atención</h3>
      </div>
      <div class="panel-body text-justify">
        <p>Te esperamos para charlar en nuestro horario de atención de Lunes a Viernes de 09:00 a 12:30hs y de 16:00 a 20:30hs. en Zeballos 668, Rosario, Argentina.</p>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Redes sociales</h3>
      </div>
      <div class="panel-body text-justify">
        <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FComunidadDelPadreMisericordioso%3Ffref%3Dts&amp;width=230&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=605950432771617" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:230px; height:258px;" allowTransparency="true"></iframe>
      </div>
    </div>

  </div><!-- /col-md-3 -->

</div>




</div><!-- /container -->


<div id="footer" class="container-fluid">

  <address class="text-center">
    <strong>Zeballos 668</strong> — Rosario, Argentina<br />
    <abbr title="Teléfono">Tel.:</abbr> (0341) 440 6670
  </address>

  <div class="row">

    <div class="col-md-9">

      <dl class="dl-horizontal">
      <dt>Necesito ayuda</dt>
      <dd><a href="internacion.html">Internación</a> | <a href="centro_de_dia.html">Centro de día</a> | <a href="grupo_para_familiares.html">Grupo para familiares</a> | <a href="taller_costura.html">Taller de costura</a> | <a href="material_de_lectura.html">Material de lectura</a></dd>

      <dt>Quiero ayudar</dt>
      <dd><a href="voluntariado.html">Voluntariado</a> | <a href="donaciones.html">Donaciones</a></dd>

      <dt>Espiritualidad</dt>
      <dd><a href="espiritualidad.html">Espiritualidad</a></dd>

      <dt>Acerca de</dt>
      <dd><a href="quienes_somos.html">Quienes somos</a> | <a href="eventos.html">Eventos</a> | <a href="contacto.php">Contacto</a></dd>
      </dl>
      
    </div>
    
    <div class="col-md-3 text-right">
      <small>&copy; 2014 — Comunidad del Padre Misericordioso.</small>
    </div>

    

  </div><!-- /row -->

  
</div><!-- /footer -->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>

    <script type="text/javascript" charset="utf-8">
      $(window).load(function() {
        $('.flexslider').flexslider();
      });
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-100475593-1', 'auto');
      ga('send', 'pageview');

    </script>
  </body>
</html>