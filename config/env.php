<?php
return [
    'db' => [
        'dsn' => 'mysql:host=123.0.0.1;dbname=apiphp;charset=utf8mb4',
        'user' => 'root',
        'pass' => ''
    ],
    'api' => [
        'env' => 'local',
        'debug' => true,
        'base_url' => 'http://localhost/api-php-natife/public',
        'jwt_secret' => 'CHANGE_ME_to_a_long_random_secret_>=32_chars',
        'allowed_origins' => ['http://localhost:3000','htpp://loclhost']
    ]
    ];