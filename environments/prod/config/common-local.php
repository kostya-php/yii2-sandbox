<?php

return [
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=sandbox',
            'username' => 'root',
            'password' => '',
            'tablePrefix' => '',
            'enableSchemaCache' => true,
            'schemaCacheDuration' => 60,
            'schemaCache' => 'cache',
        ],
        'mailer' => [],
    ],
];
 