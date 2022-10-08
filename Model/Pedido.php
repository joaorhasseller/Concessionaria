<?php


class Pedido {

    private $Conn;
    
    private $CodPedido;
   
    public $CodCliente;
   
    public $DataCompra;
   
    public $CodVeiculo;
   
    public $CodLocacao;

    public function __construct($Conn, $Nome) {
     
     $this->Conn = $Conn;
     $this->Nome = $Nome;
    }
   
   
   }
   
   
   ?>





