<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
require_once 'Autoload.php';

use Alura\Banco\Modelo\Conta\{Titular, Conta, ContaPoupanca, ContaCorrente};
use Alura\Banco\Modelo\{Endereco, CPF, Funcionario};

//---------- CONTA 1 ----------
$titular = new Titular(new CPF('12345678901'), 'Arthur', new Endereco('RS', 'PF','sm', 'sm','101'));
$conta1 = new ContaPoupanca($titular);
//---------- CONTA2 ----------
$titular2 = new Titular(new CPF('45678123465'), 'teste', new Endereco('RS', 'PF','sm', 'sm','101'));
$conta2 = new ContaCorrente($titular2);
//---------- CONTA 3 ----------
$titular3 = new Titular(new CPF('78912343610'), 'robt', new Endereco('RS', 'PF','sm', 'sm','101'));
$conta3 = new ContaCorrente($titular3);
//---------- CONTA 4 ----------
$titular4 = new Titular(new CPF('09889078965'), 'lok', new Endereco('RS', 'PF','sm', 'sm','101'));
$conta4 = new ContaPoupanca($titular4);

$funcionario = new Funcionario\Gerente("Arthur Vassoler","019.889.340-01","Gerente","10000");
//---------- transferências ----------
$conta1->Depositar(100.00);
$conta2->Depositar(1000.000);
$conta3->Depositar(100.00);
$conta3->Sacar(50.00);
$conta2->transferir(500.00, $conta1);
$conta3->transferir(10.00, $conta2);
$conta4->Depositar(20000.00);
$conta3->Depositar(100.00);
$conta1->Sacar(10.00);

$contas = [$conta1, $conta2, $conta3, $conta4];

foreach ($contas as $conta){
    echo "<div class='zuzu'>Nome do(a) titular: {$conta->getNome()}<br></div>";
    echo "<div class='zuzu'>CPF do titular: {$conta->getCpf()}<br></div>";
    echo "<div class='zuzu'>Saldo do titular: {$conta->getSaldo()}<br></div>";
    echo "<br>";
}

echo "<div class='lu'>Nome do funcionário: {$funcionario->getNome()} <br></div>";
echo "<div class='lu'>CPF do funcionário: {$funcionario->getCpf()} <br></div>";
echo "<div class='lu'>Cargo do funcionário: {$funcionario->getCargo()} <br></div>";
echo "<br>";

echo "<div class='am'>Numero de contas criadas: |" . Conta::getNumeroDeContas() . "| <br></div>";


?>
</html>