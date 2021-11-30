<?php

namespace framework\Database;
use App\Models\Task;
use PDO;

class Database
{
    private $connection;

    /**
     * @param $config
     */
    public function __construct($config)
    {
        $Connexio = new namespace\Connection($config);
        $this -> connection =  $Connexio -> connectDB();
    }


    function selectAll($table)
    {
        $consulta = $this -> connection -> prepare ('select * from' . $table);

        $consulta -> execute();

        return $consulta -> fetchAll(PDO::FETCH_CLASS, Task::class);
    }
}