<?php

namespace Alura\Banco\Infra;

use PDO;
use PDOException;

class Conexao
{
    private string $usuario = "vassoler";
    private string $senha = "";
    private string $banco = "vassoler";
    private string $servidor = "192.168.0.15";
    
    // O executaConexao recebe como parâmetro um sql, apos receber ele executa.
    public function abrirBanco(){
        $pdo = new PDO("pgsql: host= $this->servidor ;dbname=$this->banco;", $this->usuario, $this->senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public function insereTitular(string $sql)
    {
        try {
            $pdo = $this->abrirBanco();
            $pdo->exec($sql);
            return true;
        }catch (PDOException $e){
            return false;
        }
    }

    public function deleteTitular(string $sql)
    {
        try {
            $pdo = $this->abrirBanco();
            $pdo->exec($sql);
            return true;
        }catch (PDOException $e){
            return false;
        }
    }

    public function consultarTitular()
    {
        $pdo = $this->abrirBanco();
        $sql = $pdo->prepare("SELECT idtitular   AS codigo,
                                           nometitular AS nome,
                                           cpftitular  AS cpf,
                                           cidade      AS cidade,
                                           bairro      AS bairro,
                                           rua         AS rua,
                                           numero      AS numero,
                                           saldo       AS saldo,
                                           tipoconta   AS conta
                                      FROM titular");

        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}