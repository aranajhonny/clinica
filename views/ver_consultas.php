<?php
    require_once("header.php");
 ?>
<?php
foreach($citas as $cita){
	$json[] = array("title"=>$cita->paciente,"url"=>"./?view=editreservation&id=".$cita->id,"start"=>$cita->fecha."T".$cita->hora);
}
 ?>
        <div class="container">
            <div class="page-header col-xs-offset-5">
                <h3>Consultas del dia</h3>
            </div>
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <h1>Calendario</h1>
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <?php
    require_once("footer.php");
?>
            <script>
                $(document).ready(function() {
                    $('#calendar').fullCalendar({
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'month,basicWeek,basicDay'
                        },
                        lang: 'es',
                        eventLimit: true, // allow "more" link when too many events
                        events: [{
                            title: 'Arana jhonny',
                            url: 'google.com',
                            start: '2016-09-01T08:30:00'
                        }, {
                            title: 'Long Event',
                            start: '2016-06-07T16:00:00',
                        }]
                    });

                });
            </script>