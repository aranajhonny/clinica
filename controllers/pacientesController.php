<?php
/*
* controlador de pacientes
*/
class pacientesController {
    public function index() {
        require_once("views/registrar_paciente.php");
    }

    public function create() {
            $nro_historia = $_POST['nro_historia'];
            $ced_paciente = $_POST['ced_paciente'];
            $primer_nombre = $_POST['primer_nombre'];
            $segundo_nombre = $_POST['segundo_nombre'];
            $primer_apellido = $_POST['primer_apellido'];
            $segundo_apellido = $_POST['segundo_apellido'];
            $fecha_nac = $_POST['fecha_nac'];
            $tipo_sangre = $_POST['tipo_sangre'];
            $tel_movil = $_POST['tel_movil'];
            $tel_casa = $_POST['tel_casa'];
            $direccion = $_POST['direccion'];
            echo $nro_historia, $ced_paciente, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido,  $fecha_nac, $tipo_sangre, $tel_casa, $tel_movil, $direccion;
    }
}

?>