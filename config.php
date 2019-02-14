<?php

return [
    'database' => [
        'connection' => 'mysql:host=localhost',
        'name' => 'php-practice',
        'username' => 'root',
        'password' => 'root',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];