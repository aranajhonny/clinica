<?php
/*
* pacientes
*/
class Cita extends Conectar {

  public function guardar_cita($cedula,$fecha,$hora,$status){
        try {
        $query = $this->dbh->prepare('INSERT INTO citas VALUES(?,?,?,?)');
        $query->bindParam(1, $cedula);
        $query->bindParam(2, $fecha);
        $query->bindParam(3, $hora);
        $query->bindParam(4, $status);        
        $query->execute();
        $this->dbh = null;
        /* Alerta de notificacion de registro */
        $json = array();
        $json['success'] = true;
        echo json_encode($json);
        } catch (PDOException $e) {
        $e->getMessage();
        }
    }

}
?>