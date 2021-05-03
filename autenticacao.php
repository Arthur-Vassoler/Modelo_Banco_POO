<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'Autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'João Silva',
    new CPF('123.789.456-15'),
    'Diretor',
    1000
);

$autenticador->tentaLogin($umDiretor,'1234');