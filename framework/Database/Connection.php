<?php

namespace framework\Database;

use framework\App;
use PDO;

class Connection
{

    public static function make($config)
    {
        $dsn =  $config['dbType'] .
            ':host=' .  $config['host'] .
            ';dbname='  .  $config['dbName'];

        //phpinfo();

        try {
            return new PDO($dsn, $config['user'], $config['password']);
        }catch (\Exception $e)
        {
            echo('Error de connexio a la base de dades: ' . $e -> getMessage());
        }
    }



}