<?php

require './config.php';
require './app/helper.php';
require './app/Task.php';
require './app/DBManag.php';


$conDB = new DBManag($config);

$tasks = $conDB -> obtenirTotesLesTasques();



$greeting = "Hola " . $_GET["nom"] . " " . $_GET["Cognom"] . "!";