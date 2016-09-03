<?php

class doctorController {
    public function __construct() {
        require_once("modelos/doctorModel.php");        
    }
    public function index() {
        require_once("views/registrar_doctor.php");
    }

    public function create() {
            $doctor = new Doctor;
            $ced_doctor = $_POST['ced_doctor'];
            $primer_nombre = $_POST['primer_nombre'];
            $segundo_nombre = $_POST['segundo_nombre'];
            $primer_apellido = $_POST['primer_apellido'];
            $segundo_apellido = $_POST['segundo_apellido'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $especialidad = $_POST['especialidad'];            
            $doctor->crear_doctor($ced_doctor, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $telefono, $direccion, $especialidad);
    }
}

?>