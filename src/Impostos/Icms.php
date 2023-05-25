<?php

namespace Alura\DesignPattern1\Impostos;

use Alura\DesignPattern1\Orcamento;

class Icms implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}
