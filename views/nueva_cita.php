<?php
    require_once("header.php");
 ?>

    <div class="container">
        <div class="page-header col-xs-offset-5">
            <h3>Generar nueva cita</h3>
        </div>
        <div class="row">
            <form action="" id="form_cita">
                <div class="panel panel-default col-xs-offset-1" style="width: 960px;">
                    <div class="panel-heading ">
                        <center>
                            <h4>Datos del paciente</h4>
                        </center>
                    </div>
                    <div class="panel-body ">
                        <div class="col-xs-4 col-xs-offset-2 form-group" style="margin-top: 5px;">
                            <label for="cedula ">Cedula del paciente</label>
                            <div class="input-group ">
                                <input type="text " class="form-control" id="cedula" name="cedula" placeholder="Cedula ... ">
                                <span class="input-group-btn ">
                        <button class="btn btn-default " type="button" onclick="buscar_paciente()">Buscar</button>
                    </span>
                            </div>
                        </div>
                        <div class="form-group col-xs-4  ">
                            <p class="margin"><strong>Numero de historia</strong></p>
                            <input type="text" name="nro_historia" class="form-control" disabled>
                        </div>
                        <div class="form-group col-xs-4 col-xs-offset-2   ">
                            <p class="margin"><strong>Nombres</strong></p>
                            <input type="text" name="nombre" class="form-control" disabled>
                        </div>
                        <div class="form-group col-xs-4 ">
                            <p class="margin"><strong>Apellidos</strong></p>
                            <input type="text" name="apellido" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default col-xs-offset-1" style="width: 960px;">
                    <div class="panel-heading ">
                        <center>
                            <h4>Datos de la cita</h4>
                        </center>
                    </div>
                    <div class="panel-body ">
                        <div class="form-group col-xs-4  col-xs-offset-2" id="sandbox-container">
                            <label for="fecha_nac">Seleccione la Fecha</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" name="fecha" id="fecha" placeholder="DD/MM/AAAA" required="required">
                                <span class="input-group-addon">
                        <i class="glyphicon glyphicon-th"></i>
                      </span>
                            </div>
                        </div>
                        <div class="form-group col-xs-4 ">
                            <div class="form-group">
                                <label for="sel1">Seleccione la hora</label>
                                <select class="form-control" id="sel1" name="hora">
                                <option value=""></option>                                                                    
                                <option value="07:00:00">7:00 AM</option>                                
                                <option value="07:45:00">7:45 AM</option>
                                <option value="08:30:00">8:30 AM</option>
                                <option value="09:15:00">9:15 AM</option>
                                <option value="10:00:00">10:00 AM</option>
                                <option value="10:45:00">10:45 AM</option>
                                <option value="1:00:00">1:00 PM</option>
                                <option value="1:45:00">1:45 PM</option>
                                <option value="2:30:00">2:30 PM</option>
                                <option value="3:15:00">3:15 PM</option>
                                <option value="4:00:00">4:00 PM</option>
                                <option value="4:45:00">4:45 PM</option>                                
                            </select>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="status" value="pendiente" />
                </div>
            </form>
            <div class=" col-xs-3 col-xs-offset-5 ">
                <button type="submit" class="btn btn-default glyphicon glyphicon-floppy-disk" onclick="guardar_cita()"> GUARDAR</button>
                <button type="reset" class="btn btn-default glyphicon glyphicon-repeat"> LIMPIAR</button>
            </div>
        </div>
    </div>
    <br>
    <br>
    <?php
    require_once("footer.php");
?>