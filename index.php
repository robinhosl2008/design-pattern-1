<?php

use Alura\DesignPattern1\CalculadoraImpostos;
use Alura\DesignPattern1\Orcamento;

require_once "./vendor/autoload.php";

$calculadora = new CalculadoraImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, 'ICMS');