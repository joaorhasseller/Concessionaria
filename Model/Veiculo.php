<?php


class Veiculo {

    private $CodVeiculo;
   
    public $Nome;
   
    public $Marca;
   
    public $Ano;
   
    public $Placa;
   
    public $Cor;

    public $Combustivel;
   
    public $Renavan;
   
    public $Chassi;
   
    public $Cambio;

    public $Preco;

    public $CodItens;

    public $Tipo;
    
    public $CodFoto;

    public function __construct(Type $var = null) {
     
     $this->var = $var;
    }
   
   
   }
   
   
   ?>