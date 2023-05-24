<?php

use Alura\DesignPattern1\CalculadoraDeDescontos;
use Alura\DesignPattern1\CalculadoraImpostos;
use Alura\DesignPattern1\Desconto\MaisDeCincoItens;
use Alura\DesignPattern1\Desconto\ValorMaiorIgual;
use Alura\DesignPattern1\Imposto\Icms;
use Alura\DesignPattern1\Imposto\Iss;
use Alura\DesignPattern1\Orcamento;

require_once "./vendor/autoload.php";

/*
$calculadora = new CalculadoraImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Iss());
*/

$calculadora = new CalculadoraDeDescontos();
$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->itens = 5;

$desconto = $calculadora->calculaDescontos($orcamento);
echo $desconto;