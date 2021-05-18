<?php

use Alura\Banco\Infra\Conexao;

require_once "Autoload.php";

$idRemove = utf8_decode($_REQUEST["idRemove"]);

$sql = "DELETE FROM titular WHERE idtitular = '".$idRemove."'";

$conexao = new Conexao();
$retorno = $conexao->deleteTitular($sql);

if ($retorno) {
    echo "Usuário removido com sucesso.";
} else {
    echo "Erro ao remover usuário.";
}

