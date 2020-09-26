<!DOCTYPE html>
<html>
    <head>
        <title>Inicio</title>

        <meta name="viewport" content="widht=device-widht, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
         
        <!--JQUERY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

        <!-- Nuestro css-->
        <link rel="stylesheet" type="text/css" href="static/css/inicio.css" th:href="@{/css/index.css}">
        
    </head>
    
            

    <body>

        <!--<a class="navbar-brand" href="#">
                    <img src="static/imagenes/escudo.jpg" widht="40" height="40">
                </a>-->

        <div class="top">
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#682444;">
                <a class="navbar-brand" href="#">
                    <img src="static/imagenes/escudo.jpg" widht="40" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Crear Servicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Configuracion de usuario <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cerrar sesion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>
                </div>
            </nav>
            
        </div>

        <div class="content-group text-center">
            <div class="col-sm-8 main-section">
                <div class="modal-content" id="modal">
                    <table class="tabla">
                        <thead id="tHeader">
                            <tr>
                                <th scope="col">Folio</th>
                                <th scope="col">Solicitante</th>
                                <th scope="col">Estado</th>
                            </tr>

                        </thead>

                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

            
        </div>

        <footer  style="width:100%; margin-left: 0px;"  >


            <div class="pie-pagina text-center" >
                <div class="container-fluid" >
                    <h4>ESCUELA SUPERIOR DE INGENIERIA MECANICA Y ELECTRICA UNIDAD ZACATENCO</h3>
                    <small>"La técnica al servicio de la patria"</small><br />
                    <p>Unidad de Informática</p>
                        
                </div>
            </div>

    </body>

</html>