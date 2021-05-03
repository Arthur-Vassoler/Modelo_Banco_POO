<?php


namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario\Funcionario;

class ControladoDeBonificacoes
{
    private float $totalBonificacoes = 0;

    public function adcionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}