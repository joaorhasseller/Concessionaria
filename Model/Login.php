<?php

class Login {

    public $CodLogin;

    public $CodCliente;
   
    public $Senha;
   
    public $Perfil;
   
    public $Usuario;

    public $Conn;
   


    public function __construct($db) {
        $this->Conn = $db;
    }

    public function Logar()
    {
        echo "Entrou no Logar";
        echo "<br> Login=={$this->Usuario}";
        echo "<br>Senha=={$this->Senha}";
        $query = "SELECT CodLogin,Usuario,Senha,Perfil FROM login WHERE Usuario=? and Senha=?";
        $stmt=$this->Conn->prepare($query);
        $stmt->bindParam(1, $this->Usuario);
        $stmt->bindParam(2, $this->Senha);
        $stmt->execute();
      var_dump($stmt);
        return $stmt;
    }

   
   
   
   }
   
   
   ?>