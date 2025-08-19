<?php
// Incluindo as classes
require_once "Carro.php";
require_once "Cliente.php";
require_once "Vendedor.php";

// Criando objetos
$carro1 = new Carro("Toyota", "Corolla", 2022, 120000);
$cliente1 = new Cliente("João Silva", "123.456.789-00");
$vendedor1 = new Vendedor("Maria Souza", "V001");

// Aplicar desconto no carro
$carro1->aplicarDesconto(10);

// Exibir informações
echo $cliente1->exibirCliente() . "<br>";
echo $vendedor1->exibirVendedor() . "<br>";
echo $carro1->exibirInfo() . "<br><br>";

// Simular compra
echo $cliente1->solicitarCompra($carro1) . "<br>";
echo $vendedor1->venderCarro($cliente1, $carro1) . "<br>";
