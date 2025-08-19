<?php
class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $preco;

    public function __construct($marca, $modelo, $ano, $preco) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->preco = $preco;
    }

    // Método 1 - Exibir informações do carro
    public function exibirInfo() {
        return "Carro: {$this->marca} {$this->modelo}, Ano: {$this->ano}, Preço: R$ " . number_format($this->preco, 2, ',', '.');
    }

    // Método 2 - Aplicar desconto
    public function aplicarDesconto($percentual) {
        $this->preco -= ($this->preco * ($percentual / 100));
    }
}
