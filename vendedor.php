<?php
class Vendedor {
    public $nome;
    public $matricula;

    public function __construct($nome, $matricula) {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    // Método 1 - Exibir dados do vendedor
    public function exibirVendedor() {
        return "Vendedor: {$this->nome}, Matrícula: {$this->matricula}";
    }

    // Método 2 - Vender carro
    public function venderCarro($cliente, $carro) {
        return "Venda realizada! {$cliente->nome} comprou o carro {$carro->modelo} com {$this->nome}.";
    }
}
