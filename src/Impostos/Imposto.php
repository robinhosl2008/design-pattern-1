<?php

namespace Alura\DesignPattern1\Impostos;

use Alura\DesignPattern1\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}
