<?php

namespace Alura\DesignPattern1;

use Alura\DesignPattern1\Desconto\Desconto;
use Alura\DesignPattern1\Desconto\MaisDeCincoItens;
use Alura\DesignPattern1\Desconto\SemDesconto;
use Alura\DesignPattern1\Desconto\ValorMaiorIgual;
use Alura\DesignPattern1\Orcamento;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new MaisDeCincoItens(
            new ValorMaiorIgual(
                new SemDesconto()
            )
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}