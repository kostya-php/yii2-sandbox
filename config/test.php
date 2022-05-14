<?php

return [
    'id' => 'app-tests',
    'language' => 'en-US',
    'components' => [
        'mailer' => [
            'useFileTransport' => true,
        ],
        'urlManager' => [
            'showScriptName' => true,
        ],
        'db' => [
            'dsn' => '',
        ],
    ],
];
