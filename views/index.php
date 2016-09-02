<?php
    require_once("header.php");
 ?>
    <div class="container">
        <center>
            <div>
                <h2 class="text-muted">Centro Clinico La Fontana</h2>
                <h2 class="text-muted">Dra Lila N. Vasquez P.</h2>
                <h3 class="text-muted">Dermatologa</h3>
            </div>
        </center>
    </div>
    <div class="container">
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
        <div class="jumbotron">
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
    </div>
<?php
    require_once("footer.php");
 ?>