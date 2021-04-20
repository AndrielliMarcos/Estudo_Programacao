<?php

namespace App\Db;

use \PDO;
use \PDOException;

class DataBase
{
    const HOST = 'localhost';
    const NAME = 'teste_estagio';
    const USER = 'root';
    const PASS = '';

    private $table;
    private $connection;

    public function __construct()
    {
        
        $this->setConnection();
    }

    //método responsável por criar a conecxão com o banco
    private function setConnection()
    {
        try {
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('ERROR: '.$e>getMessage());
        }
    }

    //método responsável por executar queries dentro do banco
    public function execute($query, $params = [])
    {
        try{
            $stmt = $this->connection->prepare($query);
            $stmt->execute($params);

            return $stmt;
        }catch (PDOException $e) {
            die('ERROR: '.$e->getMessage());
        }
    }

    //método responsável por inserir dados no banco
    public function insert($values)
    {
        $query = 'INSERT INTO `teste_estagio`.`clientes` (`nome`, `cpf`, `endereco`, `celular`, `ativo`) VALUES (?,?,?,?,?);';

        $this->execute($query, array_values($values));

        //retorna id inserido
        return $this->connection->lastInsertId();
    }

    //método responsável por fazer uma consulta no banco
    public function select()
    {
        $query = 'SELECT * FROM `teste_estagio`.`clientes`';

        return $this->execute($query);

    }

    //método responsável por atualizar os dados do banco
    public function update($where,$values)
    {
        $query = 'UPDATE `teste_estagio`.`clientes` SET `nome`= ?,`cpf`= ?,`endereco`= ?,`celular`= ?, `ativo`= ? WHERE '.$where ;
        //$fields = array_keys($values);

        //$query = 'UPDATE `teste_estagio`.`clientes` SET '.implode('=?,',$fields).'=? WHERE '.$where';

        $this->execute($query, array_values($values));

        return true; 
    }

    //método responsável por excluir os dados do banco
    public function delete($where)
    {
        $query = 'DELETE FROM `teste_estagio`.`clientes` WHERE '.$where;

        $this->execute($query);

        return true;
    }
}