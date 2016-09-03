<?php
    require_once("header.php");
 ?>
    <div class="container">
        <div class="row">
            <br>
            <br>
            <form action="?controller=doctor&action=create" method="post">
                <div class="form-group col-xs-4 col-xs-offset-2">
                    <label for="ced_doctor">Cedula</label>
                    <input type="text" class="form-control" name="ced_doctor" id="ced_doctor" placeholder="cedula" required="required">
                </div>
                <div class="form-group col-xs-4 ">
                    <label for="primer_nombre">Primer Nombre</label>
                    <input type="text" class="form-control" name="primer_nombre" id="primer_nombre" placeholder="primer nombre" required="required">
                </div>
                <div class="form-group col-xs-4 col-xs-offset-2">
                    <label for="segundo_nombre">Segundo Nombre</label>
                    <input type="text" class="form-control" name="segundo_nombre" id="segundo_nombre" placeholder="segundo nombre" required="required">
                </div>
                <div class="form-group col-xs-4 ">
                    <label for="primer_apellido">Primer apellido</label>
                    <input type="text" class="form-control" name="primer_apellido" id="primer_apellido" placeholder="primer apellido" required="required">
                </div>
                <div class="form-group col-xs-4 col-xs-offset-2">
                    <label for="segundo_apellido">Segundo apellido</label>
                    <input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido" placeholder="segundo apellido" required="required">
                </div>
                <div class="form-group col-xs-4  ">
                    <label for="tel_movil">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="04XX/0000000" required="required">
                </div>
                <div class="form-group col-xs-4 col-xs-offset-2">
                    <label for="tel_casa">especialidad</label>
                    <input type="text" class="form-control" id="especialidad" name="especialidad" placeholder="Ejem.... Dermatologia ">
                </div>
                <div class="form-group col-xs-8 col-xs-offset-2 ">
                    <label for="Direccion">Direccion</label>
                    <textarea id="direccion" name="direccion" class="form-control" rows="3" required="required"></textarea>
                </div>
                <div class=" col-xs-3 col-xs-offset-5 ">
                    <button type="submit" class="btn btn-default glyphicon glyphicon-floppy-disk"> GUARDAR</button>
                    <button type="reset" class="btn btn-default glyphicon glyphicon-repeat"> LIMPIAR</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    require_once("footer.php");
 ?>