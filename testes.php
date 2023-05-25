<?php

use Alura\DesignPattern1\CalculadoraDeDescontos;
use Alura\DesignPattern1\CalculadoraDeImpostos;
use Alura\DesignPattern1\Impostos\{Icms, Iss};
use Alura\DesignPattern1\Orcamento;

require 'vendor/autoload.php';

/*$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Iss());
*/
$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;

echo $calculadora->calculaDescontos($orcamento);
