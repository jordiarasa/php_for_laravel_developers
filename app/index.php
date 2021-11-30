<?php

use framework\Database\Database;

require './config.php';
require './app/helper.php';

//require 'framework/Database/Database.php';

$database = new Database($config);
//$tasks = $conDB -> obtenirTotesLesTasques();

$tasks = $database -> selectAll('tasks');


$greeting = "Hola " . $_GET["nom"] . " " . $_GET["Cognom"] . "!";