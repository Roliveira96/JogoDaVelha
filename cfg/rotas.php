<?php

$rotas = [
    '/' => [
        'GET' => '\Controlador\HomeControlador#index',

    ],

    '/login' => [

        'GET' => '\Controlador\LoginControlador#loginPage',
        'POST' => '\Controlador\LoginControlador#login',
    ],

    '/sala' => [

       'GET' => '\Controlador\SalaControlador#index',
    ],
    '/partida' => [

        'GET' => '\Controlador\SalaControlador#partida',
    ],

    '/cadastroUsuario' =>[

        'GET' => '\Controlador\CadastroUsuarioControlador#index',
        'POST' => '\Controlador\CadastroUsuarioControlador#armazenar',

    ]

];
