<?php



class Cliente {


       public $Conn;

       

       public $CodCliente;

       public $Nome;

       public $CPF;

       public $RG;

       public $table = "cliente";


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
              echo "<br>codigo=".$this->CodCliente;
              echo "<br>nome=".$this->Nome;
		$query="UPDATE cliente SET Nome=? WHERE CodCliente=?";
		$stmt=$this->Conn->prepare($query);
		$stmt->bindParam(1,$this->Nome);
              
		$stmt->bindParam(2,$this->CodCliente);

		if($stmt->execute()){
			return true;
		}else{return false;
		}
	}


       
       
       
       
       function Apagar(int $CodCliente)
       {
		$query="DELETE FROM cliente WHERE CodCliente=:CodCliente";
		$stmt = $this->Conn->prepare($query);
               $stmt->bindValue(':CodCliente', $CodCliente);
               $stmt->execute();
               return $stmt->rowCount();
       
		
		
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


