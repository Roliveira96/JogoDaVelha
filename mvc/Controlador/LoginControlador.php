<?php
namespace Controlador;

use Modelo\Jogador;

class LoginControlador extends Controlador
{
    public function loginPage()
    {

    $this->visao('login/index.php');

    }


    public function login()
    {


        var_dump("Email: --> " . $_POST['usuario']);



        $usuario = Jogador::buscarEmail($_POST['usuario']);

        if ($usuario && $usuario->verificarSenha($_POST['senha'])) {
            var_dump('Dentro do if');
          //  DW3Sessao::set('usuario', $usuario->getId());
            $this->redirecionar(URL_RAIZ .'sala');
        } else {
            var_dump('Dentro do else');
            $this->setErros(['login' => 'Usuário ou senha inválido.']);
            $this->visao('login/criar.php');
        }


       // $usuario->login($_POST['usuario'] , $_POST['senha'] );


    }
}
