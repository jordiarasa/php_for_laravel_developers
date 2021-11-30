<?php

class DBManag
{
    protected  $mbd;

    function __construct()
    {
        $usuario = 'debian-sys-maint';
        $contraseña = 'ntqDKtOF3DQwllhq';

        try {
            $this -> mbd = new PDO('mysql:host=localhost;dbname=phplaraveldevs', $usuario, $contraseña);
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