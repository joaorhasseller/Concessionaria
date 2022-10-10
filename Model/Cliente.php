<?php



class Cliente {


       public $Conn;

       

       public $CodCliente;

       public $Nome;

       public $CPF;

       public $RG;



       public $Telefone;

       public $Celular;

       public $Endereco;

       public $Email;

       public function __construct($db) {
       
              $this->Conn = $db;
              echo "acesso modelo cliente";
       }



       public function Leitura()
       {
       echo "entrou na consulta";
       $query = "SELECT * FROM cliente" ;
       $stm = $this->Conn->prepare($query);
       $stm->execute();
       return $stm;
       
       }

     public  function Atualizar(){
              echo "Atualizar dados<br>";
              echo "<br>CodCliente=".$this->CodCliente;
              echo "<br>Nome=".$this->Nome;
		$query="UPDATE cliente SET Nome=? WHERE CodCliente=?";
		$stmt=$this->Conn->prepare($query);
		$stmt->bindParam(1,$this->Nome);
              
		$stmt->bindParam(2,$this->CodCliente);
              $stmt->execute();
              var_dump($stmt);
		//if($stmt->execute()){
		//	return true;
		//}else{return false;
		//}
	}


       
       
       
       
       


	public function Apagar()
       {
              echo "Apagar dados<br>";
              echo "<br>codigo=".$this->CodCliente;
                     $query="DELETE FROM cliente WHERE CodCliente =?";
                     $stmt=$this->Conn->prepare($query);
                     $stmt->bindParam(1,$this->CodCliente);
                     if($stmt->execute()){
                            return true;
                     }else{
                            return false;
                     }

	}






        public function Cadastrar()
        {
              $data = [
                     'Nome' => $this->Nome,
                     'CPF' => $this->CPF,
                     
                 ];
                 $sql = "INSERT INTO cliente (Nome,CPF) VALUES (:Nome, :CPF)";
                 $stmt= $this->Conn->prepare($sql);
                 $stmt->execute($data);
               
              
                 
       
        }



        

        
       
                 
       
        }



    


    
 


  





?>


