<?php
namespace Modelo;

use \PDO;
use \Framework\DW3BancoDeDados;
use \Modelo\Jogador;

class Partida extends Modelo
{
   // const BUSCAR_TODOS = 'SELECT id, texto, usuario FROM mensagens ORDER BY id';
    const INSERIR = 'INSERT INTO usuario($jogador, apelido, email, senha) VALUES (?, ? , ? , ?)';

    const INSERIRJOGADOR1 = 'INSERT INTO partida(idjogador1, apelido1) VALUES (?, ? )';
    const INSERIRJOGADOR2 = 'U INTO partida(idjogado2, apelido2) VALUES (?, ? )';
    const BUSCAR_POR_EMAIL = 'SELECT * FROM usuario WHERE email = ? LIMIT 1';

    private $id = 50;
    private $jogador1;
    private $jogador2;







    public  static function partida($num)
    {
        var_dump("entrou  ---> " . $num);



//        DW3BancoDeDados::getPdo()->beginTransaction();
//        $comando = DW3BancoDeDados::prepare(self::INSERIRJOGADOR1 );
//        $comando->bindValue(1,'0', PDO::PARAM_STR);
//        $comando->bindValue(2, 'semJogador', PDO::PARAM_STR);
//        $comando->execute();
//        $id = DW3BancoDeDados::getPdo()->lastInsertId();
//        DW3BancoDeDados::getPdo()->commit();
//
        

    }
//
//
//
//    public static function buscarEmail($email)
//    {
//
//        var_dump("dentro do busca");
//        $comando = DW3BancoDeDados::prepare(self::BUSCAR_POR_EMAIL);
//        $comando->bindValue(1, $email, PDO::PARAM_STR);
//        $comando->execute();
//        $objeto = null;
//        $registro = $comando->fetch();
//        if ($registro) {
//            $objeto = new Jogador(
//
//                '',
//                '',
//                $registro['email'],
//                ''
//
//            );
//           // $objeto->senha = $registro['senha'];
//        }
//        return $objeto;
//    }
//
//    public function verificarSenha($senhaPlana)
//    {
//        var_dump("Senha: --- > ".$this->senha);
//        return  $this->senha;
//    }

}
