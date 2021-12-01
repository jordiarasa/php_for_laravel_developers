<?php

namespace framework\Database;
use App\Models\Task;
use framework\App;
use PDO;

class Database
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this -> pdo = $pdo;
    }

//    public static function make($config)
//    {
//        $Conexio = Connection::make($config);
//
//        static::$connection = $Conexio -> connectDB();
//
//        return self;
//        // return self::$connection;
//    }


    public function selectAll($table)
    {
        $consulta = $this -> pdo -> prepare ('select * from ' . $table);

        $consulta -> execute();

        return $consulta -> fetchAll(PDO::FETCH_CLASS, Task::class);
    }
}