<?php

require './app/helper.php';
require './app/Task.php';
//var_dump($_GET);

$usuario = 'debian-sys-maint';
$contraseña = 'ntqDKtOF3DQwllhq';

//phpinfo();
try {
    $mbd = new PDO('mysql:host=localhost;dbname=phplaraveldevs', $usuario, $contraseña);
}catch (\Exception $e)
{
    echo('Error de connexio a la base de dades');
}

$consulta = $mbd -> prepare ('select * from tasks;');

$consulta -> execute();

$tasks = $consulta -> fetchAll(PDO::FETCH_CLASS, 'Task');

$task = new Task(1, 'titol tasca', 'descripcio tasca', 1);

$greeting = "Hola " . $_GET["nom"] . " " . $_GET["Cognom"] . "!";