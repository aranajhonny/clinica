<?php
    require_once("header.php");
 ?>
    <div class="container">
        <div class="row">
            <br>
            <br>
            <form action="?controller=pacientes&action=create" method="post">
                <div class="form-group col-md-4 col-md-offset-2">
                    <label for="nro_historia">Numero de historia</label>
                    <input type="text" class="form-control" name="nro_historia" id="nro_historia" disabled="true" required="required">
                </div>
                <div class="form-group col-md-4">
                    <label for="ced_paciente">Cedula</label>
                    <input type="text" class="form-control" name="ced_paciente" id="ced_paciente" placeholder="cedula" required="required">
                </div>
                <div class="form-group col-md-4 col-md-offset-2">
                    <label for="primer_nombre">Primer Nombre</label>
                    <input type="text" class="form-control" name="primer_nombre" id="primer_nombre" placeholder="primer nombre" required="required">
                </div>
                <div class="form-group col-md-4">
                    <label for="segundo_nombre">Segundo Nombre</label>
                    <input type="text" class="form-control" name="segundo_nombre" id="segundo_nombre" placeholder="segundo nombre" required="required">
                </div>
                <div class="form-group col-md-4 col-md-offset-2">
                    <label for="primer_apellido">Primer apellido</label>
                    <input type="text" class="form-control" name="primer_apellido" id="primer_apellido" placeholder="primer apellido" required="required">
                </div>
                <div class="form-group col-md-4">
                    <label for="segundo_apellido">Segundo apellido</label>
                    <input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido" placeholder="segundo apellido" required="required">
                </div>
                <div class="form-group col-md-4  col-md-offset-2" id="sandbox-container">
                    <label for="fecha_nac">Fecha de nacimiento</label>
                    <div class="input-group date">
                        <input type="text" class="form-control" name="fecha_nac" id="fecha_nac" placeholder="DD/MM/AAAA" required="required">
                        <span class="input-group-addon">
                        <i class="glyphicon glyphicon-th"></i>
                      </span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="tipo_de_sangre">Tipo de sangre</label>
                    <input type="text" class="form-control" id="tipo_sangre" name="tipo_sangre" placeholder="Tipo de sangre" required="required">
                </div>
                <div class="form-group col-md-4 col-md-offset-2 ">
                    <label for="tel_movil">Telefono movil</label>
                    <input type="text" class="form-control" id="tel_movil" name="tel_movil" placeholder="04XX/0000000" required="required">
                </div>
                <div class="form-group col-md-4 ">
                    <label for="tel_casa">Telefono de casa</label>
                    <input type="text" class="form-control" id="tel_casa" name="tel_casa" placeholder="04XX/0000000">
                </div>
                <div class="form-group col-md-8 col-md-offset-2 ">
                    <label for="Direccion">Direccion</label>
                    <textarea id="direccion" name="direccion" class="form-control" rows="3" required="required"></textarea>
                </div>
                <center>
                    <button type="submit" class="btn btn-default col-md-2 col-md-offset-5">Submit</button>
                </center>
            </form>
        </div>
    </div>

    <?php
    require_once("footer.php");
 ?>