<?php

switch ($_SERVER['PATH_INFO']){
    case '':
        require 'home.php';
        break;
    case '/cadastro':
        require 'adicionaConta.php';
        break;
    case '/consulta':
        require 'consultarContas.php';
        break;
    default:
        echo "erro 440";
}