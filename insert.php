<?php
require_once 'Autoload.php';

use Alura\Banco\Infra\Conexao;

// Recebe os valores dos inputs do html.
// Titular
$nome   = utf8_decode($_REQUEST["nome"]);
$cpf    = utf8_decode($_REQUEST["cpf"]);
// Endereço
$cidade = utf8_decode($_REQUEST["cidade"]);
$bairro = utf8_decode($_REQUEST["bairro"]);
$rua    = utf8_decode($_REQUEST["rua"]);
$numero = utf8_decode($_REQUEST["numero"]);
// Conta
$tipoConta = utf8_decode($_REQUEST["conta"]);

// Query sql que eu quero executar, recebendo os dados do html.
$sql = "INSERT INTO titular (nomeTitular, cpfTitular, cidade, bairro, rua, numero, tipoconta) 
                       VALUES ('".$nome."','".$cpf."','".$cidade."', '".$bairro."','".$rua."','".$numero."', '".$tipoConta."')";

// Recebe a classe para o nosso arquivo.
$conexao = new Conexao();
// Chama o método executaConexao passando o parâmetro sql
$retorno = $conexao->insereTitular($sql);
// Passa um retorno para o usuário.
if ($retorno){
    header("Location: consultarContas.php");
} else {
    header("Location: adicionaConta.php");
}

?>