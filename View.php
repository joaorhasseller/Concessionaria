<?php
include "../Model/Conexao.php";
include "../Model/Cliente.php";

$base= new Conexao();
$db = $base->getConection();
$cliente = new Cliente($db);

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>


<?php   $cliente->Leitura(); ?>
    
</body>
</html>