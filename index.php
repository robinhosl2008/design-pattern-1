<?php

use Alura\DesignPattern1\CalculadoraImpostos;
use Alura\DesignPattern1\Imposto\Icms;
use Alura\DesignPattern1\Imposto\Iss;
use Alura\DesignPattern1\Orcamento;

require_once "./vendor/autoload.php";

$calculadora = new CalculadoraImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Iss());