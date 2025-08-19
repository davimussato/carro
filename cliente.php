<?php
class Cliente {
    public $nome;
    public $cpf;

    public function __construct($nome, $cpf) {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    
    public function exibirCliente() {
        return "Cliente: {$this->nome}, CPF: {$this->cpf}";
    }

    
    public function solicitarCompra($carro) {
        return "{$this->nome} deseja comprar o carro {$carro->modelo}.";
    }
}
