<?php

use Alura\Banco\Infra\Conexao;

require_once "Autoload.php";

$conexao = new Conexao();

$consulta = $conexao->consultarTitular();

foreach ($consulta as $data) {
    echo "<hr>";
    echo "ID           : ", utf8_decode($data["codigo"]) . PHP_EOL;echo "<br>";
    echo "Nome         : ", utf8_decode($data["nome"])   . PHP_EOL;echo "<br>";
    echo "CPF          : ", utf8_decode($data["cpf"])    . PHP_EOL;echo "<br>";
    echo "Cidade       : ", utf8_decode($data["cidade"]) . PHP_EOL;echo "<br>";
    echo "Bairro       : ", utf8_decode($data["bairro"]) . PHP_EOL;echo "<br>";
    echo "Rua          : ", utf8_decode($data["rua"])    . PHP_EOL;echo "<br>";
    echo "Número       : ", utf8_decode($data["numero"]) . PHP_EOL;echo "<br>";
    echo "Saldo        : ", utf8_decode($data["saldo"])  . PHP_EOL;echo "<br>";
    echo "Tipo da Conta: ", utf8_decode($data["conta"])  . PHP_EOL;echo "<br>";
}
