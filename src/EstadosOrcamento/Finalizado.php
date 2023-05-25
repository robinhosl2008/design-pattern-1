<?php

namespace Alura\DesignPattern1\EstadosOrcamento;

use Alura\DesignPattern1\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException('Um orçamento finalizado não pode receber desconto');
    }
}
