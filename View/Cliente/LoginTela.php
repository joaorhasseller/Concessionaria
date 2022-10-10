
<?php

include_once "../Model/Conexao.php";
include_once "../Model/Login.php";


$base = new Conexao();

$db= $base->getConection();

$login = new Login($db);

$login->Usuario=$_POST['Usuario'];
echo "Login=={$login->Usuario}";
$login->Senha=$_POST['Senha'];
echo "Login=={$login->Senha}";

if (isset($_POST['Logar'])){

  $stmt=$login->Logar();
  
echo "<table>";
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    extract($row);


   echo "<tr>";
   echo   "<td>{$CodLogin}</td>";
     echo " <td>{$Usuario}</td>";
    echo  "<td>{$Perfil}</td>";
   echo "</tr>";
    
  }
echo "</table>";

header("index.php");
}




?>