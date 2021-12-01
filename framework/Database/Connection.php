<?php

namespace framework\Database;

use framework\App;
use PDO;

class Connection
{
    private static $config;



    public static function make($config)
    {
        static::$config = $config;
        return self::$config;
    }


    public static function connectDB()
    {
        $dsn =  static::$config['dbType'] .
            ':host=' .  static::$config['host'] .
            ';dbname='  .  static::$config['dbName'];

        try {
            return new PDO($dsn, static::$config['user'], static::$config['password']);
        }catch (\Exception $e)
        {
            dd($e);
            //echo('Error de connexio a la base de dades');
        }
    }
}