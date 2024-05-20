<?php
class Conexion{
    private $host;
    private $password;
    private $username;
    private $port;
    private $server;
    private $connection;
    private $db;
    public function __construct(){
        $this ->server = $_SERVER['HTTP_HOST'];
        $this ->connection = null;
        $this -> db = 'ciisa_backend_v1_eva2_B';
        $this ->port = 3306;
        $this ->host = 'localhost';
        
        if ($this ->server == 'localhost') {
            $this ->username = 'ciisa_backend_v1_eva2_B';
            $this ->password = 'l4cl4v3-c11s4';
        }
    }

    public function __destruct(){
        $this -> connection = mysqli_connect($this->host, $this->username, $this->password, $this->db, $this->port);

}


}