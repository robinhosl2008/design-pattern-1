<?php 

namespace Alura\DesignPattern1\Desconto;
use Alura\DesignPattern1\Orcamento;

class SemDesconto extends Desconto
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculaDesconto(Orcamento $orcamento): float
    {
        return 0;
    }
}