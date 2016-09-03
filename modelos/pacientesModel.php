<?php
/*
* pacientes
*/
class Paciente extends Conectar {

     public function crear_paciente($nro_historia, $ced_paciente, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido,  $fecha_nac, $tipo_sangre, $tel_casa, $tel_movil, $direccion){
        try {
        $query = $this->dbh->prepare('INSERT INTO pacientes VALUES(?,?,?,?,?,?,?,?,?,?,?)');
        $query->bindParam(1, $nro_historia);
        $query->bindParam(2, $ced_paciente);
        $query->bindParam(3, $primer_nombre);
        $query->bindParam(4, $segundo_nombre);
        $query->bindParam(5, $primer_apellido);
        $query->bindParam(6, $segundo_apellido);
        $query->bindParam(7, $fecha_nac);
        $query->bindParam(8, $tipo_sangre);
        $query->bindParam(9, $direccion);
        $query->bindParam(10, $tel_movil);
        $query->bindParam(11, $tel_casa);        
        $query->execute();
        $this->dbh = null;
        /* Alerta de notificacion de registro */
        echo utf8_decode("<script type='text/javascript'>
        alert('Guardado.');
         window.location='?controller=pacientes&action=index';
        </script>");
        exit();
        } catch (PDOException $e) {
        $e->getMessage();
        }
    }
     public function buscar_paciente($cedula) {
        try{
            $query = $this->dbh->prepare('SELECT * FROM pacientes WHERE ced_paciente = ? ');
            $query->bindParam(1, $cedula);
            $query->execute();
            $data = $query->fetch();
            echo json_encode($data);
            $this->dbh = null;
        }catch (PDOException $e)
        {
            $e->getMessage();
        }
      }

        public function num_historia()    {
            try{
                    $query = $this->dbh->prepare('SELECT MAX(nro_historia) FROM pacientes ;');
                    $query->execute();
                         return $query->fetch(PDO::FETCH_ASSOC);
                      $this->dbh = null;
             }catch (PDOException $e)
            {
                $e->getMessage();
             }
        }



}
?>