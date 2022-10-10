<?php

    require '../Model/Cliente.php';
    require '../Model/Conexao.php';



    $base = new Conexao();
    $db = $base->getConection();

    $cliente = new Cliente($db);

    


    $resultado = $cliente->Leitura();
    echo "<table>";
    foreach($resultado as $valor){
      
        echo "<tr>";
            echo "<td>".$valor['CodCliente']."</td>";
            echo "<td>".$valor['Nome']."</td>";
            echo "<td>";
           echo "<a style=margin-right: 3px; href=Editar.php?id={$valor['CodCliente']} class='btn btn-defaul left-margin'>Atualizar</a>";
           echo "<a href=Excluir.php?id={$valor['CodCliente']} class='delete-object'>Excluir</a>";
        echo "</td>";

                echo "</tr>";

    }

echo "</table>";
?>