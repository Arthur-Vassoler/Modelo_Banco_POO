<?php

require_once 'Autoload.php';

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{Endereco, CPF};

$endereco = new Endereco('Petrópolis', 'um Bairro', 'minha Rua', '71B');

$arthur = new Titular(new CPF('123.456.789-10'), 'Arthur Vassoler', $endereco);
$primeiraConta = new ContaPoupanca($arthur);

$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperaNome() . PHP_EOL;
echo $primeiraConta->recuperaCpf() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$cristiano = new Titular(new CPF('789.456.123-11'), 'Cristiano Vassoler', $endereco);
$segundaConta = new ContaCorrente($cristiano);
$segundaConta->depositar(1000);
$segundaConta->sacar(300);

echo $segundaConta->recuperaNome() . PHP_EOL;
echo $segundaConta->recuperaCpf() . PHP_EOL;
echo $segundaConta->recuperaSaldo() . PHP_EOL;

echo "Número de contas cadastradas: " . $primeiraConta->recuperaNumeroDeContas() . PHP_EOL;