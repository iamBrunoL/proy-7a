<?php

class Database{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host     = '192.168.0.105';
        $this->db       = 'canineworld';
        $this->user     = 'root';
        $this->password = "";
        $this->charset  = 'latin1_spanish_ci';
    }
	
    function connect(){
    
        try {
            $pdo = new PDO("mysql:host=".$this->host.";dbname=".$this->db."","root","");
            //echo "conexion exitosa";
            return $pdo;
        }
          catch(PDOException $e) {
              echo $e->getMessage();
        }
    }

}
?>