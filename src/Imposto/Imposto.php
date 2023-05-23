<?php

namespace Alura\DesignPattern1\Imposto;

use Alura\DesignPattern1\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
} 