<?php
class Conexao{
    var $host="localhost";
    var $base="concnsionaria";
    var $username="root";
    var $password="";

    public function getConection(){
        $this->conn=null;
        try{
            $this->conn= new PDO("mysql:host=".$this->host.";dbname=".$this->base,$this->username,$this->password);
        }catch(PDOException $exception){
            echo "erro conexão :". $exception->getMessage();
        }
        if($this->conn){
            echo "conecatado BD";
        }
        return $this->conn;
    }
}