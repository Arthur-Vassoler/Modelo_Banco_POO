<?php

require_once 'src/Conta.class.php';
require_once 'src/Titular.class.php';
require_once 'src/CPF.class.php';

$arthur = new Titular(new CPF('123.456.789-10'), 'Arthur Vassoler');
$primeiraConta = new Conta($arthur);

$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$cristiano = new Titular(new CPF('789.456.123-11'), 'Cristiano Vassoler');
$segundaConta = new Conta($cristiano);
$segundaConta->depositar(1000);
$segundaConta->sacar(300);

echo $segundaConta->recuperaNomeTitular() . PHP_EOL;
echo $segundaConta->recuperaCpfTitular() . PHP_EOL;
echo $segundaConta->recuperaSaldo() . PHP_EOL;

echo "Número de contas cadastradas: " . $primeiraConta->recuperaNumeroDeContas() . PHP_EOL;