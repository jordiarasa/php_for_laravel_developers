<?php



class DBManag
{

    protected  $mbd;

    function __construct($config)
    {
//        $usuario = 'debian-sys-maint';
//        $contraseña = 'PYL9o31yB0voY1Ie';
//        $dsn = 'mysql:host=localhost;dbname=phplaraveldevs';



        $usuario = $config['database']['user'];
        $contraseña = $config['database']['password'];
        $databaseType = $config['database']['dbType'];
        $host = $config['database']['host'];
        $dbName = $config['database']['dbName'];
        $dsn = "$databaseType:host=$host;dbname=$dbName";


        try {
            $this -> mbd = new PDO($dsn, $usuario, $contraseña);
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