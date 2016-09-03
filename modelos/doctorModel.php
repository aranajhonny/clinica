<?php
/*
* pacientes
*/
class Doctor extends Conectar {

     public function crear_doctor($ced_doctor, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $telefono, $direccion, $especialidad){
        try {
        $query = $this->dbh->prepare('INSERT INTO doctores VALUES(?,?,?,?,?,?,?,?)');
        $query->bindParam(1, $ced_doctor);
        $query->bindParam(2, $primer_nombre);
        $query->bindParam(3, $segundo_nombre);
        $query->bindParam(4, $primer_apellido);
        $query->bindParam(5, $segundo_apellido);
        $query->bindParam(6, $telefono);        
        $query->bindParam(7, $direccion);
        $query->bindParam(8, $especialidad);        
        $query->execute();
        $this->dbh = null;
        /* Alerta de notificacion de registro */
        echo utf8_decode("<script type='text/javascript'>
        alert('Guardado.');
         window.location='?controller=doctor&action=index';
        </script>");
        exit();
        } catch (PDOException $e) {
        $e->getMessage();
        }
    }

}
?>