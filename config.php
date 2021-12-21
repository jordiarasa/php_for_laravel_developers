<?php

return [
    'database' => [
        'user' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'dbType' => $_ENV['DB_CONNECTION'],
        'host' => $_ENV['DB_HOST'],
        'dbName' => $_ENV['DB_DATABASE'],
    ]
];

//DB_PORT=3306


