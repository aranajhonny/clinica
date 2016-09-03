<?php

class citasController {
    public function __construct() {
        require_once("modelos/citasModel.php");        
    }
    public function index() {
        require_once("views/nueva_cita.php");
    }

    public function create() {
        
    }
}

?>