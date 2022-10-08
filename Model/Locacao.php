<?php

Class Locacao{
  
    private $CodLocacao;

    public $DataLocacao;

    public $DataDevolucao;

    private $CodCliente;

    private $CodVeiculo;

    function __construct(Type $var = null) {
        $this->var = $var;
    }
}

