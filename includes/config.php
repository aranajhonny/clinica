
<?php
class Conectar
{
    public $dbh;
    public function __construct()
    {
        try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=clinica', 'root', '00000000');
            $this->dbh->exec("SET CHARACTER SET utf8");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }
    }
    public static function ruta()
    {
        return "http://localhost/clinica/";
    }
    /* public static function url()
     {
         $pageURL = 'http';
         if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
         $pageURL .= "://";
         if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
         } else {
            $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
         }
         return $pageURL;
     }*/
}


?>
