<?php

namespace framework\Database;

use PDO;

class Connection
{
    private $config;

    /**
     * @param $config
     */
    public function __construct($config)
    {
        $this->config = $config;
    }


    function connectDB()
    {
        $dsn = $this -> config['database']['dbType'] .
            ':host=' .  $this -> config['database']['host'] .
            ';dbname='  .  $this -> config['database']['dbName'];

        try {
            return new PDO($dsn, $this -> config['database']['user'], $this -> config['database']['password']);
        }catch (\Exception $e)
        {
            dd($e);
            //echo('Error de connexio a la base de dades');
        }
    }
}