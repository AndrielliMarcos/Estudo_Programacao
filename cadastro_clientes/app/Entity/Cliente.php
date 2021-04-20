<?php

namespace App\Entity;

use \App\Db\DataBase;
use \PDO;

class Cliente
{
    public $id;
    public $nome;
    public $cpf;
    public $endereco;
    public $celular;
    public $ativo;

    //método responsável por cadastrar uma nova cliente no banco
    public function create()
    {
        $db = new DataBase('cliente');
        $this->id = $db->insert([
                                    'nome' => $this->nome,
                                    'cpf' => $this->cpf,
                                    'endereco' => $this->endereco,
                                    'celular' => $this->celular,
                                    'ativo' => $this->ativo
                                ]);

        return true;                        
    }

    //método responsável por atualizar o cliente no banco
    public function update()
    {
        return (new DataBase('cliente'))->update('id = '.$this->id,[
                                                                'nome' => $this->nome,
                                                                'cpf' => $this->cpf,
                                                                'endereco' => $this->endereco,
                                                                'celular' => $this->celular,
                                                                'ativo' => $this->ativo
                                                                ]);

    }

    //método responsável por excluir os dados do cliente do banco
    public function delete()
    {
        return (new DataBase('cliente'))->delete('id = '.$this->id);
    }

    //método responsável por obter os clientes do banco
    public static function getCliente()
    {
        return (new DataBase('cliente'))->select()->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    //método responsável por obter um cliente do banco
    public static function getClienteForId($id)
    {
        return (new DataBase('cliente'))->select('id = '.$id)->fetchObject(self::class);
    }

        
}