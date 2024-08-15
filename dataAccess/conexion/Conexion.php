<?php

class ConexionDB {
    #atributos
    private $server="localhost";
    private $database="tienda";
    private $username="root";
    private $password="";
    private $connection;

    #FUNCIONES O METODOS
    public function connect(){
        $this->connection=new PDO("mysql:host=$this->server;dbname=$this->database",$this->username,$this->password);
        return $this->connection;
    }

    public function closeConnection(){
        $this->connection=null;
    }
}
