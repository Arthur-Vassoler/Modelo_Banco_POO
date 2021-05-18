<?php
    use Alura\Banco\Infra\Conexao;

    require_once "Autoload.php";

    $conexao = new Conexao();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>Consultar Conta</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home">Banco POO</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Transações</a>
                    </li>

                    <div class="btn-group">
                        <a href="/consulta" class="btn btn-danger active" aria-current="page">Pesquisar Titular</a>
                        <a href="/cadastro" class="btn btn-danger active me-2" aria-current="page">Cadastrar Titular</a>
                    </div>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-danger" type="submit">Search</button>
                    </form>
            </div>
        </nav>
        <h1>Clientes do banco</h1><br><br>

        <h4>Remover Titular</h4>
        <form action="contas.php" method="post">
            <label for="idRemove">ID:</label>
            <input type="number" name="idRemove" id="idRemove">
            <button type="submit">Remover Titular</button>
        </form>

        <br>
        <br>
        <br>

        <h4>Gerar Relatório</h4>
        <form action="pdf.php" method="post">
            <button type="submit">Gerar pdf</button>
        </form>

        <div style="padding-left: 25px">
            <?php
                require "select.php";
            ?>
        </div>

    </body>
</html>