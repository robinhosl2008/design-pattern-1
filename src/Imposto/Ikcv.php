<?php

namespace Alura\DesignPattern1\Imposto;

use Alura\DesignPattern1\Orcamento;

class Ikcv extends ImpostoComDuasAliquotas
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->itens > 3;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.04;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.025;
    }
}
