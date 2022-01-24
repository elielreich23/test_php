<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Vaga{

  public $id;

  public $nome;

  public $cpf;

  public $email;

  public $descricao;

  
  public function cadastrar(){
        $obDatabase = new Database('vagas');
        $this->id = $obDatabase->insert([
            'nome'    => $this->nome,
            'cpf' => $this->cpf,
            'email'     => $this->email,
            'descricao'      => $this->descricao
          ]);
          return true;
  }

  public function atualizar(){
    return (new Database('vagas'))->update('id = '.$this->id,[
        'nome'    => $this->nome,
        'cpf' => $this->cpf,
        'email'     => $this->email,
        'descricao'      => $this->descricao
     ]);
  }

  public function excluir(){
    return (new Database('vagas'))->delete('id = '.$this->id);
}

  public static function getVagas($where = null, $order = null, $limit = null){
    return (new Database('vagas'))->select($where,$order,$limit)
     ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

    public static function getVaga($id){
    return (new Database('vagas'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }
}