<?php
require('../Model/Cliente.php');


class ControllerCliente extends Cliente
{
    public function __construct($db) {
       
       parent:: __construct($db);
       echo "aceso classe controller";
 }
      

}
    

?>