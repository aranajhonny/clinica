<!doctype html>
<html class="no-js" lang="es_ES" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo Conectar::ruta()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Conectar::ruta()?>assets/css/justified-nav.css">
</head>
<body>
<div class="container">
<center>
    <div>
        <h2  class="text-muted">Centro Clinico La Fontana</h2>
        <h2  class="text-muted">Dra Lila N. Vasquez P.</h2>
        <h3  class="text-muted">Dermatologa</h3>
    </div>
</center>
    </div>
<div class="container">

    <!-- The justified navigation menu is meant for single line per list item.
         Multiple lines will require custom code not provided by Bootstrap. -->
    <div class="masthead">
        <nav>
            <ul class="nav nav-justified">
                <li><a href="#">Home</a></li>
                <li><a href="#">Registrar paciente</a></li>
                <li><a href="#">Citas</a></li>
                <li><a href="#">Consultas</a></li>
                <li><a href="#">Historias</a></li>
                <li><a href="#">Reportes</a></li>
                <li><a href="#">Mantenimiento</a></li>
            </ul>
        </nav>
    </div>

    <!-- Jumbotron -->
    <div class="jumbotron">

        </div><!-- /.container -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <img src="assets/img/banner3.jpg" alt="Chania">
                </div>

                <div class="item">
                    <img src="assets/img/banner2.jpg" alt="Chania">
                </div>

                <div class="item">
                    <img src="assets/img/banner1.jpg" alt="Flower">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>


</div> <!-- /container -->

<script src="<?php echo Conectar::ruta()?>assets/js/jquery-3.1.0.min.js"></script>
<script src="<?php echo Conectar::ruta()?>assets/js/bootstrap.min.js"></script>
</body>
</html>