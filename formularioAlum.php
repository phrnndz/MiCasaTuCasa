<!doctype html>
<html class="" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Titulo de página</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" href="css/main.css">
        <!-- terminan los css -->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="navbar-fixed light-blue darken-3">
          <nav>
            <div class="nav-wrapper light-blue darken-3 z-depth-0">
              <a href="#!" class="brand-logo">&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o-notch"></i></a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
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

        <div class="row light-blue">
          <div class="col s12 m12">
                <div class="row">
                  <h3 class="center-align "> INSERTA TUS DATOS </h3>
                </div> 
          </div>
        </div>
        <!-- empieza wrapper -->
        <div class="container">
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <input id="number" type="tel" pattern='[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}' class="validate">
                  <label for="number">No Teléfono</label>
                </div>

                <div class="input-field col s12">
                  <input id="password" type="password" class="validate">
                  <label for="password">Password</label>
                </div>

                <div class="input-field col s12">
                  <input id="name" type="text" class="validate">
                  <label for="name">Nombre</label>
                </div>
                
                <div class="input-field col s6">
                  <input id="matricula" type="text" pattern='' class="validate">
                  <label for="matricula">Matricula</label>
                </div>

                <div class="input-field col s6">
                  <input id="age" type="number" pattern='' class="validate">
                  <label for="age">Edad</label>
                </div>              
              </div>
            </form>

                <div class="col s12">
                    <select class="browser-default col s12" name="place">
                        <option value="" disabled selected>¿De dónde eres?</option>
                        <option value="1">Istmo</option>
                        <option value="2">Costa</option>
                        <option value="3">Lugar</option>
                    </select>  
                </div>

                <div class="input-field col s12">
                  <input id="ingreso" type="number" pattern='' class="validate">
                  <label for="ingreso">Ingreso Mensual</label>
                </div> 

                <div class="input-field col s12">
                  <input id="lengua" type="text" pattern='' class="validate">
                  <label for="lengua">Lengua Materna</label>
                </div> 

                <div class="col s12">
                  <form class="col s2" action="#">
                    <div class="file-field input-field">
                      <div class="btn light-blue darken-3">
                        <span>Foto</span>
                        <input type="file">
                      </div>
                    </div>
                  </form>
                </div>


                <div class="col s12">
                    <form class="col s12" action="#">
                        <p>
                          <input type="checkbox" id="terminos" />
                          <label for="terminos"><a href="#">Términos y Condiciones</a></label>
                        </p>
                      </form>      
                </div>



                
                <button class="btn red right waves-effect waves-light z-depth-4" type="submit" name="action">Registrarme
                </button>  
                
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
