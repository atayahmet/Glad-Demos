<?php

$config['glad'] = [
    'fields' => [
        'identity' => ['email'], 
        'password' => 'password'
    ],
    'repository' => [
        'session' => [
            'path'   => '../cache/',
            'type'   => 'serialize',
            'name'   => 'SESSIONID',
            'prefix' => 'ses_',
            'crypt'  => false,
            'timeout'=> 1800
        ]
    ],
    'provider' => [
        'SessionHandlerInterface' => 'Glad\Driver\Repository\NativeSession\Session'
    ],
    'services' => [
        'db' => '',
    ],
    'remember' => [
        'enabled'   => true,
        'cookieName'=> 'glad',
        'lifetime'  => (3600*5),
        'field'     => 'remember_token'
    ],
    'cost'   => 5,
    'secret' => '4%634sadAsD__^'
];