<?php

return [
    'fields' => [
        'identity' => ['username','email'], 
        'password' => 'password'
    ],
    'repository' => [
        'memcache'  => [
            'host'	  => '127.0.0.1',
				'port'	  => 11211,
				'timeout' => 1800,
				'prefix'  => 'ses_',
				'crypt'	  => false,
				'name'	=> 'SESSIONID'
        ]
    ],
    'provider' => [
        'SessionHandlerInterface' => 'Glad\Driver\Repository\Memcache\Memcache'
    ],
    'services' => [
        'db' => new App\GladModel
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