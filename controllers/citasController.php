<?php

class citasController {
    public function __construct() {
        require_once("modelos/citasModel.php");        
    }
    
    public function index() {
        require_once("views/nueva_cita.php");
    }

     public function guardar(){
        $cita = new Cita;
        $cedula = $_POST['cedula'];
        $fecha_invert = $_POST['fecha'];            
        $invert = explode("/",$fecha_invert); 
        $fecha = $invert[2]."-".$invert[1]."-".$invert[0]; 
        $hora = $_POST['hora'];
        $status = $_POST['status'];        
        $cita->guardar_cita($cedula,$fecha,$hora,$status);
      }
}

?>