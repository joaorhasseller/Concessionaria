
<?php

require("../Model/Conexao.php");

require("../Model/Cliente.php");


$base = new Conexao();

$db=$base->getConection();
$cliente = new Cliente($db); 
$cliente->CodCliente = $_GET['id'];
echo "codigo ".$cliente->CodCliente;
if(isset($_POST["Atualizar"])){
    echo "<br>acesso atualizar";
    $cliente->CodCliente = $_POST['id'];
    $cliente->Nome=$_POST['Nome'];
    
    if($cliente->Atualizar()){
        echo "cadastro com sucesso";
    }else{
        echo "Erro no cadastro";
    }

}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>


    <form action="Editar.php" method="post">
        <label for="Nome">Nome</label>
        <input type="text" name="Nome" id="Nome">
        <input type="text" name="id" value=<?php echo $cliente->CodCliente;?>>
        <input type="submit" value="Atualizar" name="Atualizar">
        <input type="reset" value="Cancelar" name="Cancelar">
    </form>
    
</body>
</html>



