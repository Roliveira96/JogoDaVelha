<?php
namespace Controlador;

use Modelo\Jogador;
use Modelo\Partida;


class SalaControlador extends Controlador
{

    private $i = 0;

    public function index()
    {

    $this->visao('sala/index.php');


    }


    public function partida()
    {



        $this->visao('partida/index.php');
            $partida =   Partida::partida($this->i);



    }

    public function  jogador1(){
       // $partida = Partida::partida();


    }
}
