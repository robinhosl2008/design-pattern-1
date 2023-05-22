<?php

namespace Alura\DesignPattern1;

class CalculadoraImpostos
{
    public function calcula(Orcamento $orcamento, string $nomeImposto): float
    {
        switch ($nomeImposto) {
            case 'ICMS':
                return $orcamento->valor * 0.1;
                break;
            
            case 'ISS':
                return $orcamento->valor * 0.06;
                break;
        }
    }
}