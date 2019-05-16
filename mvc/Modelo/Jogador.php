<?php
namespace Modelo;

use \PDO;
use \Framework\DW3BancoDeDados;

class Jogador extends Modelo
{
   // const BUSCAR_TODOS = 'SELECT id, texto, usuario FROM mensagens ORDER BY id';
    const INSERIR = 'INSERT INTO usuario(nome, apelido, email, senha) VALUES (?, ? , ? , ?)';
    const BUSCAR_POR_EMAIL = 'SELECT * FROM usuario WHERE email = ? LIMIT 1';

    private $id;
    private $nome;
    private $sobrenome;
    private $email;
    private $senha;

    public function __construct(
        $nome,
        $apelido,
        $email,
        $senha = null,
        $id = null
    ) {
       $this->nome = $nome;
       $this->apelido = $apelido;
       $this->email = $email;
       $this->senha = $senha;
        $this->id = $id;
    }


    public function salvar()
    {
        var_dump("entrou");
        DW3BancoDeDados::getPdo()->beginTransaction();
        $comando = DW3BancoDeDados::prepare(self::INSERIR);
        $comando->bindValue(1, $this->nome, PDO::PARAM_STR);
        $comando->bindValue(2, $this->apelido, PDO::PARAM_STR);
        $comando->bindValue(3, $this->email, PDO::PARAM_STR);
        $comando->bindValue(4, $this->senha, PDO::PARAM_STR);
        $comando->execute();
        $this->id = DW3BancoDeDados::getPdo()->lastInsertId();
        DW3BancoDeDados::getPdo()->commit();
    }



    public static function buscarEmail($email)
    {

        var_dump("dentro do busca");
        $comando = DW3BancoDeDados::prepare(self::BUSCAR_POR_EMAIL);
        $comando->bindValue(1, $email, PDO::PARAM_STR);
        $comando->execute();
        $objeto = null;
        $registro = $comando->fetch();
        if ($registro) {
            $objeto = new Jogador(

                '',
                '',
                $registro['email'],
                '',
                $registro['id']
            );
            $objeto->senha = $registro['senha'];
        }
        return $objeto;
    }

    public function verificarSenha($senhaPlana)
    {
        var_dump("Senha: --- > ".$this->senha);
        return  $this->senha;
    }

}
