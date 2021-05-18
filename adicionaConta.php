<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html;" />

        <title>Adiciona Conta</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>

        <?php
            if (@$_SERVER['HTTP_CACHE_CONTROL']) {
                echo "<div class='alert alert-danger' role='alert'>
                       Campos de Cadastro inválidos.
                  </div>";
            }
        ?>

        <form action="insert.php" method="POST">
            <label>Pessoa</label>
            <input type="text" placeholder="Insira seu Nome" name="nome">
            <input type="text" placeholder="Insira seu CPF"  name="cpf">

            <label>Endereço</label>
            <input type="text" placeholder="Insira sua Cidade" name="cidade">
            <input type="text" placeholder="Insira seu Bairro" name="bairro">
            <input type="text" placeholder="Insira sua Rua"    name="rua">
            <input type="text" placeholder="Insira seu Número" name="numero">

            <br><label>Tipo de Conta</label><br><br>
            <label for="corrente">Conta Corrente</label>
            <input type="radio" id="corrente" name="conta" value="Corrente"><br>

            <label for="pupanca" >Conta Poupança</label>
            <input type="radio" id="pupanca"  name="conta"  value="Poupanca"><br><br>

            <button type="submit">Cadastrar</button>
        </form>
    </body>
</html>