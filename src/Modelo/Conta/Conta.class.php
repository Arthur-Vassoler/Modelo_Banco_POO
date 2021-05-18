<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static $numeroDeContas = 0;

    // O método construtor está recebendo 2 parâmetros para fazer a verificação, para criar uma contA

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo Indisponível.";
            return;
        }
        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo.";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getNome(): string
    {
        return $this->titular->getNome();
    }

    public function getCpf(): string
    {
        return $this->titular->getCpf();
    }

    public static function getNumeroDeContas(): int {
        return  self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
}