<?php

return [
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=sandbox',
            'username' => 'root',
            'password' => '',
            'tablePrefix' => '',
        ],
        'mailer' => [
            'useFileTransport' => true,
        ],
    ],
];
 