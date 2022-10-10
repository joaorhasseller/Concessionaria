<?php


include_once '../Model/Conexao.php';
include_once '../Controller/ControllerCliente.php';


$conn = new Conexao();

$db = $conn->getConection();
$cliente = new ControllerCliente($db);
$cliente->CodCliente=$_GET['id'];

if ($cliente->Apagar()){
    echo "Excluido com sucesso";

}

else{

    echo "Erro ao excluir";
}


?>