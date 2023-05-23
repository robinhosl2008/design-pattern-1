<?php

namespace Alura\DesignPattern1;

use Alura\DesignPattern1\Imposto\Imposto;

class CalculadoraImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}