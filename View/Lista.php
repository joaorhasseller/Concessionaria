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
           echo "<a href=Editar.php?id={$valor['CodCliente']} class='btn btn-defaul left-margin'>Atualizar</a>";
         
        echo "</td>";

                echo "</tr>";

    }

echo "</table>";
?>