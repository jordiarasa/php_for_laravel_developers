<?php



class DBManag
{

    protected  $mbd;

    function __construct($config)
    {
        $dsn =  $config['database']['dbType'] .
                ':host=' . $config['database']['host'] .
                ';dbname=' . $config['database']['dbName'];
        
        try {
            $this -> mbd = new PDO($dsn, $config['database']['user'], $config['database']['password']);
        }catch (\Exception $e)
        {
            echo('Error de connexio a la base de dades');
        }
    }

    function obtenirTotesLesTasques()
    {
        $consulta = $this -> mbd -> prepare ('select * from tasks;');

        $consulta -> execute();

        return $consulta -> fetchAll(PDO::FETCH_CLASS, 'Task');
    }

}