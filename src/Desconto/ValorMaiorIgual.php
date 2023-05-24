<?php

namespace Alura\DesignPattern1\Desconto;
use Alura\DesignPattern1\Orcamento;

class ValorMaiorIgual extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->valor >= 500) {
            return $orcamento->valor * 0.05;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}