<?php

namespace Alura\DesignPattern1;

use Alura\DesignPattern1\Descontos\Desconto;
use Alura\DesignPattern1\Descontos\DescontoMaisDe500Reais;
use Alura\DesignPattern1\Descontos\DescontoMaisDe5Itens;
use Alura\DesignPattern1\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}
