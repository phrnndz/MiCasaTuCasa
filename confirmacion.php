<!doctype html>
<html class="" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Titulo de página</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/main.css">
        <!-- terminan los css -->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="navbar-fixed  pink darken-4">
          <nav>
            <div class="nav-wrapper  pink darken-4 z-depth-0">
              <a href="#" data-activates="mobile-demo" class="button-collapse"><img class="usericon" src="img/images.jpeg" alt="Usuario"></a>
              <span>Pamela</span>
              <ul class="left hide-on-med-and-down">
                <li><a href="#">Perfil</a></li>
                <li><a href="#">Cerrar Sesión</a></li>
              </ul>
              <ul class="side-nav" id="mobile-demo">
                <li><a href="#">Perfil</a></li>
                <li><a href="#">Cerrar Sesión</a></li>
              </ul>
            </div>
          </nav>  
        </div> 



<div class="container">
            <div id="notificacion" class="confirm-card">
              <div class="card alumno">
                <div class="card-image">
                  <img src="img/images2.jpeg">
                  <span class="card-title">Joel Perez</span>
                </div>
                <div class="card-content">
                  <p><i class="material-icons">phone</i> telefono</p>
                  <p><i class="material-icons">query_builder</i> hora</p>
                  <p><i class="material-icons">location_on</i> lugar</p>
                </div>
                <div class="card-action">
                  <a class="pink accent-4 waves-effect waves-light btn">Confirmar</a>
                </div>
              </div>

            </div>
        </div>



   

        <script src="js/jquery-2.2.1.min.js"></script>
        <script src="js/materialize.min.js"></script>       
        <script src="js/materialize.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
                    $(".button-collapse").sideNav();
                       $('.slider').slider({full_width: false});
                  $('.parallax').parallax();
                      $('.modal-trigger').leanModal();
                        // <--efecto flat botones --->
                         $('.fixed-action-btn').closeFAB();
                         $('.fixed-action-btn').openFAB();
                          $('select').material_select();
                 
              });       
            </script>
    </body>
</html>
