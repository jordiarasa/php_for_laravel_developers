<?php

namespace framework\Database;
use App\Models\Task;
use framework\App;
use PDO;

class Database
{
    private static $connection;


    public function __construct($config)
    {
        
        $Conexio = Connection::make($config);

        static::$connection = $Conexio -> connectDB();

       // return self::$connection;
    }

    public static function make($config)
    {
        $Conexio = Connection::make($config);

        static::$connection = $Conexio -> connectDB();

        // return self::$connection;
    }


    public function selectAll($table)
    {
        $consulta = static::$connection -> prepare ('select * from ' . $table);

        $consulta -> execute();

        return $consulta -> fetchAll(PDO::FETCH_CLASS, Task::class);
    }
}