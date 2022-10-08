<?php


include "../Model/Conexao.php";
include "../Model/Cliente.php";

$base= new Conexao();
$db = $base->getConection();
$cliente = new Cliente($db);




if(isset($_POST["criar"])){
	$cliente->Nome=$_POST["Nome"];
    $cliente->CPF=$_POST["CPF"];

    $cliente->Cadastrar();
    
   
	
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliar Cliente</title>
</head>
<body>

    <form action="CriarCliente.php" method="post">
        <label for="Nome">Nome</label>
        <input type="text" name="Nome" id="Nome">
        <label for="CPF">CPF</label>
        <input type="text" name="CPF" id="CPF">
        <input type="submit" name="criar" value="Enviar">


    </form>
    
</body>
</html>

