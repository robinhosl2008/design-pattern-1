<?php

namespace Alura\DesignPattern1\Desconto;
use Alura\DesignPattern1\Orcamento;

class MaisDeCincoItens extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->itens > 5) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}